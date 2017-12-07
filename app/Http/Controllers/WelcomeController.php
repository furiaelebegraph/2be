<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cate;
use App\Inmueble;
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
    public function welcome(){
        $categorias = Cate::all();
        $galerias = Inmueble::orderBy('created_at', 'desc')->first();
        return view('welcome', compact('categorias', 'galerias'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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
