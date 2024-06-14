<?php

namespace App\Controllers;

use App\Models\Consulta_model;
use CodeIgniter\Controller;
use CodeIgniter\Email\Email;

class consultas_controller extends BaseController
{

    public function __construct()
    {
        helper(['url', 'form']);
    }

    /* NOS PERMITE VER LA VISTA CONSULTAS */
    public function principal()
    {
        $consultaModel = new consulta_Model();
        $data['consulta'] = $consultaModel->orderBy('id_consulta', 'DESC')->findAll();

        $dato['titulo'] = 'Consultas';
        echo view('header', $dato);
        echo view('nav');
        echo view('back/usuarios/consultas', $data);
        echo view('footer');
    }

    public function Leidos()
    {
        $consultaModel = new consulta_Model();
        $data['consulta'] = $consultaModel->orderBy('id_consulta', 'DESC')->findAll();

        $dato['titulo'] = 'Consultas';
        echo view('header', $dato);
        echo view('nav');
        echo view('back/usuarios/consultas_leido', $data);
        echo view('footer');
    }


    public function registrar_consulta()
    {
        if (!session()->logged_in) {
            $rules = [
                'nombre' => [
                    'rules' => 'required|max_length[50]',
                    'errors' => [
                        'required' => 'Tienes que ingresar un nombre',
                        'max_length' => 'El nombre es muy largo',
                    ]
                ],
                'apellido' => [
                    'rules' => 'required|max_length[50]',
                    'errors' => [
                        'required' => 'Tienes que ingresar un apellido',
                        'max_length' => 'El apellido es muy largo',
                    ]
                ],
                'email' => [
                    'rules' => 'required|max_length[100]|valid_email|is_unique[usuarios.email]',
                    'errors' => [
                        'required' => 'Tienes que ingresar un email',
                        'max_length' => 'El email es muy largo',
                        'is_unique' => 'Este email ya existe',
                    ]
                ],
                'telefono' => [
                    'rules' => 'required|max_length[50]',
                    'errors' => [
                        'required' => 'Tienes que ingresar un numero de telefono',
                        'max_length' => 'El telefono es muy largo',
                    ]
                ],
                'mensaje' => [
                    'rules' => 'required|max_length[500]',
                    'errors' => [
                        'required' => 'Por favor ingresar tu mensaje',
                        'max_length' => 'El mensaje es muy largo',
                    ]
                ],
            ];
            if (!$this->validate($rules)) {
                return redirect()->back()->withInput($data['validation'] = $this->validator);
            }
            $data = [
                'nombre' => $this->request->getPost('nombre'),
                'apellido' => $this->request->getPost('apellido'),
                'email' => $this->request->getPost('email'),
                'telefono' => $this->request->getPost('telefono'),
                'mensaje' => $this->request->getPost('mensaje')
            ];
            $userConsulta = new consulta_Model();
            $userConsulta->insert($data);
            return redirect()->to('contacto')->with('msg', 'Se registro tu consulta!.');
        }
        $rules = [
            'mensaje' => [
                'rules' => 'required|max_length[500]',
                'errors' => [
                    'required' => 'Por favor ingresar tu mensaje',
                    'max_length' => 'El mensaje es muy largo',
                ]
            ],
        ];
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput($data['validation'] = $this->validator);
        }
        $data = [
            'nombre' => session()->nombre,
            'apellido' => session()->apellido,
            'email' => session()->email,
            'telefono' => session()->telefono,
            'mensaje' => $this->request->getPost('mensaje')
        ];
        $userConsulta = new consulta_Model();
        $userConsulta->insert($data);
        return redirect()->to('contacto')->with('msg', 'Se registro tu consulta!.');
    }

    public function leido($idConsulta)
    {
        $consultaModel = new consulta_Model();

        $data = [
            'leido' => 'SI'
        ];

        $consultaModel->update($idConsulta, $data);
        return redirect()->to('/consulta_contactos'); // Redirige a la página de consultas leídas después de marcar como leída
    }

    public function borrarConsulta($idConsulta)
    {
        $consultaModel = new consulta_Model();
        $consultaModel->delete($idConsulta);
        return redirect()->to('/consulta_ya_leidos')->with('msgc', 'Consulta borrada exitosamente');
    }
}
