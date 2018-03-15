<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@welcome');

Route::group(['prefix' => 'adminis'], function(){
	Auth::routes();
});

Route::group(['middleware'=> 'auth'],function(){
  Route::resource('categoria','CateController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('categoria/{id}/update','CateController@update');
  Route::get('categoria/{id}/delete','CateController@destroy');
  Route::get('categoria/{id}/deleteMsg','CateController@DeleteMsg');
});

Route::group(['middleware'=> 'auth'],function(){
  Route::resource('banner','BannerController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('banner/{id}/update','BannerController@update');
  Route::get('banner/{id}/delete','BannerController@destroy');
  Route::get('banner/{id}/deleteMsg','BannerController@DeleteMsg');
});

Route::group(['middleware'=> 'auth'],function(){
  Route::resource('inmueble','InmuebleController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('inmueble/{id}/update','InmuebleController@update');
  Route::get('inmueble/{id}/delete','InmuebleController@destroy');
  Route::get('inmueble/{id}/deleteMsg','InmuebleController@DeleteMsg');
});

Route::group(['middleware'=> 'auth'],function(){
  Route::resource('imagen','imaController', ['only' => ['store', 'index', 'edit']]);
  Route::post('imagen/cargarGale', 'imaController@cargarGaleria');
  Route::get('imagen/create/{id}', 'imaController@create');
  Route::post('imagen/{id}/update','imaController@update');
  Route::get('imagen/{id}/delete','imaController@destroy');
  Route::get('imagen/{id}/deleteMsg','imaController@DeleteMsg');
});

Route::get('/inmueble/data','WelcomeController@showPaginacion');


Route::post('enviar_correo', 'WelcomeController@enviarCorreo');

Route::get('/ajax_categoria/{id}', 'WelcomeController@ajaxCategoria');

Route::get('/ajaxDetalle/{id}', 'WelcomeController@ajaxDetalle');

Route::get('categoria/{id}', 'CateController@show');

Route::get('banner/{id}', 'BannerController@show');

Route::get('inmueble/{id}', 'InmuebleController@show');

Route::get('/home', 'HomeController@index')->name('home');
