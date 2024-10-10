<?php

namespace App\Http\Controllers;

use App\Models\CourseInformation;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    // Adding Data
    public function addCourse(Request $request)  {

        $fields = $request->validate([
            'title'=>['required'],
            'description'=>['required'],
            'duration'=>['required'],
        ]);

        CourseInformation::create($fields);

        return redirect()->route('home');

    }

    // Get Data
    public function showCourses(){
        $courses = CourseInformation::orderBy('created_at', 'desc')->get();

        return view('posts.index', compact('courses'));

    }

    public function showCourse($id){
         // Retrieve the course by ID
         $course = CourseInformation::findOrFail($id);

         return view('posts.show_course', compact('course'));
    }

    public function delete($id){
        $course = CourseInformation::findOrFail($id);

        $course->delete();

        return redirect()->route('home')->with('success', 'Course deleted successfully.');

    }

}
