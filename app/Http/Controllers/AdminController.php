<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Role;

class AdminController extends Controller
{
   
    public function controle(){
        $users = User::all();
        return view("ViewControle",compact('users'));
    }

    public function gererUser(Request $request ){
        $utilisateur = User::where('id',$request['id'])->first();
        $utilisateur->roles()->detach();
        if($request['role-user']){
            $utilisateur->roles()->attach(Role::where('nom','User')->first());
        }
        if($request['role-admin']){
            $utilisateur->roles()->attach(Role::where('nom','Admin')->first());
        }
        if($request['supprimer']){
            $utilisateur->delete();
        }
        return redirect('/controle');
    }
}
