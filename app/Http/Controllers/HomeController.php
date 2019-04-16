<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    $post = \App\Post::find(1); 
    echo $post->author->name;
     return view('welcome');
}
}
