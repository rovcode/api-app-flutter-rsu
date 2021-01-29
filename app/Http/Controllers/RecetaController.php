<?php

namespace App\Http\Controllers;

use App\Models\delifazil\receta;
use App\Models\delifazil\Suscription;
use App\Models\delifazil\Planes;
use App\Models\User;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $recetas=receta::all();
         $user_id=Auth()->user()->id;
         $datos['planes']=Planes::paginate();
         $userSucription = Suscription::where('user_id', $user_id)->first(); 
    
         if($userSucription == null ){           
            return view('users.planes', $datos);
         } 
         $status=$userSucription->status;
         if($status=="Prueba" || $status=="Activo"){           
            return view('users.dashboard', ["recetas"=>$recetas,"suscription"=> $status]);
         }else if($status=="Terminada" || $status=="Finalizada"){
            $status=$userSucription->status;
            return view('users.profile', $datos);
         }     
      
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
     * @param  \App\Models\delifazil\receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function show(receta $receta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\delifazil\receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function edit(receta $receta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\delifazil\receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, receta $receta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\delifazil\receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy(receta $receta)
    {
        //
    }
}