<?php

use App\Http\Controllers\ControladorBiblioteca;
use App\Http\Controllers\Controlador3;
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
Route::get('/', function () {
    return view('Principal');
});
Route::get('Registro',[Controlador3::class,'index'])->name('mostrar.libros');
Route::post('guardar',[Controlador3::class,'store'])->name('guardar');