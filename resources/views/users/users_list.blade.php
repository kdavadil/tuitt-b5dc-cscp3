@extends('applayout')

@section('main_content')
	<ul>
	@foreach($users as $user)
		<li><a href='{{ url("users/$user->id") }}'>{{ $user->name }}</a></li>
	@endforeach
	</ul>
@endsection