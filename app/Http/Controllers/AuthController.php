<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    // REGISTER

public function register(Request $request){
    // validate




    $fields = $request->validate([
        'username'=>['required','max:255'],
        'email'=>['required','email','max:255','unique:users'],
        'password'=>['required','min:8','confirmed'],

    ]);


    //Register

    $user = User::create($fields);

    //login
    Auth::login($user);


    // Redirect
    return redirect()->route('home');
}


// LOGIN

public function login(){
    // validate
    
    $fields = $request->validate([
        'username'=>['required','max:255'],
        'email'=>['required','email','max:255','unique:users'],
        'password'=>['required','min:8'],

    ]);
    //login

    // Redirect
}
}
