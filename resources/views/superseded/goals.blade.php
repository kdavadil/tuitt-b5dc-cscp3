@extends('layouts.app')
 <title>Goals</title>
@section('content')
<link href="{{ asset('css/goals.css') }}" rel="stylesheet">

<section id="right-side">
	<div class="container">
		<div class="col-xs-12 col-sm-6">
 		
 <div class="panel panel-danger">
	<div class="panel-heading">
		
	<nav class="navbar navbar-default">
  <div class="container-fluid">
<!--     <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div> -->
    <ul class="nav navbar-left">
      <li><a href="#">EDIT</a></li>
    </ul>

      <span id="date-nav">DATE TODAY</span>

    <ul class="nav navbar-right">
      <li><a href='{{ url("goals_create") }}'>ADD</a></li>
     </ul>

  </div>
	</nav>

	</div>

 	<div class="panel-body">

 @foreach($articles as $article)
 <div class="list-group">

	<li><a href='#' class="list-group-item">{{ $article->title }}</a></li>

</div>
	@endforeach

 	</div>
 	<div class="panel-footer">
 			Panel Footer
 	</div>
</div>

		
		</div>
	</div>
</section>


@include('layouts.footer') {{-- Include footer file --}}  

@endsection 

