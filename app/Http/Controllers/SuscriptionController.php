<?php

namespace App\Http\Controllers;

use App\Models\delifazil\Suscription;
use App\Models\delifazil\Planes;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DateTime;
class SuscriptionController extends Controller
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
    public function suscription($id)
    {
        
        $userSucription = Suscription::where('user_id', $id)->first();
        $status=$userSucription->status;
        if($status=="Prueba" || $status = "Activo"){
            
        }
        dd($status);
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
        
        $sus = new Suscription;
        $sus->plan_id=  $_POST['plan_id'];
        $sus->user_id= $_POST['user_id'];       
        $sus->fin_created_at=Carbon::now()->addMonth(); 
        $sus->status= "Activo";
        $sus->save();
        return redirect('/home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\delifazil\Suscription  $suscription
     * @return \Illuminate\Http\Response
     */
    public function show(Suscription $suscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\delifazil\Suscription  $suscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Suscription $suscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\delifazil\Suscription  $suscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suscription $suscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\delifazil\Suscription  $suscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suscription $suscription)
    {
        //
    }
}
