<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(Request $request){
        return view('auth.login');
    }

    public function login(Request $request){
        $creds=$request->only('email','password');
        if(auth()->attempt($creds)){
            session(["token" => auth()->user()->createToken($request->email)->plainTextToken]);
            if(auth()->user()->role==2){
            return redirect()->route('user.home');
            } 
            else{
            return redirect()->route('dashboard');
            }

        }
        else{
            return redirect()->back()->withErrors('Invalid Credentials');
        }
    }

    public function logout(Request $request){
        auth()->user()->tokens()->delete();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        session(["token" => ""]);
        return redirect()->route('home');
    }
}
