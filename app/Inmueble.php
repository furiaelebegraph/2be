<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    function ima(){
    	return $this->hasMany(Ima::class);
    }
    function cate(){
    	return $this->belongsTo(Cate::class);
    }
    protected $table = 'inmueble';
    protected $fillable = [
        'nombre','imagen', 'cate_id', 'orden', 'titulo', 'descipcion', 'activo'
    ];
}
