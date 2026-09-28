<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class etapa extends Model
{
    use HasFactory;

    protected $table = 'etapa';
    protected $primaryKey = 'Id';
    public $incrementing = false; 
    public $timestamps = false;

    protected $fillable = [
        'Id',
        'clave',
        'descripcion',
        'carpeta_fotos',
    ];
}
