
@extends('layouts.app')

<link href="{{ asset('css/goals.css') }}" rel="stylesheet">

@section('content')

<form method="POST" action='{{ url("goals_finance/store") }}' class="form-horizontal">
  {{ csrf_field() }}
  <div class="form-group">
    <!-- <label class="control-label col-sm-2" for="goal">Goal</label> -->
    <div class="col-sm-10">
      <input type="text" class="form-control" id="goal" name="goal" value="Finance">
    </div>
  </div>

    <div class="form-group">
    <label class="control-label col-sm-2" for="Description">Description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Description" name="Description" placeholder="Enter Description" required>
    </div>
  </div>

      <div class="form-group">
    <label class="control-label col-sm-2" for="Priority">Priority</label>
    <div class="col-sm-10">
    <select id="Priority" name="Priority" class="form-control">
      <option value="1">High</option>
      <option value="2">Medium</option>
      <option value="3">Low </option>
    </select>
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>

@endsection

