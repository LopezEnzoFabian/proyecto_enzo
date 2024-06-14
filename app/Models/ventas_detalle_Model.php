<?php

namespace App\Models;
use CodeIgniter\Model;

class ventas_detalle_Model extends Model {
    protected $table = 'ventas_detalle';
    protected $primaryKey = 'id_vta_detalle';
    protected $allowedFields = ['id_vta_cabe', 'id_producto', 'cantidad','precio'];

    public function getDetalles($id = null, $id_usuario = null) {
        $db = \Config\Database::connect();
        $builder = $db->table('ventas_detalle');
        $builder->select('*');
        $builder->join('venta_cabecera', 'venta_cabecera.id_vta_cabe = ventas_detalle.id_vta_cabe');
        $builder->join('productos', 'productos.id_producto = ventas_detalle.id_producto');
        $builder->join('usuarios', 'usuarios.id_usuario = venta_cabecera.id_usuario');

        if ($id !== null) {
            $builder->where('venta_cabecera.id_vta_cabe', $id);
        }

        $query = $builder->get();
        return $query->getResultArray();
    }
}