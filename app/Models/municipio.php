<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class municipio extends Model
{
    protected $table = 'municipio';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'clave',
        'nombre',
        'idEstado',
        'date_added',
    ];  
}
