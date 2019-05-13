<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ArticleController extends Controller
{

    public function __construct()
    {
    /*decommenter cette ligne pour pouvoir tester l'Authentification sur la page article*/
       $this->middleware('auth');
    }
   public function index(){
    //récupérer dans la varible $articles tous les post selon leur date, avec un ordre descendant
    $articles = Post::orderBy('post_date','desc')->get();
    $tabArticles=[];
    //stocker dans $tabArticles les 4 premiers posts après les trois qui sont affichés dans le home 
    for($i = 3; $i<=6;$i++){
        $tabArticles[$i]=$articles[$i];
    }
    //envoyer la variable $tabArticles pour afficher les 4 article dans la premiere page d'artcile
    return view('ViewArticle', ['articles'=>$tabArticles]);
   }

   public function indexPage2(){
    //récupérer dans la varible $articles tous les post selon leur date, avec un ordre descendant
    $articles = Post::orderBy('post_date','desc')->get();
    $tabArticles=[];
    //stocker dans $tabArticles les 3 derniers posts 
    for($i = 7; $i<=9;$i++){
        $tabArticles[$i]=$articles[$i];
    }
    //envoyer la variable $tabArticles pour afficher les 3 article dans la deuxième page d'article
    return view('ViewArticlePage2', ['articles'=>$tabArticles]);
  
}

   public function show($post_name){
       //récupérer le post dont l'attribut post_name = $post_name
       $post = Post::where('post_name', $post_name)->first();
       return view('AfficherUnArticle', ['post' => $post]);
    }
   
}
