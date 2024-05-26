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
        if (!session()->logged_in) {
            $rules = [
                'nombre' => 'required',
                'apellido' => 'required',
                'email' => 'required|valid_email',
                'telefono' => 'required',
                'mensaje' => 'required'
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
            'mensaje' => 'required'
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
}
