<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class bacheo extends Model
{

    use HasFactory;

    protected $table = 'bacheo';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'idEmpresa',
        'idResponsable',
        'idDocRef',
        'tipoDocRef',
        'folioRef',
        'idBacheo',
        'idDelegacion',
        'fecha',
        'estatus',
        'folio',
        'latitude',
        'longitude',
        'latitude_app',
        'longitude_app',
        'calle',
        'cp',
        'calleComplemento',
        'entreCalle1',
        'entreCalle2',
        'delegacion',
        'colonia',
        'tipo',
        'largo',
        'ancho',
        'profundidad',
        'm2total',
        'm2rastreo',
        'm2revestimiento',
        'm3relleno',
        'fotoBache1',
        'fotoBache2',
        'fotoBache3',
        'fotoBacheProceso1',
        'fotoBacheProceso2',
        'fotoBacheProceso3',
        'fotoBacheProceso4',
        'fotoBacheProceso5',
        'fotoBacheTerminado1',
        'fotoBacheTerminado2',
        'fotoBacheTerminado3',
        'idEtapa',
        'date_added',
        'date_added_proceso',
        'date_added_termino',
    ];
}
