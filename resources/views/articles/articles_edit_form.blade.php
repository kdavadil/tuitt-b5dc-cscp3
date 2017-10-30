@extends('applayout')

@section('main_content')
	<h2>Edit this article:</h2>

<form method="POST" class="form-horizontal">
	{{ csrf_field() }}
  <div class="form-group">
    <label class="control-label col-sm-2" for="title">Title:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="title" name="title" value="{{$article_tbe->title}}">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="content">Content:</label>
    <div class="col-sm-10"> 
      <textarea name="content" id="content">{{$article_tbe->content}}</textarea>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
@endsection