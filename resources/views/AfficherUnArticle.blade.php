<!-- affichage d'un article -->
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Foundation | Welcome</title>
<style>
    .nav-prin{
		height:250px;
		background-color: rgb(130, 130, 134);
    }
    
    .p1 {
	font-size: 100px;
	/*margin-top: -40px;*/
	letter-spacing: 3px;
	color: white;
  	text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
.a1:hover,.a2:hover,.a3:hover,.a4:hover {
	background-color: lightgray;
	color: #007BFF;
}

.a1,.a2,.a3,.a4 {
	background-color: #007BFF;
	color: white;
	border-radius: 15px 50px 30px; 
}

.a1:active, .a2:active, .a3:active, .a4:active {
	background-color: white;
	color: #007BFF;
}

body>div>ul {
	border-radius: 15px;
 	border: 2px solid #007BFF;
}

.jumbotron {
	background-color: rgb(48, 61, 59);
	margin: 1%;
	
    }
    .top-bar{
		border:solid 1px black ;
		height: 12%;
		 
	} 
    
</style>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style='background-color: rgb(252, 240, 225);'>
<div class="top-bar">
<div class="top-bar-left">
<ul class="menu">
<li class="menu-text">Blog</li>
<li><a class="a1" href="/home">Home</a></li>
<li><a class="a2" href=<?php echo asset('/article');?>>Articles</a></li>
<li><a class="a3" href=<?php echo asset('/contact');?>>Contact</a></li>
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
</div>
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
<div class="nav-prin  ">
<div class=" column text-center" style="margin-top: 4%;">
<h1 class="p1" >Article</h1>
</div>
</div>
<div class=" jumbotron container cell col-md-8">
<h3>{{ $post->post_title }}</h3>
<p>{{ $post->post_content }}</p>
<div class="  callout">
<ul class="menu simple">
<li><a href="#">Auteur :{{$post->author->name}}</a></li>
</ul>
</div>
</div>
</body>
</html>