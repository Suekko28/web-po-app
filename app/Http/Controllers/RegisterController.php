<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegisterForm(Request $request){
        return view('auth.register');
    }
    public function register(UserFormRequest $request){
        $data=$request->only('name','email','password');
        $data['role']=2;
        $user=User::Create($data);
        return redirect('/login')->with('success',"Account Succesfully Registered");
    }
}
