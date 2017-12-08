<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Ima extends Model
{
    function inmueble(){
    	return $this->belongsTo(Inmueble::class, 'inmueble_id');
    }

    public static function obtenerImagenes($id){
    	return Ima::where('inmueble_id', '=', $id)->select('imagen','id', 'nombre')->orderBy('orden', 'asc')->get();
    }
	protected $table = 'ima';
    protected $fillable = [
        'nombre','imagen', 'inmueble_id', 'orden', 'activo'
    ];
}
