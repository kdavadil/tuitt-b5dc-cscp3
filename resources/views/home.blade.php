@extends('layouts.app')

 <title>Home</title>

@section('content')


<link href="{{ asset('css/home.css') }}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Courgette|Lobster|Shrikhand" rel="stylesheet">

<!-- Latest compiled and minified CSS -->

<div class="bg1">
  
        <div class="header">
        <div class="container">
        <img src="images/logo1_favicon.png">
        <h1>MENTOR PH</h1>
         <h4>SET GOALS, MENTOR, ACHIEVE</h4>
        <button id="sign-up" class="btn-success btn-lg">LEARN MORE</button>
         </div>
        </div> 
   
</div>


<section class="bg2">
 <div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-4 thumbnail">
        <h2>Part1</h2>
        <span class="glyphicon glyphicon-phone"></span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="col-xs-12 col-sm-4 thumbnail">
        <h2>Part1</h2>
        <span class="glyphicon glyphicon-phone"></span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="col-xs-12 col-sm-4 thumbnail">
        <h2>Part1</h2>
        <span class="glyphicon glyphicon-phone"></span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>

  <div class="col-xs-12 container-fluid">
    <a href="/goals"><button id="btn-start" class="btn-primary btn-lg">GET STARTED</button></a>
  </div>

  </div>
  
</section>

<footer></footer>


@include('layouts.footer') {{-- Include footer file --}}  

@endsection
