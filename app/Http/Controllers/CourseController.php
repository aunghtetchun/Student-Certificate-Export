<?php

namespace App\Http\Controllers;

use App\Course;
use App\Custom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('course.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            "title" => "required|min:2",
            "outline" => "required|min:10",
            "frame" => "required|mimes:jpeg,png",
        ]);


        $course = new Course();
        $course->title = $request->title;
        $course->outline = $request->outline;
        $course->user_id = Auth::id();

        $dir = 'c_file/';

        if($request->hasFile('frame')) {

            $newFileName = 'certificate_' . uniqid() . '.' . $request->file('frame')->getClientOriginalExtension();
            $request->file('frame')->move($dir, $newFileName);
            $frame = $dir . $newFileName;
            $course->frame = $frame;
        }
        $course->save();

        return redirect()->route('course.create')->with("toast","<b>$request->title</b> is successfully added 😊");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('course.edit',compact("course"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([

            "title" => "required|min:2",
            "outline" => "required|min:10",
            "frame" => "mimes:jpeg,png",
        ]);

        $course->title = $request->title;
        $course->outline = $request->outline;
        $course->user_id = Auth::id();

        $dir = 'c_file/';

        if($request->hasFile('frame')) {

            $newFileName = 'certificate_' . uniqid() . '.' . $request->file('frame')->getClientOriginalExtension();
            $request->file('frame')->move($dir, $newFileName);
            $frame = $dir . $newFileName;
            $course->frame = $frame;
        }
        $course->update();

        return redirect()->route('course.index')->with("toast","<b>$request->title</b> is successfully updated 😊");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
