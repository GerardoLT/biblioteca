<?php

namespace App\Http\Controllers;
use App\Http\Requests\cliente;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class Controlador2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $Datos=DB::table('clientes')->get();
        return view("Clientes",compact("Datos") );
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 
    public function store2(cliente $request)
    {$titulo=$request->input("nombre");
        DB::table('clientes')->insert([
            "nombre"=>$request->input("nombre"),
            "email"=>$request->input("email"),
            "ine"=> $request->input("ine"),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),
           ]);
      
           return redirect("Clientes" )->with('m1',compact("titulo"));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(cliente $request , $id)
    {  
        DB::table('clientes')->where('idCliente',$id)->update([
            "nombre"=>$request->input("nombre"),
            "email"=>$request->input("email"),
            "ine"=> $request->input("ine"),
            "updated_at"=> Carbon::now(),
           ]);
      
           return redirect("Clientes" )->with('m2','exito');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy2($id)
    {
        DB::table('clientes')->where('idCliente',$id)->delete();
        return redirect('Clientes')->with('m3',"eliminar");
    
    }
}
