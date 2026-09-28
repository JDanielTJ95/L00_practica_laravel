<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contrato_empresa_contratista extends Model
{
    protected $table = 'contrato_empresa_contratista';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'contrato',
        'fecha_inicio',
        'fecha_termino',
        'no_poliza_cumplimiento',
        'no_poliza_civil',
        'nombre_representante',
        'nombre_residente_obra',
        'nombre_supervisor_obra',
        'telefono_representante',
        'telefono_residente_obra',
        'telefono_supervisor_obra',
        'estatus',
        'idDelegacion',
        'monto_contratado',
        'idEmpresa',
        'date_added',
    ];

    // public function delegacion()
    // {
    //     return $this->belongsTo(Delegacion::class, 'idDelegacion', 'Id');
    // }

    // public function empresa()
    // {
    //     return $this->belongsTo(EmpresaContratista::class, 'idEmpresa', 'Id');
    // }
}
