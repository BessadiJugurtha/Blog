<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo str_replace(dirname($_SERVER['PHP_SELF']).'/', '', $_SERVER['PHP_SELF']);?></title>
<style>
  
</style>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body >
<div class="top-bar fixed-top ">
<div class="top-bar-left nav nav-tabs">
<ul class="menu ">
<li class="menu-text">Blog</li>
<li><a class="a1" href="/home">Home</a></li>
<li><a class="a2" href="/article">Articles</a></li>
<li><a class="a3" href="/contact">Contact</a></li>
<?php use App\UserRole;
      use Illuminate\Support\Facades\Auth;
      $idUser =Auth::user();
   if($idUser!=null){
      $id = $idUser["id"];     
      $user =UserRole::where('user_id', $id)->get();
      $role;
    foreach ($user as $object){
       $role= $object->role_id;
    }
      if($role == 2){
    echo "<li  >" . "<a class='a4' href='/controle'>Panneau de controle</a>" . "</li>";
      }
   }
?>
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
  <li style="margin-right : 10px;">
  <a href="{{ url('/profil') }}"><button type="button" class="btn btn-success btn-sm" >Profil: {{ Auth::user()->name }}</button></a>
  </li>
  <li><a href="{{ url('/deconnexion') }}"><button type="button" class="btn btn-primary btn-sm" >Deconnexion</button></a></li>   

  @endif
</ul>
</div>
</div>
<div class="nav-prin callout "  >
<div class=" column text-center" style="margin-top: 4%; ">
@yield('content')

</div>
</div>
<div style ="margin-left : 40px;"class="container row small-up-1 medium-up-2 large-up-3 ">
@yield('Last_3Articles')

  </div>
  <div class="container">
@yield('formulaire')
@yield('Msg_enregistre')
@yield('Liste_contact')
@yield('tous_articles')
@yield('Connexion')
@yield('panneau_cntr')
@yield('UnArticle')
</div>
<script>
      $(document).foundation();
    </script>
     <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
