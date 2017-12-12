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

    public static function obtenerCatego($id){
        return Inmueble::where('activo', '=', 'si')->where('cate_id', '=', $id)->select('nombre','id', 'imagen', 'titulo', 'descripcion', 'precio')->orderBy('orden', 'DESC')->paginate(9);
    }

    protected $table = 'inmueble';
    protected $fillable = [
        'nombre','imagen', 'cate_id', 'orden', 'titulo', 'descipcion', 'activo', 'precio'
    ];
}
