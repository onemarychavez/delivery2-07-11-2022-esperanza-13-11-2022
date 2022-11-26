<?php
namespace App\Models;

use CodeIgniter\Model;

class SucursalesModel extends Model{
    protected $table = "sucursales";
    protected $primaryKey = "idsucursal";
    protected $returnType = "array";
    protected $allowedFields = [
        'idempresa',
        'nombre',
        'telefono',
        'iddepartamento',
        'idmunicipio',
        'direccion',
        'direccion2',
        'direccion3',
        'encargado',
        'activo'
    ];
    protected $skipValidation = true;
}