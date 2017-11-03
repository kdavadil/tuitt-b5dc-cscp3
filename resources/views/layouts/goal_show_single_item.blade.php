@extends('layouts.app')

@section('content')
<!-- 	@if(Session::has('edit_notif'))
		<div class="alert alert-info">
			{{ Session::get('edit_notif') }}
  		</div>
	@endif -->
<a href="{{ url('goals') }}">Back to your Goals</a>
<h2>{{ $goal_tbe->goal }}<h2>
<p>{{ $goal_tbe->description }}</p>
<h3>Comments:</h3>

@endsection
