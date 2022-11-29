<?php

namespace App\Http\Controllers;
use App\Http\Requests\Validaciones_biblioteca;
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
    public function index()
    {
        $resulRec=DB::table('tb_recuerdos')->get();
        return view("recuerdos",compact("resulRec") );
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view("ingresar");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidarDiario $request)
    {
        DB::table('tb_recuerdos')->insert([
         "Titulo"=>$request->input("a"),
         "Recuerdo"=>$request->input("b"),
         "fecha"=> Carbon::now(),
         "created_at"=> Carbon::now(),
         "updated_at"=> Carbon::now(),
        ]);
        return redirect("crear")->with('confirmacion','exito');
    }
    public function store2(Validaciones_biblioteca $request)
    {
        DB::table('libros')->insert([
         "ISBN"=>$request->input("a"),
         "TITULO"=>$request->input("b"),
         "AUTOR"=> $request->input("b"),
         "PAGINAS"=>$request->input("a"),
         "EDITORIAL"=>$request->input("b"),
         "EMAIL"=> $request->input("b"),
         "created_at"=> Carbon::now(),
         "updated_at"=> Carbon::now(),
        ]);
        return redirect("recuerdos")->with('confirmacion','exito');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaid=DB::table('tb_recuerdos')->where('idrecuerdo',$id)->first();

        return view('modal_',compact('consultaid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  $resulRec=DB::table('tb_recuerdos')->get();
        $consultaid=DB::table('tb_recuerdos')->where('idrecuerdo',$id)->first();

        return view('recuerdos',compact('consultaid'),compact('resulRec'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidarDiario $request, $id)
    {    $resulRec=DB::table('tb_recuerdos')->get();
        DB::table('tb_recuerdos')->where('idrecuerdo',$id)->update([
            "Titulo"=> $request->input('a'),
            "Recuerdo"=> $request->input('b'),
            "updated_at"=> Carbon::now()
        ]);
        return redirect('recuerdos')->with('mensaje1',"editar");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_recuerdos')->where('idrecuerdo',$id)->delete();
        return redirect('recuerdos')->with('mensaje',"eliminar");
    
    }
}
