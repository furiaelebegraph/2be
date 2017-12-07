<?php

namespace App\Http\Controllers;

use App\Inmueble;
use Illuminate\Http\Request;
use Image;
use App\Cate;
use App\Ima;

class InmuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - Inmueble';
        $albums = Inmueble::with('Ima')->get();
        $inmuebles = Inmueble::paginate(10);
        $imagenes = Ima::all();
        return view('inmueble.index', compact('albums', 'inmuebles','imagenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Crear Inmuebles'
        $categorias = Cate::all();
        return view('inmueble.create', compact('title','categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $inmueble = new Inmueble();
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = 'img/inmueble/'.$filename;
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                $inmueble->imagen = 'img/inmueble/'.$filename;
            }
                $inmueble->nombre = $request->nombre;
                $inmueble->cate_id = $request->id_categoria;
                $inmueble->orden = $request->alter;
                $inmueble->save();
                $photos = $request->file('photos');
                if (!empty($photos)) {
                    foreach ($photos as $indexPhoto=>$photo) {
                        $nombre = $inmueble->nombre.'_'.$indexPhoto.'_'.$photo->hashName();
                        $path = 'img/imagenes/'.$nombre;
                        $imagenes = new Ima();
                        Image::make($photo)->resize(null, 400, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        })->save($path);
                        $imagenes->produ_id = $inmueble->id;
                        $imagenes->imagen = $path;
                        $imagenes->nombre =  $inmueble->nombre.'_'.$indexPhoto.'_'.$photo->hashName();
                        $imagenes->orden = $indexPhoto;
                        $imagenes->save();
                    }
                }

                return redirect('inmueble');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $inmueble = Inmueble::with('Ima')->findOrfail($id);
        return view('inmueble.show',compact('inmueble'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $inmueble = Inmueble::findOrfail($id);
        $categorias = Cate::all();
        return view('inmueble.edit',compact('inmueble', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
            $inmueble = Inmueble::findOrfail($id);
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = 'img/inmueble/'.$filename;
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                $inmueble->imagen = 'img/inmueble/'.$filename;
            }

                $inmueble->nombre = $request->nombre;
                $inmueble->cate_id = $request->id_categoria;
                $inmueble->orden = $request->orden;
                $inmueble->save();

                return redirect('inmueble');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        $inmueble = Inmueble::findOrFail($id);
        $inmueble->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }
    public function ajaxInmueble($id)
    {
            $inmueble = Inmueble::obtenerInmueble($id);
            return response()->json($inmueble);
    }
    public function ajaxIma($id)
    {
            $imas = Ima::obtenerImagenes($id);
            return response()->json($imas);
    }
}
