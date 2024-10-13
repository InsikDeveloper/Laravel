<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request; 


class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructors = Instructor::latest()->get();

        return view('posts.show_instructor', compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate
       
        $fileds = $request->validate([
            'first_name'=>['required'],
            'last_name'=>['required'],
            'email'=>['required','email'],
            'phone'=>['required','min:11','max:11'],
            'expertise'=>['required'],
            'years_of_experience'=>['required'],
            'status'=>['required']
        ]);

        Instructor::create($fileds);
      

        return back()->with('success','Your post was created');

    }

    /**
     * Display the specified resource.
     */
    public function show(Instructor $instructor)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instructor $instructor)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instructor $instructor)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instructor $instructor)
    {
        //
    }
}
