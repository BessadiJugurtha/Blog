<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ArticleController extends Controller
{

    public function __construct()
    {
       // $this->middleware('auth');
    }
   public function index(){
    $articles = Post::orderBy('post_date','desc')->get();
    $tabArticles=[];
    for($i = 3; $i<=6;$i++){
        $tabArticles[$i]=$articles[$i];
    }
    return view('ViewArticle', ['articles'=>$tabArticles]);
   }

   public function indexPage2(){
    $articles = Post::orderBy('post_date','desc')->get();
    $tabArticles=[];
    for($i = 7; $i<=9;$i++){
        $tabArticles[$i]=$articles[$i];
    }
    return view('ViewArticlePage2', ['articles'=>$tabArticles]);
  
}

   public function show($post_name){
       $post = Post::where('post_name', $post_name)->first();
       return view('AfficherUnArticle', ['post' => $post]);
    }
   
}
