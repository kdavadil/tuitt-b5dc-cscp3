@extends('applayout')

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
<h3>Add Your Comment:</h3>
<form method="POST" class="form-horizontal">
	{{ csrf_field() }}
  <div class="form-group">
    <label class="control-label col-sm-2" for="comment">Comment:</label>
    <div class="col-sm-10"> 
      <textarea name="description" id="description"></textarea>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
<a href='{{ url("articles/$article->id/edit") }}' class="btn btn-primary">Edit this article</a>
<a href='{{ url("articles/$article->id/delete") }}' class="btn btn-danger">Delete this article</a>
@endsection