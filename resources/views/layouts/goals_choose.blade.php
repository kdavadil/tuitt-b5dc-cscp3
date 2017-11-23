
@extends('layouts.app')


 <title>Goals</title>
@section('content')
<link href="{{ asset('css/goals.css') }}" rel="stylesheet">

<h2>Choose your Goal</h2>
<section style="width: 80%;margin: 0 auto;">

<div class="list-group">
  <a href='{{ url("goals_finance") }}' id="goal_finance" class="list-group-item goal_menu" style="background-image:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),  url('images/dollar-2931882_1280.png')">
    FINANCE
  </a>
  <a href='{{ url("goals_mental") }}' id="goal_finance" class="list-group-item goal_menu" style="background-image:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('images/book-2875123_1920.jpg')">MENTAL</a>

  <a href='{{ url("goals_physical") }}' id="goal_finance" class="list-group-item goal_menu" style="background-image:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),  url('images/sport-2726735_1920.jpg')">PHYSICAL</a>

  <a href='{{ url("goals_relational") }}' id="goal_finance" class="list-group-item goal_menu" style="background-image:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),  url('images/roses-2840743_1920.jpg')">RELATIONSHIPS</a>

  <a href='{{ url("goals_spiritual") }}' id="goal_finance" class="list-group-item goal_menu" style="background-image:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),  url('images/cross-2713356_1920.jpg');">SPIRITUAL</a>

</div>

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

