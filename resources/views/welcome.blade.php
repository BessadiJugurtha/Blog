@extends('layouts/main')
@section('content')
<h1>Home</h1>
@endsection
@section('Last_3Articles')
<ul>
@foreach($posts as $post)
    <li><a href="article/{{ $post->post_name }}">{{ $post->post_title }}</a></li>
@endforeach
</ul>
@endsection

