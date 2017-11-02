@extends('applayout')
@extends('layouts.app')
@section('main_content')
<a href='{{ url("articles/create") }}' class="btn btn-primary">Create New Article</a>

@if(Session::has('delete_notif'))
	<div class="alert alert-info">
		{{ Session::get('delete_notif') }}
  	</div>
@endif

<h3>List of Articles</h3>

<ul>
	@foreach($articles as $article)
	<li><a href='{{ url("articles/$article->id") }}'>{{ $article->title }}</a></li>
	@endforeach
</ul>

{{ $articles->links() }}
@endsection