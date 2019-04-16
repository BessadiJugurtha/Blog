<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Foundation | Welcome</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
<body>

<div class="top-bar">
<div class="top-bar-left">
<ul class="menu">
<li class="menu-text">Blog</li>
<li><a href="/">Home</a></li>
<li><a href=<?php echo asset('/article');?>>Articles</a></li>
<li><a href=<?php echo asset('/contact');?>>Contact</a></li>
</ul>
</div>
</div>


<div class="callout large primary">
<div class="row column text-center">
<h1>Articles</h1>
</div>
</div>


<div class="row medium-8 large-7 columns">
<div class="blog-post">
<h3>{{ $post->post_title }}</h3>
<img class="thumbnail" src="https://placehold.it/850x350">
<p>{{ $post->post_content }}</p>
<div class="callout">
<ul class="menu simple">
<li><a href="#">Auteur :{{$post->author->name}}</a></li>
<li><a href="#">Comments: 1</a></li>
</ul>
</div>
</div>
</body>
</html>