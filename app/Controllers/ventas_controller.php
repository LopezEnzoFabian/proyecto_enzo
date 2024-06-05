<?php

namespace App\Controllers;

use App\Models\venta_cabecera_Model;
use App\Models\ventas_detalle_Model;
use App\Models\productos_Model;
use App\Models\usuario_model;

class ventas_Controller extends BaseController
{

    public function comprarCarrito()
    {
        $idSession = session();
        $cart = \Config\Services::cart();
        $productos = $cart->contents();
        $montoTotal = 0;
        $excedeStock = false; // Variable para verificar si se excede el stock
        $nombreProducto = '';
        //dd($productos);
        foreach ($productos as $producto) {
            $montoTotal += $producto["price"] * $producto["qty"];

            $ventaCabecera = new venta_cabecera_Model();
            $idSession = intval(session()->id_usuario);
            $fechaActual = date('Y-m-d'); // Obtener la fecha actual en el formato deseado
            $idCabecera = $ventaCabecera->insert([
                "total_venta" => $montoTotal,
                "id_usuario" => $idSession,
                "fecha" => $fechaActual // Agregar la fecha actual al array de datos
            ]);

            $ventaDetalle = new ventas_detalle_Model();
            $productModel = new productos_Model();
            $productStock = $productModel->find($producto["id"]); // Obtener los detalles del producto
            $stock = $productStock["stock"]; // Obtener el stock del producto

            if ($stock >= $producto["qty"]) {
                // Actualizar el stock del producto
                $newStock = $stock - $producto["qty"];
                $productModel->update($producto["id"], ['stock' => $newStock]);
                //dd($idCabecera);// Insertar en la tabla de ventas detalle
                $ventaDetalle->insert([
                    "id_vta_cabe" => $idCabecera,
                    "id_producto" => $producto['id'],
                    "cantidad" => $producto["qty"],
                    "precio" => $producto["price"]
                ]);
            } else {
                $excedeStock = true;
                $nombreProducto = $productStock["nombre_prod"]; // Suponiendo que el nombre del producto se encuentra en el campo "nombre".
            }
        }
        if ($excedeStock) {
            $mensaje = "La cantidad seleccionada para el producto '$nombreProducto' supera el stock disponible.";
            session()->setFlashdata('mensaje_stock', $mensaje);
            // Redireccionar de vuelta al carrito o a la página correspondiente
            return redirect()->to('/muestro');
        }
        $cart->destroy();
        session()->setFlashdata('success_compra', '¡Gracias por su compra!');
        // Redireccionar a la página de confirmación de compra
        return redirect()->to('/muestro');
    }

    public function ventas()
    {
        $session = session();
        $id = $session->get('id_usuario');
        $perfil = $session->get('id_perfil');

        $detalleVentas = new venta_cabecera_Model();

        if ($perfil == '1') {
            $data['ventaDetalle'] = $detalleVentas->orderBy('id_vta_cabe', 'DESC')->findAll();
        } elseif ($perfil == '2') {
            $data['ventaDetalle'] = $detalleVentas->where('id_usuario', $id)->orderBy('id_usuario', 'DESC')->findAll();
        }

        $dato['titulo'] = 'Ventas';
        echo view('header', $dato);
        echo view('nav');
        echo view('back/carrito/vista_ventas', $data);
        echo view('footer');
    }


    public function factura($ventaId)
    {
        $detalleVentas = new ventas_detalle_Model();
        $data['ventaDetalle'] = $detalleVentas->getDetalles($ventaId);

        $dato['titulo'] = 'Factura';
        echo view('header', $dato);
        echo view('nav');
        echo view('back/carrito/factura', $data);
        echo view('footer');
    }
    
}
