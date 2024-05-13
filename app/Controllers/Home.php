<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('nav');
        echo view('main');
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

