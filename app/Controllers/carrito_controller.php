<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\usuario_model;
use App\Models\productos_Model;
use App\Models\venta_cabecera_Model;
use App\Models\venta_detalle_Model;

class carrito_controller extends BaseController
{

    public function __construct()
    {
        helper(['form', 'url', 'cart']);

        $session = session();
        $cart = \Config\Services::cart();
        $cart->contents();
    }

    public function catalogo()
    {
        $session=session();
            $dato = array('titulo' => 'Todos los Productos');
            $productoModel = new productos_Model();
            $data['producto'] = $productoModel->orderBy('id_producto', 'DESC')->findAll();
          
         echo view('header', $dato);
         echo view('nav');
         echo view('back/carrito/productos_catalogo_view',$data);
         echo view('footer');
       }

    //muestro el carrito
    public function muestra()
    {
        $session = session();
        $cart = \Config\Services::cart();
        $cart = $cart->contents();
        $dato['titulo'] = 'Confirmar compra';
        echo view('header', $dato);
        echo view('nav');
        echo view('back/carrito/carrito_view');
        echo view('footer');
    }

    public function add()
    {
        $cart = \Config\Services::Cart();
        $request = \Config\Services::request();
        $cart->insert(array(
            'id'      => $request->getPost('id_producto'),
            'qty'     => 1,
            'name'    => $request->getPost('nombre_prod'),
            'price'   => $request->getPost('precio_vta'),
        ));
        session()->setFlashdata('addsuccess', '¡Producto añadido al carrito!');
        return redirect()->back()->withInput();
    }

    public function remove($rowid)
    {
        $cart = \Config\Services::Cart();
        $request = \Config\Services::request();
        //Si $rowid es "all" destruye el carrito
        if ($rowid === "all") {
            $cart->destroy();
        } else { //Sino destruye sola fila seleccionada 
            $cart->remove($rowid);
        }
        // Redirige a la misma página que se encuentra
        return redirect()->back()->withInput();
    }

      //Actualiza el carrito que se muestra
  public function actualiza_carrito() {

    $cart = \Config\Services::Cart();
     
    $request = \Config\Services::request();
    
    $cart->update(array(
        'id'      => $request->getPost('id_producto'),
        'qty'     =>  1,
        'price'   => $request->getPost('precio_Vta'),
        'name'    => $request->getPost('nombre_prod'),
   
    ));
    return redirect()->back()->withInput();
}
}
