<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel Blog Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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