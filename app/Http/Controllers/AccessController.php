<?php

namespace App\Http\Controllers;

use App\Access;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Psr7\str;

class AccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('access.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('access.create');
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
            "user_id" => "required",
            "batch_id" => "required",
        ]);
        $access=new Access();
        $access->user_id = $request->user_id;
        $access->batch_id = $request->batch_id;
         $check=Access::where("batch_id",$request->batch_id)->where("user_id",$request->user_id)->get();
        if (count($check)){
            return redirect()->route('access.index')->with("toast","<b>This Access Form</b> is already Added 😊");
        }
        $access->save();

        return redirect()->route('access.index')->with("toast","User id <b>$access->user_id</b> is successfully added 😊");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Access  $access
     * @return \Illuminate\Http\Response
     */
    public function show(Access $access)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Access  $access
     * @return \Illuminate\Http\Response
     */
    public function edit(Access $access)
    {
        return view('access.edit',compact('access'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Access  $access
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Access $access)
    {
        $request->validate([
            "user_id" => "required",
            "batch_id" => "required",
        ]);
        $access->user_id = $request->user_id;
        $access->batch_id = $request->batch_id;
        $access->update();
        return redirect()->route('access.create')->with("toast","User id <b>$request->user_id</b> is successfully updated 😊");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Access  $access
     * @return \Illuminate\Http\Response
     */
    public function destroy(Access $access)
    {
        $user=$access->user_id;
        $access->delete();
        return redirect()->route('access.create')->with("toast","User id <b>$user</b> is successfully deleted 😊");

    }
}
