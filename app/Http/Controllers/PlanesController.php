<?php

namespace App\Http\Controllers;


use App\Models\delifazil\Planes;

use Illuminate\Http\Request;

class PlanesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['planes']=Planes::paginate();
        
        // dd($datos);
        // dd($datos);
        return view('users.dashboard',$datos);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\delifazil\Planes  $planes
     * @return \Illuminate\Http\Response
     */
    public function show(Planes $planes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\delifazil\Planes  $planes
     * @return \Illuminate\Http\Response
     */
    public function edit(Planes $planes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\delifazil\Planes  $planes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Planes $planes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\delifazil\Planes  $planes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Planes $planes)
    {
        //
    }
}
