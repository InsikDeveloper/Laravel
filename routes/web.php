<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/','posts.index') -> name('home');


Route::view('/', 'posts.index')->name('home');


// Register
Route::view('/register','auth.register')->name('register');
Route::post('register',[AuthController::class, 'register'])->name('register');

// Login
Route::view('/login','auth.login')->name('login');
Route::post('/login',[AuthController::class, 'login'])->name('login');



Route::post('/logout',[AuthController::class, 'logout'])->name('logout');


Route::get('/courses', [CourseController::class, 'showCourses'])->name('courses');
Route::get('/courses/{id}', [CourseController::class, 'showCourse'])->name('show_course');




Route::view('/add_course','posts.add_course') -> name('add_course');
Route::post('add_course',[CourseController::class, 'addCourse']);


Route::delete('/courses/{id}', [CourseController::class, 'delete'])->name('delete');

