<?php
namespace App\Models;
use CodeIgniter\Model;

class categorias_Model extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = "id_categoria";
    protected $allowedFields = ['descripcion'];
}
