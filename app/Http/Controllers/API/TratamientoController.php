<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tratamiento;
use Illuminate\Http\Request;

class TratamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Tratamiento::all();
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
        $obj = new Tratamiento();
        $obj -> od_id = $request->od_id;
        $obj -> pa_id = $request->pa_id;
        $obj -> cant_placas  = $request->cant_placas;
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
        return Tratamiento::find($id);
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
        $obj =  Tratamiento::find($id);
        $obj -> od_id = $request->od_id;
        $obj -> pa_id = $request->pa_id;
        $obj -> cant_placas = $request->cant_placas;
        $obj -> ended_at = $request->ended_at;
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
        $obj = Tratamiento::find($id);
        $obj ->delete();
    }
}
