@extends('layouts.app')
 <title>Goals</title>
@section('content')
<link href="{{ asset('css/goals.css') }}" rel="stylesheet">

<section id="left-side">
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

      <span id="date-nav">
        
        <script> document.write(new Date().toLocaleDateString()); </script>

      </span>

    <ul class="nav navbar-right">
      <li><a href='{{ url("goals_create") }}'>ADD</a></li>
     </ul>

  </div>
	</nav>

	</div>

 	<div class="panel-body">
 		
 <div class="list-group">
 @foreach($goals as $goal)
  <a href='{{ url("goals/$goal->id") }}' class="list-group-item">
    {{ $goal->description }}
  </a>
@endforeach
</div>


 	</div>
 	<div class="panel-footer">
 			
 	</div>
</div>

		
		</div>

  <div class="col-xs-12 col-sm-6">
  <div class="thumbnail">
    
    <label>Goal:</label>
    <span></span>
    <label>Priority</label>
    <span></span>
    <label>Completed:</label>
    <span></span>

  </div>

  </div> 

	</div>
</section>




@include('layouts.footer') {{-- Include footer file --}}  

@endsection 

