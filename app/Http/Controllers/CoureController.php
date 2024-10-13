<?php

namespace App\Http\Controllers;

use App\Models\Coure;
use App\Http\Requests\StoreCoureRequest;
use App\Http\Requests\UpdateCoureRequest;
use App\Models\Instructor;
use Illuminate\Http\Request;

class CoureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Coure::latest()->get();

        return view('posts.show_course', compact('courses'));
    }

    
 

    public function showInstructors()
    {
        $instructors = Instructor::latest()->get();
        return view('posts.add_course', compact('instructors'));
    }
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
       



    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd('ok');
        
        $fields = $request->validate([
            'title'=>['required'],
            'description'=>['required'],
            'duration'=>['required'],
            'instructor_id' => ['required', 'exists:instructors,id'],
        ]);

        Coure::create($fields);

        // return redirect()->route('home');
       
        return back()->with('success','Your post was created');

    }

    /**
     * Display the specified resource.
     */
    public function show(Coure $coure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coure $coure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCoureRequest $request, Coure $coure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coure $coure)
    {
        $coure->delete();

        return back()->with('success','Item deleted succesfully');
      
    }


}


