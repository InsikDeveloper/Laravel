<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','posts.index') -> name('home');
Route::view('/add-coure','posts.add_course') -> name('add-course');
