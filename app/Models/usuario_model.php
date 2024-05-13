<?php
namespace App\Models;
use CodeIgniter\Model;

class usuario_model extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = "id_usuario";
    protected $allowwedFields = ['nombre','apellido','ciudad','localidad','direccion','codigo_postal','email',
    'telefono','nombre_usuario','pass','id_perfil'];
}

