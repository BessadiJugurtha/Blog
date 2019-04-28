<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Role;

class AdminController extends Controller
{
   /*ce controller il contient les fonction attribut à la page controle limité aux Admin du site*/
   
    public function controle(){
        //récupérer dans une variable $users tous les users pour pouvoir les afficher dans un tableau de controle
        $users = User::all();
        return view("ViewControle",compact('users'));
    }

    public function gererUser(Request $request ){
        //attribuer un role à une user 

        //récupérer l'utilisateur en utilisant son id
        $utilisateur = User::where('id',$request['id'])->first();
        $utilisateur->roles()->detach();
        //lui affecter un role selon ce qui a été coché dans le formulaire dans "ViewControle"
        if($request['role-user']){
            $utilisateur->roles()->attach(Role::where('nom','User')->first());
        }
        if($request['role-admin']){
            $utilisateur->roles()->attach(Role::where('nom','Admin')->first());
        }
        //si $request['supprimer'] on supprime l'utilisateur
        if($request['supprimer']){
            $utilisateur->delete();
        }
        //regiriger vers /controle
        return redirect('/controle');
    }
}
