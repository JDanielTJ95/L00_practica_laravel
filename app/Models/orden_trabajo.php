<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orden_trabajo extends Model
{
    protected $table = 'orden_trabajo';
    protected $primaryKey = 'Id';
    public $timestamps = false; // Se gestiona con date_added

    protected $fillable = [
        'fecha',
        'folio',
        'orden_trabajo',
        'oficio',
        'remitente',
        'asunto',
        'tipo_solicitud',
        'latitud_calle',
        'longitud_calle',
        'latitud_delegacion',
        'longitud_delegacion',
        'calle',
        'colonia',
        'idDelegacion',
        'turnadoa',
        'respuesta',
        'estatus',
        'archivo_recibido',
        'archivo_respuesta',
        'idUsuarioAlta',
        'date_added',
    ];
}
