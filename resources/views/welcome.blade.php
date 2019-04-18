@extends('layouts/main')
<link rel="stylesheet" type="text/css" href="css/style.css">
@section('content')
<h1>Home</h1>
@endsection
@section('Last_3Articles')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="row grid-x grid-margin-x small-up-1 medium-up-2 large-up-3 ">
@foreach($posts as $post)
<div class="cell col-md-4">
<div class="callout ">
<h3>{{ $post->post_name }}</h3>
<p><img class="rounded" src="https://placehold.it/400x370&amp;text=Pegasi B" alt="image of a planet called Pegasi B"></p>
<p class="lead"><a href="article/{{ $post->post_name }}">{{ $post->post_title }}</a></p>
</div>
</div>
@endforeach
</div>
@endsection




