<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Foundation | Welcome</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="top-bar  ">
<div class="top-bar-left ">
<ul class="menu">
<li class="menu-text">Blog</li>
<li><a href="/">Home</a></li>
<li><a href="/article">Articles</a></li>
<li><a href="/contact">Contact</a></li>
</ul>
<!-- <button type="button" class="btn btn-secondary float-right">Example Button floated right</button> -->
</div>
</div>
<div class="callout large primary">
<div class="column text-center">
@yield('content')
</div>
</div>
<div class="container">
@yield('Last_3Articles')
@yield('formulaire')
@yield('Msg_enregistre')
@yield('Liste_contact')
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>
