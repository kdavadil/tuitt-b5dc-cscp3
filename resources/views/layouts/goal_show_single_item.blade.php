
<h2>{{ $goal_tbe->description }}<h2>

<form method="POST" action='{{ url("goals/$goal_tbe->id/edit") }}' class="form-horizontal">
	{{ csrf_field() }}
  <div class="form-group">
    <label class="control-label col-sm-2" for="comment">Add Note:</label>
    <div class="col-sm-10"> 
      <textarea name="notes" id="notes">{{ $goal_tbe->notes }}</textarea>
    </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">

     <button class="btn btn-success"><i class="fa fa-check-circle fa-5x" aria-hidden="true"></i></button>

     <a href='{{ url("goals/$goal_tbe->id/delete") }}' class="btn btn-danger"><i class="fa fa-times fa-5x" aria-hidden="true"></i></a>

    </div>
  </div>

</form>






