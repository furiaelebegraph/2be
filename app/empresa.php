<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    protected $table = 'empresa';
    protected $fillable = [
        'nombre','logo', 'direccion', 'telefono', 'correo', 'icono'
    ];
}
