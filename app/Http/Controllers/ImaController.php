<?php

namespace App\Http\Controllers;

use App\Ima;
use App\Inmueble;
use App\Cate;
use Image;
use Illuminate\Http\Request;

class ImaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - Imagenes';
        $inmuebles = Inmueble::all();
        return view('imagen.index', compact('inmuebles', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Crear Galeria';
        $inmueble = Inmueble::findOrfail($id);
        return view('imagen.create', compact('title', 'inmueble'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $imagen = new Ima();
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = 'img/ima/'.$filename;
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                $imagen->imagen = 'img/ima/'.$filename;
            }

                $imagen->nombre = $request->nombre;

                $imagen->inmueble_id = $request->inmuebles_id;

                $imagen->orden = $request->orden;

                $imagen->activo = $request->activo;

                $imagen->save();

                return redirect('imagen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $imagen = Ima::findOrfail($id);
        $inmueble = Inmueble::all();
        return view('imagen.edit',compact('imagen', 'inmueble'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $imagen = Ima::findOrfail($id);
        $inmueble = Inmueble::all();
        return view('imagen.edit',compact('imagen', 'inmueble'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {

            $imagen = Ima::findOrfail($id);
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = 'img/ima/'.$filename;
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                $imagen->imagen = 'img/ima/'.$filename;
            }

                $imagen->nombre = $request->nombre;

                $imagen->inmueble_id = $request->inmuebles_id;

                $imagen->orden = $request->orden;

                $imagen->activo = $request->activo;

                $imagen->save();

                return redirect('imagen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        $imagen = Ima::findOrFail($id);
        $imagen->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }

    public function cargarGaleria( Request $request){
                $this->validate($request, [
                    'galeria.*' => 'required | image',
                ],[   
                    'galeria'    => 'Por favor agrega imagenes.'
                ]);
                $photos = $request->file('galeria');
                if (!empty($photos)) {
                    foreach ($photos as $indexPhoto=>$photo) {
                        $nombre = $request->nombreInmueble.'_'.$indexPhoto.'_'.$photo->hashName();
                        $path = 'img/ima/'.$nombre;
                        $imagenes = new Ima();
                        Image::make($photo)->resize(null, 900, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        })->save($path);
                        $imagenes->proyecto_id = $request->proyecto_id;
                        $imagenes->imagen = $path;
                        $imagenes->nombre =  $request->nombreInmueble.'_'.$indexPhoto.'_'.$photo->hashName();
                        $imagenes->orden = $indexPhoto;
                        $imagenes->save();
                    }
                }else{
                    return back()->with('info', 'No se cargaron imagenes :(');
                }

                return redirect('inmueble');
    }

}
