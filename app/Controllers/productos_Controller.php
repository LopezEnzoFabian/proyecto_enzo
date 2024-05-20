<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\productos_Model;

class productos_Controller extends Controller
{
    public function __construct()
    {
        helper(['url', 'form']);
        // $db = \Config\Database::connect();
    }
    // MOSTRAR LOS PRODUCTOS EN LISTA
    public function index()
    {
        $productoModel = new productos_Model();
        $data['producto'] = $productoModel->orderBy('id_producto', 'DESC')->findAll();

        $dato['titulo'] = 'Crud_productos';
        echo view('header', $dato);
        echo view('nav');
        echo view('back/productos/productos_view', $data);
        echo view('footer');
    }
    public function creaProducto()
    {
        $productoModel = new productos_Model();
        $data['obj'] = $productoModel->orderBy('id_producto', 'DESC')->findAll();

        $dato['titulo'] = 'Alta producto';
        echo view('header', $dato);
        echo view('nav');
        echo view('back/productos/alta_productos_view', $data);
        echo view('footer');
    }
    public function store()
    {
        $input = $this->validate([
            'nombre_prod'     => 'required|min_length[2]',
            'id_categoria'    => 'is_not_unique[categoria.id_categoria]',
            'precio'          => 'required',
            'precio_vta'      => 'required',
            'stock'           => 'required',
            'stock_min'       => 'required',
            'imagen'          => 'mime_in[imagen,image/jpg,image/jpeg,image/png,image/webp,image/ico]'
        ]);
        $productoModel = new productos_Model();

        if (!$input) {
            session()->setFlashdata('warning', '¡Datos no validos!');
            $dato['titulo'] = 'Alta';
            echo view('header', $dato);
            echo view('nav');
            echo view('back/productos/alta_productos_view', ['validation' => $this->validator]);
        } else {
            if (!$this->request->getFile('imagen')->isValid()) {
                // El usuario no ha seleccionado un archivo de imagen válido
                session()->setFlashdata('warning', '¡Imagen no valida!');
                return redirect()->to(base_url('/product-form'));
            }
            $img = $this->request->getFile('imagen');
            $nombre_aleatorio = $img->getRandomName();
            $img->move(ROOTPATH . 'assets/descargas', $nombre_aleatorio);
            if ($this->request->getVar('precio') < 0 || $this->request->getVar('precio_vta') < 0) {
                session()->setFlashdata('warning-2', '¡Ingrese un precio mayor a 0!');
                return redirect()->to(base_url('/product-form'));
            } else {
                $data = [
                    'nombre_prod'  => $this->request->getVar('nombre_prod'),
                    'imagen'       => $img->getName(),
                    // COMPLETAR CON LOS DEMAS CAMPOS
                    'id_categoria' => $this->request->getVar('id_categoria'),
                    'precio'       => $this->request->getVar('precio'),
                    'precio_vta'   => $this->request->getVar('precio_vta'),
                    'stock'        => $this->request->getVar('stock'),
                    'stock_min'    => $this->request->getVar('stock_min'),
                ];
            }
            $productoModel->insert($data);
            return $this->response->redirect(base_url('crear'));
        }
    }
}
