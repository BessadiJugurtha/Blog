
@extends('layouts/main')
@section('content')
<p class="p1">Bienvenu</p>
@endsection
@section('Last_3Articles')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- <div class=" container row grid-x grid-margin-x small-up-1 medium-up-2 large-up-3 "> -->
@foreach($posts as $post)
<div class="cell col-md-4">
<div class=" jumbotron ">
<h3 style="color :white; font-weight:bold;">{{ $post->post_name }}</h3>
<p><img class="img-thumbnail" src="img/{{$post->id}}.jpg" alt="image of a planet called Pegasi B"></p>
<p class="lead"><a  href="article/{{ $post->post_name }}">{{ $post->post_title }}</a></p>
<p style="color :white;">{{date('d-m-Y', strtotime($post->post_date))}}</p>
</div>
</div>
@endforeach
<!-- </div> -->
@endsection




