
@extends('layouts.app')


@section('content')
<h4>Add New Goal</h4>

<form method="POST" class="form-horizontal">
	{{ csrf_field() }}
  <div class="form-group">
    <label class="control-label col-sm-2" for="goal">Goal</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="goal" name="goal" placeholder="Enter your Goal">
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>

@endsection
