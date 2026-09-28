<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class representante_copad extends Model
{
    use HasFactory;

    protected $table = 'representante_copad';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'clave',
        'nombre',
        'usuario_app',
        'contrasenia_app',
        'estatus',
        'date_added',
    ];
}
