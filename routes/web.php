<?php

use App\Http\Controllers\AutorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\TitulosController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LibreriaController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\VentasTituloController;
use App\Models\venta;

Route::get('/', function(){
    return view('home');
});
Auth::routes();
Route::resource('libreria', LibreriaController::class);
Route::resource('autores', AutorController::class);
Route::resource('titulos', TitulosController::class);
Route::resource('editoriales', EditController::class);
Route::resource('ventas', VentasController::class);
Route::resource('ventast', VentasTituloController::class);
Route::get('/ConsultaEditoriale/{id}',[EditController::class, 'ConsultaEditoriale']);
Route::get('/ConsultaTitulos/{id}',[TitulosController::class, 'ConsultaTitulos']);
Route::get('/EditorialRelacionada/{id}',[EditController::class, 'EditorialRelacionada']);

Route::get('/muestraAutoresLibro/{id}', [TitulosController::class, 'muestraAutoresLibro']);
Route::get('/agregarAutorTitulo/{id}', [TitulosController::class, 'agregarAutorTitulo']);
Route::get('/muestraVentasTitulos/{id}', [LibreriaController::class, 'muestraVentasTitulos']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/editorial_listado', [EditController::class, 'imprimir']);
Route::get('/ventas_listado', [VentasTituloController::class, 'imprimir']);
