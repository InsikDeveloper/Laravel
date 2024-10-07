<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/','posts.index') -> name('home');
Route::get('/', [CourseController::class, 'showCourses'])->name('home');
Route::get('/courses/{id}', [CourseController::class, 'showCourse'])->name('show_course');


Route::view('/add_course','posts.add_course') -> name('add_course');
Route::post('add_course',[CourseController::class, 'addCourse']);


Route::delete('/courses/{id}', [CourseController::class, 'delete'])->name('delete');

