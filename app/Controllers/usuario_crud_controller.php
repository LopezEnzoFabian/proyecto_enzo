<?php

namespace App\Controllers;

use App\Models\usuario_model;
use App\Models\consulta_Model;
use CodeIgniter\Controller;

class usuario_crud_controller extends Controller
{
    // podremos ver la tabla de usuarios activos que traemos de la bd
    public function principal()
    {
        $userModel = new usuario_model();
        $data['users'] = $userModel->orderBy('id_usuario', 'DESC')->findAll();

        $dato['titulo'] = 'Crud_usuarios';
        echo view('header', $dato);
        echo view('nav');
        echo view('back/usuarios/usuario_nuevo_view', $data);
        echo view('footer');
    }


    public function create()
    {
        $userModel = new Usuarios_model();
        $data['user_obj'] = $userModel->orderBy('id', 'DESC')->findAll();

        $dato['titulo'] = 'Alta Usuario';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/usuario/usuario_crud_view', $data);
        echo view('front/footer');
    }

    // insert data
   

    /* nos permite ver la vista usuario_eliminado_view con la tabla de eliminados */
    public function eliminados()
    {
        $userModel = new usuario_model();
        $data['users'] = $userModel->orderBy('id_usuario', 'DESC')->findAll();

        $dato['titulo'] = 'Crud_usuarios';

        echo view('header', $dato);
        echo view('nav');
        echo view('back/usuarios/usuario_eliminado_view', $data);
        echo view('footer');
    }


    /* BORRA UN USUARIO */
    public function delete($id = null)
    {
        $userModel = new usuario_model();
        $data['nombre_usuario'] = $userModel->where('id_usuario', $id)->delete($id);
        return $this->response->redirect(site_url('users-list'));
    }
    /* UN DELETE logico de un usuario "baja" el cual utilizamos para determinar si estara en la tabla de eliminados o de activos*/
    public function deletelogico($id = null)
    {
        $userModel = new usuario_model();
        $data['baja'] = $userModel->where('id_usuario', $id)->first();
        $data['baja'] = 'SI';
        $userModel->update($id, $data);
        return $this->response->redirect(base_url('usuarios'));
    }

    /* DEVUELVE EL USUARIO ELIMINADO POR deletelogico a la tabla de usuarios activos */
    public function activarlogico($id = null)
    {
        $userModel = new usuario_model();
        $data['baja'] = $userModel->where('id_usuario', $id)->first();
        $data['baja'] = 'NO';
        $userModel->update($id, $data);
        return $this->response->redirect(base_url('dadosbaja'));
    }


    
    public function store()
    {
        $input = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'nombre_usuario'  => 'required|min_length[3]',
            'pass'     => 'required|min_length[3]|max_length[10]'
        ]);
        $userModel = new usuario_model();

        if (!$input) {
            $data['titulo'] = 'Modificacion';
            echo view('header', $data);
            echo view('nav');
            echo view('back/usuario/usuario_crud_view', [
                'validation' => $this->validator
            ]);
        } else {

            $data = [
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'nombre_usuario' => $this->request->getVar('nombre_suario'),
                'email'  => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
            ];
            $userModel->insert($data);
            return $this->response->redirect(site_url('users-list'));
        }
    }
    // show single user
    public function singleUser($id = null)
    {
        $userModel = new usuario_model();
        $data['user_obj'] = $userModel->where('id_usuario', $id)->first();

        $dato['titulo'] = 'Crud_usuarios';
        echo view('header', $dato);
        echo view('nav');
        echo view('back/usuarios/edit_usuarios_view', $data);
        echo view('footer');
    }
    // update user data
    public function update()
    {
        $userModel = new usuario_model();
        $id = $this->request->getVar('id_usuario');
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'nombre_usuario' => $this->request->getVar('nombre_usuario'),
            'email'  => $this->request->getVar('email'),
            'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
            'id_perfil' => $this->request->getVar('id_perfil'),
            'baja' => $this->request->getVar('baja'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('users-list'));
    }
}
