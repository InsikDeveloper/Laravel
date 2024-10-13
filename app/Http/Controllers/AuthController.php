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
        'email'=>['required','email','max:255'],
        'password'=>['required','min:8','confirmed'],

    ]);


    //Register

    $user = User::create($fields);

    //login
    Auth::login($user);


    // Redirect
    return redirect()->route('dashboard');
}


// LOGIN

public function login(Request $request){
    // validate
    $user = $request->validate([
        'email'=>['required','email'],
        'password'=>['required']
    ]);

    //login
    if(Auth::attempt($user, $request->remember))
    return redirect()->intended('dashboard');

    return back()->withErrors([
        'failed' => 'The provided credentials do not match our records'
    ]);    


}
public function logout(Request $request){
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login');
}
}
