<?php

namespace App\Controllers;
use App\Models\productos_Model;

class Home extends BaseController
{
    public function index()
    {
        $productoModel = new productos_Model();
        $dato['producto'] = $productoModel->orderBy('id_producto', 'DESC')->findAll();

        $data ['titulo'] = 'inicio';
        echo view('header', $data);
        echo view('nav');
        echo view('main', $dato);
        echo view('footer');
    }

    public function comercializacion()
    {
      echo view('header');
      echo view('nav');
      echo view('comercializacion');
      echo view('footer');
    }

    public function quienessomos()
    {
        echo view('header');
        echo view('nav');
        echo view('quienessomos');
        echo view('footer');
    }


    public function contacto()
    {
        echo view('header');
        echo view('nav');
        echo view('contacto');
        echo view('footer');
    }

    public function terminosyusos()
    {
        echo view('header');
        echo view('nav');
        echo view('terminosyusos');
        echo view('footer');
    }

   /*
    public function login()
    {
        echo view('header');
        echo view('nav');
        echo view('back/login');
        echo view('footer');
    }

    public function registro()
    {
        echo view('header');
        echo view('nav');
        echo view('back/registro');
        echo view('footer');
    }
    */


}

