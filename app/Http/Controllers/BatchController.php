<?php

namespace App\Http\Controllers;

use App\Batch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('batch.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('batch.create');
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
            "batch_number" => "required|unique:batches,batch_number|min:3",
            "start" => "required",
            "end"=>"required",
            "course_id"=>"required",
        ]);
        $batch = new Batch();
        $batch->batch_number = $request->batch_number;
        $batch->start = $request->start;
        $batch->end=$request->end;
        $batch->user_id = Auth::id();
        $batch->course_id=$request->course_id;
        $batch->save();
        return redirect()->route('batch.create')->with("toast","<b>$request->batch_number</b> is successfully added 😊");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function show(Batch $batch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function edit(Batch $batch)
    {
        return view("batch.edit",compact('batch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Batch $batch)
    {
        $request->validate([
            "batch_number" => "required|min:3",
            "start" => "required",
            "end"=>"required",
            "course_id"=>"required",
        ]);
        $batch->batch_number = $request->batch_number;
        $batch->start = $request->start;
        $batch->end=$request->end;
        $batch->user_id = Auth::id();
        $batch->course_id=$request->course_id;
        $batch->update();
        return redirect()->route('batch.index')->with("toast","<b>$request->batch_number</b> is successfully updated 😊");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Batch $batch)
    {
        //
    }
}
