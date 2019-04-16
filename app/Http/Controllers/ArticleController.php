<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ArticleController extends Controller
{
   public function index(){
       return view('ViewArticle');
   }

   public function show($post_name){
       $post = Post::where('post_name', $post_name)->first();
       
       return view('AfficherUnArticle', ['post' => $post]);
    }
   
}
