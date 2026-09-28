<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ticket_app extends Model
{

    use HasFactory;

    protected $table = 'ticket_apps';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'folio',
        'estatus',
        'solicitante',
        'solicitud',
        'comentarios',
        'material',
        'recibido',
        'actualizado',
        'telefono',
        'observaciones',
        'calle',
        'calle_verificada',
        'entre_calle1',
        'entre_calle2',
        'latitud',
        'longitud',
        'colonia',
        'idDelegacion',
        'estatus_trabajo',
        'fecha_visita',
        'notas',
        'evidencia',
        'idUsuarioAlta',
        'frente_trabajo',
        'date_added',

    ];
}
