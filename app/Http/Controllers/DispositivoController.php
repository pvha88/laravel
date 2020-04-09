<?php

namespace App\Http\Controllers;

use App\dispositivo;
use Illuminate\Http\Request;

class DispositivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispositivos = Dispositivo::all();
        return $dispositivos;
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
    public function store(Request $request)
    {
        $dispositivos = Dispositivo::create($request->all());
        return $dispositivos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dispositivo  $dispositivo
     * @return \Illuminate\Http\Response
     */
    public function show(dispositivo $dispositivo)
    {
        $dispositivo = Dispositivo::findOrFail($dispositivo->id);
        return $dispositivo;
        //Esta función devolverá los datos de una tarea que hayamos seleccionado
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dispositivo  $dispositivo
     * @return \Illuminate\Http\Response
     */
    public function edit(dispositivo $dispositivo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dispositivo  $dispositivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dispositivo $dispositivo)
    {

         $dispositivo = Dispositivo::findOrFail($dispositivo);
         $dispositivo->update($request->all());
         return $dispositivo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dispositivo  $dispositivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(dispositivo $dispositivo)
    {
        $dispositivo->delete();
        return $dispositivo;
    }
}
//