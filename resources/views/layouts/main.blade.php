<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Foundation | Welcome</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
<body class="bg-dark">

<div class="top-bar">
<div class="top-bar-left">

<ul class="menu">
<li class="menu-text">Blog</li>
<li><a href="/">Home</a></li>
<li><a href="/article">Articles</a></li>
<li><a href="/contact">Contact</a></li>
</ul>
</div>
</div>

<div class="callout large primary">
<div class="row column text-center">
@yield('content')
</div>
</div>

<div class="row medium-8 large-7 columns">
@yield('Last_3Articles')

</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>
