<?php

namespace App\Http\Controllers;

use App\Models\Coure;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $courses = Coure::latest()->get();

        return view('posts.index', compact('courses'));
    }


}
