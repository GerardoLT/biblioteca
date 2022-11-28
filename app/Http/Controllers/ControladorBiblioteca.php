<?php

namespace App\Http\Controllers;
use App\Http\Requests\cliente;
use App\Http\Requests\Validaciones_biblioteca;
use Illuminate\Http\Request;

class ControladorBiblioteca extends Controller
{
public function confirmacion(Validaciones_biblioteca $d){
   $titulo=$d->input('titulo');
    return redirect()->route('R')->with('mensaje',compact('titulo'));
}
public function mensaje_de_exito(cliente $datos){
     return redirect()->route('C')->with('mensaje_de_exito' ,"exito");
 }
}
