@extends('layouts/main')
@section('tous_articles')
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<div class=" row medium-8 large-9 columns" >

@foreach($articles as $article)
<div class=" jumbotron blog-post ">
<h3 style="color :white; font-weight:bold;"><a href="article/{{ $article->post_name }}">{{$article->post_title }}</a></h3>
<img class="img-thumbnail" src="img/{{ $article->id }}.jpg">
</div>
<div class="callout jumbotron" style = "height : 10%;">
<ul class="menu simple">
<li><a style="color :white;">Auteur :{{$article->author->name}}</a></li>
<li style="color :white;">{{date('d-m-Y', strtotime($article->post_date))}}</li>
</ul>
</div>

@endforeach
</div>
<div>
    <ul class="row  " style="list-style:none; margin-left:50%;">
        <li style="display: inline-block;color:blue;"><a href="/article">1</a></li>
        <li style="margin-left:10px; display: inline-block; color:black;"><a href="/article2">2</a></li>
    </ul>
</div>
@endsection

@section('content')
<h1 class="p1">Articles</h1>
@endsection