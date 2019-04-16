@extends('layouts/main')
@section('content')
<h1>Home</h1>
@endsection
@section('liste_posts')
<ul>
@foreach($posts as $post)
    <li>{{ $post->post_title }}</li>
@endforeach
</ul>
@endsection

