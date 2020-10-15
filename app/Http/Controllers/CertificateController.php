<?php

namespace App\Http\Controllers;

use App\Access;
use App\Batch;
use App\Certificate;
use App\Custom;
use App\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
//        return view('certificate.create');
    }

    public function save($id){
        $entry= Entry::find($id);
        $access= $entry->getAccess;
        $batch = $access->getBatch;
        $batch_id=$access->batch_id;
//        if (Certificate::find($batch_id)){
//            return redirect()->route('entry.index')->with("toast","<b>$entry->name</b> is already Approved 😊");
//        }
        $course = $batch->getCourse;
        $serial_number=Custom::serial_number();
        $frame=$entry->getAccess->getBatch->getCourse->frame;
//        return $entry->getAccess->getBatch->batch_number;

        $certificate = new Certificate();
        $certificate->name = $entry->name;
        $certificate->nrc = $entry->nrc;
        $certificate->photo = $entry->photo;
        $certificate->serial_number = $serial_number;
        $certificate->user_id=$entry->getAccess->user_id;
        $certificate->batch_id=$entry->getAccess->getBatch->id;

        $oriDir='certificate/original/';
        $miniDir='certificate/mini/';
        $thumbDir='certificate/thumbnail/';

        if ($entry->photo){

            $c_img = Image::make(public_path($frame));
            $c_img_name = 'certificate_'.uniqid().'.'.pathinfo(public_path($frame), PATHINFO_EXTENSION);
            $c_img->fit(2480, 3508)->orientate();
            $c_img->text($entry->name, 550, 810, function($font) {
                $font->file(public_path('fonts/Futura-Medium.ttf'));
                $font->size(75);
                $font->color('#000000');
                $font->align('left');
                $font->valign('top');
                $font->angle(0);
            });
            $text="NRC No            -  ".$entry->nrc;
            $c_img->text( $text, 550, 915, function($font) {
                $font->file(public_path('fonts/Lato-light.ttf'));
                $font->size(45);
                $font->color('#000000');
                $font->align('left');
                $font->valign('top');
                $font->angle(0);
            });
            $text="Verify Code      -  ".$serial_number;
            $c_img->text( $text, 550, 980, function($font) {
                $font->file(public_path('fonts/Lato-light.ttf'));
                $font->size(45);
                $font->color('#000000');
                $font->align('left');
                $font->valign('top');
                $font->angle(0);
            });
            $text="for successfully completing a course of studies in,";
            $c_img->text( $text, 551, 1040, function($font) {
                $font->file(public_path('fonts/Lato-light.ttf'));
                $font->size(45);
                $font->color('#000000');
                $font->align('left');
                $font->valign('top');
                $font->angle(0);
            });

            $from=date("d M Y",strtotime($entry->getAccess->getBatch->start));
            $to=date("d M Y",strtotime($entry->getAccess->getBatch->end));

            $text="From $from To $to";
            $c_img->text( $text, 260, 1470, function($font) {
                $font->file(public_path('fonts/Lato-light.ttf'));
                $font->size(45);
                $font->color('#000000');
                $font->align('left');
                $font->valign('top');
                $font->angle(0);
            });

            $user = Image::make(public_path('student/original/'.$entry->photo));
            $user->fit(250,250)->orientate();
            $width = $user->getWidth();
            $height = $user->getHeight();
            $mask = Image::canvas($width, $height);
            // draw a white circle
            $mask->circle($width, $width/2, $height/2, function ($draw) {
                $draw->background('#fff');
            });

            $user->mask($mask, false);
            $c_img->insert($user, 'top-left', 241, 833);
//            return $c_img->response('png');

            $c_img_ori_store=$oriDir.$c_img_name;
            $c_img->save(public_path($c_img_ori_store));

            $c_img->fit(592,842)->orientate();
            $c_img_mini_store=$miniDir.$c_img_name;
            $c_img->save(public_path($c_img_mini_store));


            $c_img->fit(298,420)->orientate();
            $c_img_thumb_store=$thumbDir.$c_img_name;
            $c_img->save(public_path($c_img_thumb_store));
            $certificate->file = $c_img_name;

        }

//        return "how are you";
        $certificate->save();
        $entry->delete();
        $access->delete();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {


        $this->save($id);
        return redirect()->route('entry.index')->with("toast","Student approve Successfully 😊");

    }
    public function storeAll(){
        $all_entry=Entry::all();
        foreach ($all_entry as $ae){
            $this->save($ae->id);
        }
        return redirect()->route('certificate.index')->with("toast","All Students approve Successfully 😊");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(Certificate $certificate)
    {
//        return view('certificate.show',compact('certificate'));
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
    public function destroy(Certificate $id)
    {

        $user=$id->name;
        $id->delete();
        return redirect()->route('certificate.index')->with("toast"," <b>$user</b> certificate is successfully deleted 😊");

    }
}
