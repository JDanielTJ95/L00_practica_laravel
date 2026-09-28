<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class responsable_contratista extends Model
{
    protected $table = 'responsable_contratistas';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'telefono',
        'correo_electronico',
        'idEmpresa',
        'date_added',
    ];
}
