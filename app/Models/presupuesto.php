<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class presupuesto extends Model
{
    use HasFactory;

    protected $table = 'presupuesto';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'presupuesto',
        'fecha_inicio',
        'fecha_termino',
        'no_poliza_cumplimiento',
        'no_poliza_civil',
        'nombre_representante',
        'nombre_residente_obra',
        'telefono_representante',
        'telefono_residente_obra',
        'estatus',
        'idDelegacion',
        'monto',
        'idEmpresa',
        'date_added',
    ];
}
