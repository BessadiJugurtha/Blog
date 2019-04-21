@extends('layouts/main')
@section('tous_articles')
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<div class=" row medium-8 large-9 columns" >

@foreach($articles as $article)
@if($article->id <= 4)
<div class=" jumbotron blog-post ">
<h3 style="color :white; font-weight:bold;"><a href="article/{{ $article->post_name }}">{{$article->post_title }}</a></h3>
<img class="img-thumbnail" src="img/{{ $article->id }}.jpg">
<!-- <p style="color :white;">{{$article->post_content}}</p> -->
</div>
<div class="callout jumbotron" style = "height : 10%;">
<ul class="menu simple">
<li><a style="color :white;" href="#">Auteur :{{$article->author['name']}}</a></li>
<li><a style="color :white;" href="#">Comments: 1</a></li>
</ul>
</div>

@endif
@endforeach
</div>
@endsection

@section('content')
<h1 class="p1">Articles</h1>
@endsection