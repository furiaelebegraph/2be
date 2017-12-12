<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
	function inmueblis(){
    	return $this->hasMany(Inmueble::class); 
    }

    public static function todosInmuebles($id){
    	return Inmueble::where('cate_id', '=', $id)->select('nombre','id', 'imagen', 'titulo', 'descripcion', 'precio')->orderBy('created_at', 'DESC')->paginate(9);
    }

    protected $table = 'cate';
    protected $fillable = [
        'nombre','imagen', 'activo', 'orden'
    ];
}
