<?php
namespace App\Models;
use CodeIgniter\Model;

class consulta_Model extends Model
{
    protected $table = 'consulta';
    protected $primaryKey = "id_consulta";
    protected $allowedFields = ['nombre','apellido','email','telefono','mensaje','leido'];
}

