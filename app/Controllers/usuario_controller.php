<?php

namespace App\Controllers;

use App\Models\usuario_model;
use CodeIgniter\Controller;

class usuario_controller extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }
    public function create()
    {
        $data['titulo'] = 'Registro';
        echo view('header', $data);
        echo view('nav');
        echo view('back/registro');
        echo view('footer');
    }
    public function formValidation()
    {
        $validationRules =
            [
                'nombre' => 'required|min_length[3]',
                'apellido' => 'required|min_length[3]|max_length[20]',
                'cuidad' => 'required|min_length[3]|max_length[50]',
                'localidad' => 'required|min_length[3]|max_length[50]',
                'direccion' => 'required|min_length[3]|max_length[50]',
                'codigo_postal' => 'required|min_length[3]|max_length[20]',
                'email' => 'required|min_length[3]|max_length[100]|valid_email|is_unique[usuarios.email]',
                'telefono' => 'required|min_length[3]|max_length[50]',
                'nombre_usuario' => 'required|min_length[3]|max_length[50]',
                'pass' => 'required|min_length[3]|max_length[50]'
            ];
        $input = $this->validate($validationRules);
        $formModel = new usuario_model();
        if (!$input) {
            $data['titulo'] = 'Registro';
            echo view('header', $data);
            echo view('nav');
            echo view('back/registro', ['validation' => $this->validator]);
            echo view('footer');
        } else {
            $formModel->save(
                [
                    'nombre' => $this->request->getVar('nombre'),
                    'apellido' => $this->request->getVar('apellido'),
                    'ciudad' => $this->request->getVar('ciudad'),
                    'localidad' => $this->request->getVar('localidad'),
                    'direccion' => $this->request->getVar('direccion'),
                    'codigo_postal' => $this->request->getVar('codigo_postal'),
                    'email' => $this->request->getVar('email'),
                    'telefono' => $this->request->getVar('telefono'),
                    'nombre_usuario' => $this->request->getVar('nombre_usuario'),
                    'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
                    //password_hash() crea un nuevo hash de contraseña usando un algoritmo de hash de único sentido.
                ]
            );
            // Flashdata funciona solo en redirigir la función en el controlador en la vista de carga.
            session()->setFlashdata('success', 'Usuario registrado con éxito');
            return redirect()->to(base_url('/registro'));
            // return $this->response->redirect('/login')
        }
    }
}
