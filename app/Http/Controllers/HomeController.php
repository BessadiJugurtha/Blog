<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Post;
use App\Role;
class HomeController extends Controller
{
    
    public function index()
    {   
        //récupére les 3 dérnier articles posté selon la date 
        $post = Post::orderBy('post_date','desc')->limit(3)->get();
        return view('welcome',[
            'posts' => $post
        ]);
    }

    public function controle(){
        $users = User::all();
        return view("ViewControle",compact('users'));
    }

    public function ajouterRole(Request $request ){
        $utilisateur = User::where('id',$request['id'])->first();
        $utilisateur->roles()->detach();
        if($request['role-user']){
            $utilisateur->roles()->attach(Role::where('nom','User')->first());
        }
        if($request['role-admin']){
            $utilisateur->roles()->attach(Role::where('nom','Admin')->first());
        }
        return redirect('/controle');
    }
}
