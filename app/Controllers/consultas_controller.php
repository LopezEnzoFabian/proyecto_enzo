<?php

namespace App\Controllers;

use App\Models\Consulta_model;
use CodeIgniter\Controller;
use CodeIgniter\Email\Email;

class consultas_controller extends Controller
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
        $request = \Config\Services::request();
        if ($request->getMethod(true)) {
            $rules = [
                'nombre' => 'required',
                'apellido' => 'required',
                'email' => 'required|valid_email',
                'telefono' => 'required',
                'mensaje' => 'required'
            ];

            $validations = $this->validate($rules);
            if ($validations) {
                $data = [
                    'nombre' => $request->getPost('nombre'),
                    'apellido' => $request->getPost('apellido'),
                    'email' => $request->getPost('email'),
                    'telefono' => $request->getPost('telefono'),
                    'mensaje' => $request->getPost('mensaje')
                ];
                $userConsulta = new consulta_Model();
                $userConsulta->insert($data);
                return redirect()->to('contacto')->with('msg', 'Se registro tu consulta!.');
            } else {
                $data['validation'] = $this->validator;
            }
            $data['titulo'] = 'contacto';
            return view('header', $data) .
                view('nav') .
                view('contacto') .
                view('footer');
        }
    }
}
