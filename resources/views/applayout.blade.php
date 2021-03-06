<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mentor PH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="apple-touch-icon" sizes="57x57" href="resources/images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="resources/assets/images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="resources/assets/images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="resources/assets/images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="resources/assets/images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="resources/assets/images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="resources/assets/images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="resources/assets/images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="resources/assets/images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="{{asset('resources/assets/images/android-icon-192x192.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('resources/assets/images/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="96x96" href="resources/assets/images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="resources/assets/images/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>
<body>

<div class="container-fluid">
  <h1>Heading</h1>

  <h2>Navigation</h2>
  <ul>
  	<li>Link 1</li>
  	<li>Link 2</li>
  </ul>
  
  <div>
  	<h2>Content:</h2>
  	@yield('main_content')
  </div>

  <div>
  	<h2>Footer</h2>
  </div>
</div>
</body>
</html>