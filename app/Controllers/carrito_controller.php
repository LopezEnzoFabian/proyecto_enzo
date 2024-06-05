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
    public function actualiza_carrito()
    {
        $cart = \Config\Services::cart();
        $request = \Config\Services::request();

        $items = $request->getPost('cart');

        foreach ($items as $item) {
            $cart->update([
                'rowid' => $item['rowid'],
                'qty' => $item['qty'],
            ]);
        }

        return redirect()->back()->withInput();
    }


    public function borrar_carrito()
    {
        $cart = \Config\Services::cart(); //para que incluya el $cart
        $cart->destroy();

        return redirect()->to(base_url('muestro'));
    }

    
}
