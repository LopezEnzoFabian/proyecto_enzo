<?php

namespace App\Controllers;

use App\Models\usuario_model;
use CodeIgniter\Controller;

class login_controller extends BaseController {

    public function index(){
        helper(['form', 'url']);

        $data['titulo'] = 'login';
        echo view('header', $data);
        echo view('nav');
        echo view('back/login');
        echo view('footer');
    }

    public function auth()
        {
            $session = session(); //el objeto de sesión se asigna a la variable $session
            $model = new usuario_model(); //instanciamos el modelo
            //traemos los datos del formulario
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('pass');

            if (empty($email) || empty($password)) {
                $session->setFlashdata('msg', 'Por favor, completa todos los campos');
                return redirect()->to(base_url('login'));
            }

            $data = $model->where('email', $email)->first(); //consulta sql 
            if ($data) {
                $pass = $data['pass'];
                $ba = $data['baja'];
                if ($ba == 'SI') {
                    $session->setFlashdata('msg', 'usuario dado de baja');
                    return redirect()->to('login');
                }
                //Se verifican los datos ingresados para iniciar, si cumple la verificaciòn inicia la sesion
                $verify_pass = password_verify($password, $pass);
                //password_verify determina los requisitos de configuracion de la contraseña
                if ($verify_pass) {
                    $ses_data = [
                        'id_usuario' => $data['id_usuario'],
                        'nombre' => $data['nombre'],
                        'apellido' => $data['apellido'],
                        'email' =>  $data['email'],
                        'telefono' => $data['telefono'],
                        'nombre_usuario' => $data['nombre_usuario'],
                        'id_perfil' => $data['id_perfil'],
                        'logged_in'  => TRUE
                    ];
                    //Si se cumple la verificacion inicia la sesiòn  
                    $session->set($ses_data);
                    session()->setFlashdata('success', 'Bienvenido!!');
                    return redirect()->to(base_url('/'));
                    // return redirect()->to('/prueba');//pagina principal
                } else {
                    //no paso la validaciòn de la password
                    $session->setFlashdata('warning', 'Password Incorrecta');
                    return redirect()->to(base_url('login'));
                }
            } else {
                //no paso la validaciòn del correo
                $session->setFlashdata('warning', 'No Existe el Email o es Incorrecto');
                return redirect()->to(base_url('login'));
            }
        }
        public function logout()
        {
            $session = session();
            $session->destroy();
            return redirect()->to(base_url('/'));
        }
}