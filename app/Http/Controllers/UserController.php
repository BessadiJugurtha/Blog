<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\User;
class UserController extends Controller
{
    public function profil(){
        //renvoyer la vue "viewProfil" pour afficher le profil de l'use connecté 
        return view('ViewProfil',['user'=>Auth::user()]);
    }

    public function deconnecter(){
        //déconnecter l'user 
        Auth::logout();
        return redirect('/home');
        
    
    }

    public function modifierPhoto( Request $request){
        //modifier la photo de profil
        $avatarURI = null;
        //récupérer l'avatar choisi par l'utilisateur
        if($request->hasfile('avatar')){
            $avatar =$request->file('avatar');
            $nomfile = time() . '.' . $avatar->getClientOriginalExtension();
        
        //utiliser la facade Image pour redimensionner l'avatar et le sauvegarder dans le dir spécifié
            Image::make($avatar)->resize(300,300)->save(public_path('/profile/avatar/' . $nomfile));
            $avatarURI  = "/profile/avatar/{$nomfile}";
            User::update();
            
        }
        //sauvegarder une référence de l'avatar dans la table user
        $usr = new User();
        $usr->update(['avatar' => $avatarURI,]);
        return view('ViewProfil',['user'=>Auth::user()]);
    }
}