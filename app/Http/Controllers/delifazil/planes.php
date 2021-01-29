<?php

namespace App\Http\Controllers\delifazil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class planes extends Controller
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
        $datos['Planes']=Planes::paginate(5);
        return view('users.dashboard');
    }
}
