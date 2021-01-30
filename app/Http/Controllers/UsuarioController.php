<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\delifazil\Suscription;
use App\Models\delifazil\Planes;
class UsuarioController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        $user_id= Auth()->user()->id;      
        $userSucription = Suscription::where('user_id', $user_id)->first();
        $plan=Planes::where('id',$userSucription->plan_id)->first();
        return view('users.profile',['plan'=>$plan]);
    }
}
