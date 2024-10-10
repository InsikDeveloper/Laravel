<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    // REGISTER

public function register(Request $request){
    // validate




    $fields = $request->validate([
        'username'=>['required','max:255','email'],
        'password'=>['required','min:8'],

    ]);

    dd($request);


    //login

    // Redirect
}


// LOGIN

public function login(){
    // validate

    //login

    // Redirect
}
}
