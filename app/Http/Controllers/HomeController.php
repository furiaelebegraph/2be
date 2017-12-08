<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cate;
use App\Inmueble;
use App\Banner;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Cate::all();
        $inmuebles = Inmueble::all();
        $banners = Banner::all();

        $inmuesbles = Inmueble::orderBy('created_at','desc')->take(5)->get();
        $ultimoinmuebles = Inmueble::orderBy('created_at','desc')->take(1)->get();
        $ultimacates = Cate::orderBy('created_at','desc')->take(1)->get();
        return view('home', compact('categorias', 'inmuebles', 'inmuesbles', 'ultimoinmuebles', 'ultimacates', 'banners'));
    }

    public function layoutAdmin(){
        $categorias = Cate::all();
        $inmueble = Inmueble::all();
        return view('layouts.admin', compact('categorias', 'inmueble'));     
    }
}
