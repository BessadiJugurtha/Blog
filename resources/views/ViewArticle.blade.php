@extends('layouts/main')
@section('tous_articles')
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<div class=" row medium-8 large-9 columns" >
@foreach($articles as $article)
@if($article->id <= 4)
<div class="  blog-post ">
<h3>{{$article->post_title }}</h3>
<img class="thumbnail" src="https://placehold.it/850x350">
<p>{{$article->post_content}}</p>
<div class="callout">
<ul class="menu simple">
<li><a href="#">Auteur :{{$article->author->name}}</a></li>
<li><a href="#">Comments: 1</a></li>
</ul>
</div>
</div>
@endif
@endforeach
</div>
<tbody><tr valign="top"><td class="b navend"><span class="csb" style="background:url(/images/nav_logo242_hr.png) no-repeat;background-position:-24px 0;background-size:167px;width:28px"></span></td><td class="cur"><span class="csb" style="background:url(/images/nav_logo242_hr.png) no-repeat;background-position:-53px 0;background-size:167px;width:20px"></span>1</td>
<td><a aria-label="Page 2" class="fl" href="/search?q=Roles+laravel&amp;rlz=1C1CHBF_frFR817FR817&amp;ei=Dwi2XJPHMq2ejLsP5bWgiAk&amp;start=10&amp;sa=N&amp;ved=0ahUKEwjTio6kidXhAhUtD2MBHeUaCJEQ8tMDCKoB"><span class="csb ch" style="background:url(/images/nav_logo242_hr.png) no-repeat;background-position:-74px 0;background-size:167px;width:20px"></span>2</a></td>
<td><a aria-label="Page 3" class="fl" href="/search?q=Roles+laravel&amp;rlz=1C1CHBF_frFR817FR817&amp;ei=Dwi2XJPHMq2ejLsP5bWgiAk&amp;start=30&amp;sa=N&amp;ved=0ahUKEwjTio6kidXhAhUtD2MBHeUaCJEQ8tMDCK4B"><span class="csb ch" style="background:url(/images/nav_logo242_hr.png) no-repeat;background-position:-74px 0;background-size:167px;width:20px"></span>4</a></td>
</tr>
</tbody>
@endsection

@section('content')
<h1>Articles</h1>
@endsection