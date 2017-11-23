@include('alert::message')

<p>{{ $goal_tbe->description }}<p>
<form method="POST" action='{{ url("goals/$goal_tbe->id/edit") }}' class="form-horizontal">
	{{ csrf_field() }}
  <div class="form-group">
    <label class="control-label col-sm-2" for="comment" style="font-size: 20px;">Add Note:</label>
    <div class="col-sm-10"> 
      <textarea name="notes" id="notes" style="width: 100%;">{{ $goal_tbe->notes }}</textarea>

    </div>
  </div>


  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">

     <button class="btn btn-success"><i class="fa fa-check-circle fa-3x" aria-hidden="true"></i></button>

     <a href='{{ url("goals/$goal_tbe->id/delete") }}' class="btn btn-danger"><i class="fa fa-times fa-3x" aria-hidden="true"></i></a>

    </div>
  </div>

</form>

<script>
    $(".btn-danger").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });
</script>




