<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index(){
        $last_id = Post::get()->last()->id; // il recupere le id du dernier post de la table posts
        $post = Post::take(3)->skip($last_id -3)->get(); 
        
        return view('welcome',[
            'posts' => $post
        ]);
    }
}
