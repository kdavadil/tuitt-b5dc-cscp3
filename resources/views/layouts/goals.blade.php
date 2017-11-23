
@extends('layouts.app')


 <title>Goals</title>
@section('content')
<link href="{{ asset('css/goals.css') }}" rel="stylesheet">

<!-- left side -->
<section id="left-side">
	<div class="container">
		<div class="col-xs-12 col-sm-6">
 		<!-- Start of Panel -->
     <div class="panel panel-danger">
	   <div class="panel-heading">
		
      	<nav class="navbar navbar-default">
           <div class="container-fluid">

          <ul class="nav navbar-left">
          <label>DATE TODAY: </label>
           <span id="date-nav">
  
        <script> document.write(new Date().toLocaleDateString()); </script>

          </span>
          </ul>

     <ul class="nav navbar-right">
      <li><a href='{{ url("goals_choose") }}'>
     <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
      </a></li>
     </ul>

          </div>
	     </nav>

	   </div>
 <!-- GOALS LIST -->
 <div class="panel-body">
 		
  <div class="list-group">
      @foreach($goals as $goal)
  <form>
  <button class="btn-info btn-block" data-id="{{ $goal->id }}">
    <a href='#' class="list-group-item" id="goal_link">
 
  <!-- <i class="fa fa-pencil-square-o" aria-hidden="true"></i> -->

    {{ $goal->description }}

      </a>
    </button>
  </form>
      @endforeach
  </div>

 	</div> <!-- end of Panel Body -->
 	
  </div> <!-- end of Panel -->

  </div> <!-- end of left side -->


  <div class="col-xs-12 col-sm-6">

  <!-- <div class="thumbnail"> -->
     
  <div class="panel-group">
  <div class="panel panel-primary">

<div class="panel-heading">Goal Status</div>
  <div class="panel-body">
      <div id="completion">   


        </div>
       </div>
     </div>
    </div>
   <!-- Quote Section -->
   <div class="thumbnail">
     <p>"If people knew how hard I worked to get my mastery, it wouldn't seem so wonderful at all."</p>
     <blockquote>MICHELANGELO</blockquote>
   </div>
  </div>

  </div> <!-- end of container -->

</section>

	
  </div> 

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<script>
$(document).ready(function(){
  $("button").click(function(){
    var id = $(this).data('id')
    $("#completion").load("goals/"+id);
  });
});
</script>


@include('layouts.footer') {{-- Include footer file --}}  

@endsection 

