<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class delegacion extends Model
{
    protected $table = 'delegacion';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'clave',
        'nombre',
        'idMunicipio',
        'date_added',
    ];
}
