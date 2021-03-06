<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cate;
use App\Inmueble;
use App\Banner;
use Carbon\Carbon;
use App\Mail\EnviarCorreo;
use Illuminate\Support\Facades\Mail;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function welcome(Request $request){

        $categorias = Cate::all();
        $banners = Banner::BannerActivo();
        $inmuebles = Inmueble::where('activo', '=', 'si')->orderBy('created_at', 'desc')->paginate(9);
        $galerias = Inmueble::orderBy('created_at', 'desc')->first();
        return view('welcome', compact('categorias', 'galerias', 'inmuebles', 'banners','inmueblis'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showPaginacion(Request $request)
    {
        $inmuebles = Inmueble::obtenerCategorias();
        return view('inmueble.data')->with('inmuebles', $inmuebles);
    }


    public function ajaxCategoria($id){
        $inmuebles = Inmueble::obtenerCatego($id);
        return view('inmueble.data')->with('inmuebles', $inmuebles);
    }

    public function ajaxDetalle($id){
        $inmueble = Inmueble::with('Ima')->findOrfail($id);

        return view('inmueble.detalle')->with('inmueble', $inmueble);
    }

    public function enviarCorreo(Request $request){
        $rules = [
            'nombre'    => 'required|max:255',
            'correo'    => 'required|email',
            'contenido' => 'required|min:5',
        ];
        $mensaje = [
            'required' => 'El :attribute es necesario.'
        ];

        $this->validate($request, $rules, $mensaje);

        $input = $request->all();
        Mail::to('emmanegr@gmail.com')->send(new EnviarCorreo($input));
        return back()->with('mensaje', 'Su correo fue enviado!');
    }
}