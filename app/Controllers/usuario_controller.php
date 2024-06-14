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
                 'nombre' => [
                    'rules' => 'required|max_length[100]',
                    'errors' => [
                        'required' => 'Por favor ingresar un nombre',
                        'max_length' => 'El nombre es muy largo',
                    ]
                ],
                'apellido' => [
                    'rules' => 'required|max_length[100]',
                    'errors' => [
                        'required' => 'Por favor ingresar un apellido',
                        'max_length' => 'El apellido es muy largo',
                    ]
                ],
                'ciudad' => [
                    'rules' => 'required|max_length[100]',
                    'errors' => [
                        'required' => 'Por favor ingresar tu ciudad',
                        'max_length' => 'El nombre es muy largo',
                    ]
                ],
                'localidad' => [
                    'rules' => 'required|max_length[100]',
                    'errors' => [
                        'required' => 'Por favor ingresar tu localidad',
                        'max_length' => 'El nombre es muy largo',
                    ]
                ],
                'direccion' => [
                    'rules' => 'required|max_length[100]',
                    'errors' => [
                        'required' => 'Por favor ingresar una dirección',
                        'max_length' => 'El nombre es muy largo',
                    ]
                ],
                'codigo_postal' => [
                    'rules' => 'required|max_length[50]',
                    'errors' => [
                        'required' => 'Por favor ingresar tu código postal',
                        'max_length' => 'El nombre es muy largo',
                    ]
                ],
                'email' => [
                    'rules' => 'required|max_length[100]|valid_email|is_unique[usuarios.email]',
                    'errors' => [
                        'required' => 'Por favor ingresar un email',
                        'max_length' => 'El email es muy largo',
                        'is_unique' => 'Este email ya existe',
                    ]
                ],
                'telefono' => [
                    'rules' => 'required|max_length[100]',
                    'errors' => [
                        'required' => 'Por favor ingresar un número de teléfono',
                        'max_length' => 'El teléfono es muy largo',
                    ]
                ],
                'nombre_usuario' => [
                    'rules' => 'required|max_length[100]',
                    'errors' => [
                        'required' => 'Por favor ingresar un nombre',
                        'max_length' => 'El nombre es muy largo',
                    ]
                ],
                'pass' => [
                    'rules' => 'required|max_length[100]',
                    'errors' => [
                        'required' => 'Por favor ingresar un password',
                        'max_length' => 'El password es muy largo',
                    ]
                ],
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
            return redirect()->to(base_url('registro'));
            // return $this->response->redirect('/login')
        }
    }
}
