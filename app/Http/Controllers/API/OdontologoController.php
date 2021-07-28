<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Odontologo;
use Illuminate\Http\Request;

class OdontologoController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $odontologos = Odontologo::orderBy('name')->get();
        return response()->json([
            'type' => 'odontologos',
            'data' => $odontologos->toArray()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $obj = new Odontologo();

        $obj->nombre = $request->nombre;
        $obj->apellido = $request->apellido;
        //faltan -> la foreign key 
        //$obj->nombre = $request->nombre;


        $obj -> save();
        return $obj;
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
        return Odontologo::find($id);
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
        $obj = Odontologo::find($id);
        $obj -> nombre = $request->nombre;
        $obj -> apellido = $request->nombre;
        $obj -> save();

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
        $obj = Odontologo::find($id);
        $obj ->delete();
    }
}
