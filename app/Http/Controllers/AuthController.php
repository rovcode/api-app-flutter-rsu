<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    
    public function registro(Request $request){
        $validatedata = $request->validate([
            'name'=> 'required|max:255',
            'phone'=> 'required|max:255',
            'email'=> 'required|email|unique:users',           
            'password' => 'required',
            'rol_id' => 'required'
        ]);
        $validatedata['password'] = Hash::make($request->password);
        $user = User::create($validatedata);
        $accessToken = $user->createToken('authToken')->accessToken;
        return response([
            'user'=>$user,
            'access_token'=>$accessToken
            ]);
    }
    public function login(Request $request){
        $logindata = $request->validate([
            'email'=> 'required|email',           
            'password' => 'required',
        ]);
        if(!auth()->attempt($logindata)){
            return response(['mensaje'=>'Credenciales erroneas']);
        }
        $accessToken=auth()->user()->createToken('authToken')->accessToken;
        return response([
            'user'=>auth()->user(),
            'access_token'=>$accessToken
        ]);
    }
}
