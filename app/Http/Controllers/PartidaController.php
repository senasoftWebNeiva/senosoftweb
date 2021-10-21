<?php

namespace App\Http\Controllers;

use App\Models\partida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function consultaUnion(Request $request){
        $codigo=$request->codigo;

        $partida= partida::where("codigo",$codigo)->where("estado","A")->get();

        if(count($partida)>0){
            /* return response()->json($partida); */
            return view('/partida');
        }else{
            return response()->json('No aparece');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partida=request()->except('_token', 'Entrar');
        partida::insert($partida);
        /* return response()->json($partida); */

        return view('/partida');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\partida  $partida
     * @return \Illuminate\Http\Response
     */
    public function show(partida $partida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\partida  $partida
     * @return \Illuminate\Http\Response
     */
    public function edit(partida $partida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\partida  $partida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, partida $partida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\partida  $partida
     * @return \Illuminate\Http\Response
     */
    public function destroy(partida $partida)
    {
        //
    }
}
