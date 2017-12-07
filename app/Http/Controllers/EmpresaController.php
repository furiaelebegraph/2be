<?php

namespace App\Http\Controllers;

use App\empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $title = 'Index - Empresa';
        return view('empresa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $title = 'Crear Info Company';
        return view('empresa.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $empresa = new empresa();
            if ($request->hasFile('logo')) {
                $imagen = $request->file('logo');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = 'img/empresa/'.$filename;
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                $empresa->logo = $path;
            }
            if ($request->hasFile('icono')) {
                $imagen = $request->file('icono');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = 'img/empresa/'.$filename;
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                $empresa->icono = $path;
            }

                $empresa->nombre = $request->nombre;

                $empresa->direccion = $request->direccion;

                $empresa->correo = $request->correo;

                $empresa->telefono = $request->telefono;

                $empresa->save();

                return redirect('empresa');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Mostrar Info';


        $imagen = empresa::findOrfail($id);
        return view('imagen.show',compact('title','imagen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $empresa = empresa::findOrfail($id);
        return view('imagen.edit',compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {

            $empresa = empresa::findOrfail($id);
            if ($request->hasFile('logo')) {
                $imagen = $request->file('logo');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = 'img/empresa/'.$filename;
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                $empresa->logo = $path;
            }
            if ($request->hasFile('icono')) {
                $imagen = $request->file('icono');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = 'img/empresa/'.$filename;
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                $empresa->icono = $path;
            }

                $empresa->nombre = $request->nombre;

                $empresa->direccion = $request->direccion;

                $empresa->correo = $request->correo;

                $empresa->telefono = $request->telefono;

                $empresa->save();

                return redirect('empresa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        $empresa = empresa::findOrFail($id);
        $empresa->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }
}
