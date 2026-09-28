<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    protected $fillable = [
        'firstname',
        'lastname',
        'user_name',
        'user_password_hash',
        'user_email',
        'date_added',
        'usuarios',
        'inventarios',
    ];
}
