<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FController extends Controller
{
    public function index(){

        $title = "Successful Login";
        return view('f.index',compact('title'));
    }
}
