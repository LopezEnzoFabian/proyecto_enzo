<?php

namespace App\Models;
use CodeIgniter\Model;

class venta_cabecera_Model extends Model {
    protected $table = 'venta_cabecera';
    protected $primaryKey = 'id_vta_cabe';
    protected $allowedFields = ['fecha', 'id_usuario', 'total_venta'];
}