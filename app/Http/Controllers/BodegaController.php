<?php

namespace App\Http\Controllers;

use App\Models\delifazil\Bodega;
use Illuminate\Http\Request;

class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $datos['bodegas']=Bodega::paginate();
         return view('admin.bodegaList',$datos);
    }
    public function bodegas()
    {
        //
        
        $datos['bodegas']=Bodega::paginate();
         return view('users.geolocation',$datos);
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
        // 
        $bodega['name']= $request->input('name');
        $bodega['ruc'] = $request->input('ruc');
        $bodega['encargado'] = $request->input('encargado');
        $hi = $request->input('horarioInicio');
        $hf = $request->input('horarioFin');
        $bodega['horario'] = $hi." a ".$hf;
        $bodega['phone'] = $request->input('phone');
        $bodega['direccion'] = $request->input('direccion');
        $bodega['log'] = $request->input('latitude');
        $bodega['lat'] = $request->input('longitude');
        $bodega['distrito'] = $request->input('distrito');
        $bodega['ciudad'] = $request->input('ciudad');
        //dd($bodega);
        Bodega::create($bodega);
         return redirect('admin/bodega/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\delifazil\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function show(Bodega $bodega)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\delifazil\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function edit(Bodega $bodega)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\delifazil\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bodega $bodega)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\delifazil\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bodega $bodega)
    {
        //
    }
}
