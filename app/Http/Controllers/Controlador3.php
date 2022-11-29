<?php

namespace App\Http\Controllers;
use App\Http\Requests\Validaciones_biblioteca;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class Controlador3 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datos=DB::table('libros')->get();
        return view("Registro",compact("Datos") );
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Validaciones_biblioteca $request)
    {
        DB::table('libros')->insert([
            "ISBN"=>$request->input("ISBN"),
            "TITULO"=>$request->input("titulo"),
            "AUTOR"=> $request->input("Autor"),
            "PAGINAS"=>$request->input("Paginas"),
            "EDITORIAL"=>$request->input("editorial"),
            "EMAIL"=> $request->input("Mail_Editorial"),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),
           ]);
           $titulo=$request->input('titulo');
           return redirect("Registro",compact("titulo") )->with('confirmacion','exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
