@extends('layouts.app')


 <title>Profile</title>

@section('content')

<link href="{{ asset('css/profile.css') }}" rel="stylesheet">

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
@if (Session::has('success'))
	<div class="alert alert-success alert-dismissable">.
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> {{ Session::get('success') }}
	</div>
@endif
	
@if (Session::has('image-edit'))
	<div class="alert alert-info alert-dismissable">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Image Upload</strong> {{ Session::get('image-edit') }}
	</div>
@endif


<header>
  <img src="/avatar/{{$user->avatar}}" id="avatar">
  <label>{{ $user->name }}'s Profile</label>
  <form enctype="multipart/form-data" action="/profile" method="POST">



<input type="file" name="avatar">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<button type="submit" class="btn btn-primary btn-sm">UPLOAD</button>
</form>
</header>

<div class="thumbnail">
<h3>Edit info</h3>

<form method="POST" action='{{ url("profile/$user->id/edit") }}' class="form-horizontal">
	{{ csrf_field() }}

 <div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
  <label>Name: </label>
  <input type="text" name="name" id="name" value="{{ $user->name }}"> 
  </div>
  </div>

  <div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
  <label>Email: </label>
  <input type="text" name="email" id="email" value="{{ $user->email }}"> 
  </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
     <button class="btn btn-success">UPDATE</button>
    </div>
  </div>

</form>
</div>
@include('layouts.footer') {{-- Include footer file --}}  

@endsection
