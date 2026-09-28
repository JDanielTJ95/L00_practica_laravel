<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class estado extends Model
{
    use HasFactory;

    protected $table = 'municipio';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'clave',
        'nombre',
        'date_added',
    ];
}
