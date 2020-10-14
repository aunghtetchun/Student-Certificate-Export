<?php

namespace App\Http\Controllers;

use App\Access;
use App\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class SController extends Controller
{
    public function index()
    {
        return view('s.index');
    }
    public function rc()
    {
        $rc=Auth::user()->getRc;
        return view('s.rc',compact('rc'));
    }
    public function entry($id)
    {
        if(isset(Access::find($id)->user_id)){
            if (Auth::user()->id == Access::find($id)->user_id){
                $access_id=$id;
                return view('s.entry',compact('access_id'));
            }else{
                abort(404);
            }
        }else{
            abort(404);
        }

    }
    public function entry_store(Request $request)
    {
        if(isset(Access::find($request->id)->user_id)){
            if (Auth::user()->id != Access::find($request->id)->user_id){
                return redirect()->back()->withErrors(['access_id' => "Invalid Access Id"]);
            }
        }else{
            return redirect()->back()->withErrors(['access_id' => "Invalid Access Id"]);
        }

        $request->validate([

            "name" => "required|min:2",
            "nrc" => "required|min:10",
            "photo" => "required|mimes:jpeg,png",
            "access_id"=>"required",
        ]);

        $realName = Auth::user()->name;

        $entry = new Entry();
        $entry->name = $request->name;
        $entry->nrc = $request->nrc;
        $entry->access_id = $request->access_id;

        $previewDir='student/preview/';
        $oriDir = 'student/original/';
        $thumbDir='student/thumbnail/';

        if($request->hasFile('photo')) {

            $newFileName = 'student_'.uniqid().'.'.$request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move($previewDir, $newFileName);
            $photo = $previewDir.$newFileName;

            $img = Image::make(public_path($photo));

            $img->orientate();
            $img->fit(500, 500, function($constraint){
                $constraint->upsize();
                $constraint->aspectRatio();
            });

            $oriImg = $oriDir.$newFileName;
            $img->save(public_path($oriImg));

            $img->fit(50,50);
            $img->save(public_path($thumbDir.$newFileName));

            $entry->photo = $newFileName;

            File::delete(public_path($photo));
        }
        $entry->save();

        return redirect()->route('s.rc')->with("toast","Hi <b>$realName</b> ကျောင်းသားရဲ့ Certificate လျှောက်ထားခြင်း ပြီးမြောက်ပါပြီ။ Admin များမှ approve ပေးသည်နှင့် ထုတ်ယူနိုင်မှာဖြစ်ပါတယ်။");

    }

}
