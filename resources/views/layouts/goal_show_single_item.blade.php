@extends('layouts.app')

@section('main_content')
	@if(Session::has('edit_notif'))
		<div class="alert alert-info">
			{{ Session::get('edit_notif') }}
  		</div>
	@endif
<a href="{{ url('articles') }}">Back to articles list</a>
<h2>{{ $article->title }}<h2>
<p>{{ $article->content }}</p>
<h3>Comments:</h3>
<div>
	@foreach($article->get_comments as $comment)
		<p>{{ $comment->description." by ".$comment->get_user->name." at ".$comment->created_at }}</p>
	@endforeach
</div>