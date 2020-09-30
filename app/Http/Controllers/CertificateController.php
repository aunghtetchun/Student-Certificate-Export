<?php

namespace App\Http\Controllers;

use App\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('certificate.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certificate.create');
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

            "name" => "required|min:2",
            "nrc" => "required|min:10",
            "photo" => "required|mimes:jpeg,png",
            "access_id"=>"required",
        ]);


        $entry = new Entry();
        $entry->name = $request->name;
        $entry->nrc = $request->nrc;
        $entry->access_ind = $request->access_id;

        $previewDir='student/preview';
        $oriDir = 'student/original';
        $thumbDir='student/thumbnail';

        if($request->hasFile('photo')) {

            $newFileName = 'item_'.uniqid().'.'.$request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move($previewDir, $newFileName);
            $photo = $previewDir.$newFileName;

            $img = Image::make(public_path($photo));
            $img->orientate();
            $img->resize(500, null, function($constraint){
                $constraint->upsize();
                $constraint->aspectRatio();
            });

            $oriImg = $oriDir.$newFileName;
            $img->save(public_path($oriImg));

            $img->fit(150,150);
            $img->save(public_path($thumbDir.$newFileName));

            $entry->photo = $newFileName;

            File::delete(public_path($photo));
        }
        $entry->save();

        return redirect()->route('f.index')->with("toast","Hi <b>$request->name</b>.Your certificate is successfully requested 😊");


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(Certificate $certificate)
    {
        return view('certificate.show',compact('certificate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificate $certificate)
    {
        //
    }
}
