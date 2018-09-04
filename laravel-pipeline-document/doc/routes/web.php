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

Route::get('/', 'HomeController@login')->name('auth.login');

/*Route::get('/', function () {
    return view('login');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Proyecto
Route::get('/proyectos', 'ProyectoController@index')->name('proyectos');
Route::get('/crear-nuevo-proyecto', 'ProyectoController@create')->name('proyecto.create');
Route::post('/store-proyecto', 'ProyectoController@store')->name('proyecto.store');

Route::get('/wiki', 'WikiController@index')->name('wiki.index');

// Documento
Route::get('/documento/{id}', 'DocumentoController@show')->name('documento.detalle');
Route::post('/documento/subir', 'DocumentoController@loadDocumento')->name('documento.subir');


Route::get('/documentos/{proyectoId}', 'DocumentoController@documentoPorProyecto')->name('documentoPorProyecto');



Route::get('/documentosPorProyecto/{proyectoId}', 'DocumentoController@documentosPorProyecto')
->name('documentosPorProyecto')
->where('proyectoId', '(.*)');
 