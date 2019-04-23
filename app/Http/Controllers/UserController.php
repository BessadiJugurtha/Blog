<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\User;
class UserController extends Controller
{
    public function profil(){
        return view('ViewProfil',['user'=>Auth::user()]);
    }

    public function deconnecter(){
        Auth::logout();
        return redirect('/home');
        
    
    }

    public function modifierPhoto( Request $request){
        $avatarURI = null;
        if($request->hasfile('avatar')){
            $avatar =$request->file('avatar');
            $nomfile = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/profile/avatar/' . $nomfile));
            $avatarURI  = "/profile/avatar/{$nomfile}";
            User::update();
            
        }

        $usr = new User();
        $usr->update(['avatar' => $avatarURI,]);
        return view('ViewProfil',['user'=>Auth::user()]);
    }
}