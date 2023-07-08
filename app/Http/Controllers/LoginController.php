<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Register(Request $request){

        $user = new User();
        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $user->password = Hash::make($request->post('password'));
        $user->save();
        
        return redirect('/login');

    }

    public function Login(Request $request){

        $datos = $request -> only(['email','password']);
        if(!Auth::attempt($datos)){
            return redirect('/login');
        }
        return redirect('/');
    }

    public function Logout(Request $request){
        Auth::logout();

        return redirect('/login');
    }
}
