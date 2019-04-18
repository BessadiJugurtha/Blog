<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo str_replace(dirname($_SERVER['PHP_SELF']).'/', '', $_SERVER['PHP_SELF']);?></title>
<style>
.menu {
  border: 2px solid black;
  border-radius: 5px;
}
</style>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<<<<<<< HEAD
<body class="bg-dark">

<div class="top-bar">
<div class="top-bar-left">

<ul class="menu">
=======
<body>
<div class="top-bar fixed-top " style="height: 9%;">
<div class="top-bar-left nav nav-tabs">
<ul class="menu ">
>>>>>>> 9178736541649f2643704852411b2aa5cf904a3d
<li class="menu-text">Blog</li>
<li><a href="/home">Home</a></li>
<li><a href="/article">Articles</a></li>
<li><a href="/contact">Contact</a></li>
</ul>
</div >
<div class=" top-bar-right grid-x grid-margin-x small-up-1 medium-up-2 large-up-3">
<ul class="row menu-text" style="list-style:none;">
  @if (Auth::guest())
  <?php $lien = str_replace(dirname($_SERVER['PHP_SELF']).'/', '', $_SERVER['PHP_SELF']); ?>
  @if($lien != "login" && $lien != "register" )
  <li style="margin-right : 10px;"><a href="{{ route('login') }}"><button type="button" class="btn btn-primary btn-sm" >Se Connecter</button></a></li>
  @endif
  @else
  <li style="margin-right : 10px; margin-top : 10px;">
       {{ Auth::user()->name }} <span class="caret"></span>
  </li>
  <li><a href="{{ url('/deconnexion') }}"><button type="button" class="btn btn-primary btn-sm" >Deconnexion</button></a></li>   
  @endif
</ul>
</div>
</div>
<div class="callout large primary" style="height: 40%;">
<div class="column text-center" style="margin-top: 4%;">
@yield('content')
</div>
</div>
<div class="container">
@yield('Last_3Articles')
@yield('formulaire')
@yield('Msg_enregistre')
@yield('Liste_contact')
@yield('tous_articles')
@yield('Connexion')
</div>
<script>
      $(document).foundation();
    </script>
     <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
