<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class noticias extends Model
{
    use HasFactory;

    protected $table = 'noticias';
    protected $primaryKey = 'idNoticia';
    public $timestamps = false; 

    protected $fillable = [
        'fecha',
        'titulo',
        'descripcion',
    ];
}
