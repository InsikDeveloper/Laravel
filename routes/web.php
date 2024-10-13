<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoureController;
use App\Http\Controllers\InstructorController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::middleware('auth')->group(function(){
    Route::view('/dashboard','posts.index') -> name('dashboard');

    Route::resource('instructors', InstructorController::class);
    Route::resource('coures', CoureController::class);

    Route::view('/add-instructor','posts.add_instructor')->name('add.instructor');
    Route::get('/add_course',[CoureController::class , 'showInstructors'])->name('add_course');
    
    Route::post('/logout',[AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function(){

   // Login
   Route::view('/', 'auth.login')->name('login');
   Route::view('/login','auth.login')->name('login');
   Route::post('/login',[AuthController::class, 'login'])->name('login');
// Register
Route::view('/register','auth.register')->name('register');
Route::post('register',[AuthController::class, 'register'])->name('register');


});





