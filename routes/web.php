<?php

use App\Http\Controllers\ControladorBiblioteca;
use Illuminate\Support\Facades\Route;

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
Route::view('2','Clientes')->name('C');
Route::view('1','Registro')->name('R');
Route::get('/', function () {
    return view('Principal');
});
Route::post('Informacion',[ControladorBiblioteca::class,'confirmacion']);
Route::post('Informacion_cliente',[ControladorBiblioteca::class,'mensaje_de_exito']);