<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documentos extends Model
{
    use HasFactory;

    protected $table = 'documentos';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'ben_clave',
        'descripcion',
        'url',
        'observaciones',
        'estatus',
        'date_added',
    ];
}
