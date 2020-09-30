<?php

// FacebookloginController.php

namespace App\Http\Controllers;

use App\Custom;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FacebookloginController extends Controller
{
    /**
     * Create a redirect method to facebook api.
     *
     * @return void
     */
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function callback()
    {

        $socialite = Socialite::driver('facebook')->stateless()->user();
//        return dd($socialite);

        $finduser = User::where('social_id', $socialite->id)->orWhere("email",$socialite->email)->first();

        if($finduser){

            Auth::login($finduser);
            return redirect()->route("f.index");

        }else{

            $user = new User();
            $user->name = $socialite->name;

            if(isset($socialite->email)){
                $user->email = $socialite->email;
            }else{
                $user->email = Custom::makePassword()."@fbmail.com";
            }
            if(isset($socialite->avatar)){
                $user->photo = $socialite->avatar;
            }
            $user->social_id = $socialite->id;
            $user->password = Hash::make(Custom::makePassword());
            $user->save();
            Auth::login($user);

            return redirect()->route("f.index");

        }
    }
//    public function callback()
//    {
////         return "hello";
//        $userSocial = Socialite::driver('facebook')->stateless()->user();
//        return dd($userSocial);
//        $finduser = User::where('social_id', $userSocial->id)->first();
//        if($finduser){
//            Auth::login($finduser);
//            return redirect()->route("f.index");
//
//        }else{
//            $new_user = User::create([
//                'name'      => $userSocial->name,
//                'email'      => $userSocial->email,
//                'photo'  => $userSocial->avatar_original,
//                'password' => Hash::make(Custom::makePassword()),
//                'social_id'=> $userSocial->id
//            ]);
//            Auth::login($new_user);
//            return redirect()->route("f.index");
//        }
//    }
}
