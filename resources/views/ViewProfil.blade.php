<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="top-bar fixed-top ">
<div class="top-bar-left nav nav-tabs">
<ul class="menu ">
<li class="menu-text">Blog</li>
<li><a class="a1" href="/home">Home</a></li>
<li><a class="a2" href="/article">Articles</a></li>
<li><a class="a3" href="/contact">Contact</a></li>
</ul>
</div >
<div class=" top-bar-right grid-x grid-margin-x small-up-1 medium-up-2 large-up-3">
<ul class="row menu-text" style="list-style:none;">
  @if (Auth::guest())
  <?php $lien = str_replace(dirname($_SERVER['PHP_SELF']).'/', '', $_SERVER['PHP_SELF']); ?>
  @if($lien != "login" && $lien != "register" )
  <li style="margin-right : 10px;"><a href="{{ route('login') }}"><button type="button" class="btn btn-primary btn-sm" >Se Connecter</button></a></li>
  
  @elseif( $lien != 'profil')
  <li style="margin-right : 10px;">
 
  <a href="{{ url('/profil') }}"><button type="button" class="btn btn-success btn-sm" >Profil: {{ Auth::user()->name }}</button></a>
  </li>
  @endif
  <li><a href="{{ url('/deconnexion') }}"><button type="button" class="btn btn-primary btn-sm" >Deconnexion</button></a></li>   

  @endif
</ul>
</div>
</div>
</div >
<div style="margin-top:10%;"class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/profile/avatar/{{$user->avatar}}" style="width:150px; heigth:150px; float:left; border-radius:50%; margin-right:25px;">
            <h1>{{$user->name}} c'est votre profil</h1>
            <form enctype ="multipart/form-data" action="/profil" methode="POST">
                <label >Changer la Photo de profil</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" class="pull-right btn btn-primary">
            </form>

                
            
        </div>
    </div>
</div>
<!-- profil/avatr/{{$user->avatar}} -->