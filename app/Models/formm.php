<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class formm extends Model
{
    protected $fillable = [
        'name' ,
        'email' ,
        'password' ,
         'confirm_password',
        'branch',
        'number'
    ];
}
