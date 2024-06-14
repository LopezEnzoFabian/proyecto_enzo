<?php
namespace App\Models;
use CodeIgniter\Model;

class productos_Model extends Model
{
    protected $table = 'productos';
    protected $primaryKey = "id_producto";
    protected $allowedFields = ['nombre_prod','imagen','id_categoria','precio','precio_vta','stock','stock_min',
    'eliminado'];
}

