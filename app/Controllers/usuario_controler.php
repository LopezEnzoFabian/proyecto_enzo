<?php

namespace App\Controllers;

use App\Models\usuario_model;
use CodeIgniter\Controller;

class usuario_controller extends Controller
{
    public function __construct(){
        helper(['form', 'url']);
    }
    public function create(){
        $dato['titulo'] = 'registro';
        echo view('header');
        echo view('nav');
        echo view('back/registro');
        echo view('footer');
    }
    public function formValidation(){
        $input = $this->validate(
            [
                'nombre' => 'requered|min_length[3]',
                'apellido' => 'requered|min_length[3]|max_legth[20]',
                'cuidad' => 'requered|min_length[3]|max_length[25]',
                'localidad' => 'requered|min_length[3]|max_length[25]',
                'direccion' => 'requered|min_length[3]|max_length`[25]',
                'codigo_postal' => 'requered|min_length[3]|max_length[10]',
                'email' => 'requered|min_length[3]|max_length[100]|valid_email|is_unique[usuarios.email]',
                'telefono' => 'requered|min_length[3]|max_length[50]',
                'nombre_usuario' => 'requered|min_length[3]|max_length[25]',
                'contraseña' => 'requered|min_length[8]|max_length[15]',
            ],
        );
        $formModel = new usuario_Model();
        if (!$input) {
            $data['titulo'] = 'registro';
            echo view('head', $data);
            echo view('nav');
            echo view('back/registro', ['validation' => $this->validator]);
            echo view('footer');
        } else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'cuidad' => $this->request->getVar('cuidad'),
                'localidad' => $this->request->getVar('localidad'),
                'direccion' => $this->request->getVar('direccion'),
                'codigo_postal' => $this->request->getVar('codigo_postal'),
                'email' => $this->request->getVar('email'),
                'telefono' => $this->request->getVar('telefono'),
                'nombre_usuario' => $this->request->getVar('nombre_usuario'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
                //password_hash() crea un nuevo hash de contraseña usando un algoritmo de hash de único sentido.
            ]);
            // Flashdata funciona solo en redirigir la función en el controlador en la vista de carga.
            session()->setFlashdata('success', 'Usuario registrado con exito');
            return redirect()->to('/login');
            // return $this->response->redirect('/login')
        }
    }
}
