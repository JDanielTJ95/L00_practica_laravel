<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class asignacion extends Model
{
    use HasFactory;

    protected $table = 'asignacion';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'tipo_doc_ref',
        'id_doc_ref',
        'tipo_asignacion',
        'id_asignacion',
        'estatus',
        'idEtapa',
        'idContrato',
        'idUsuarioAlta',
        'date_added',
    ];

    // public function contrato()
    // {
    //     return $this->belongsTo(ContratoEmpresaContratista::class, 'idContrato', 'Id');
    // }
    // public function usuarioAlta()
    // {
    //     return $this->belongsTo(User::class, 'idUsuarioAlta', 'user_id');
    // }
}
