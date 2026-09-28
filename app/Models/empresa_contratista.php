<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class empresa_contratista extends Model
{
    protected $table = 'empresa_contratista';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'clave',
        'nombre',
        'estatus',
        'date_added',
    ];
}
