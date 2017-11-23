@extends('layouts.app')


 <title>Home</title>

@section('content')

<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="{{ asset('css/home.css') }}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Courgette|Lobster|Shrikhand" rel="stylesheet">

<!-- Latest compiled and minified CSS -->

<div class="bg1">
  
        <div class="header">
        <div class="container">
        <img src="images/logo1_favicon.png">
        <h1>MENTOR PH</h1>
         <h4>“A mentor is someone who sees more talent and ability within you, than you see in yourself, and helps bring it out of you.” 
― Bob Proctor</h4>
        <!-- <button id="sign-up" class="btn-success btn-lg">LEARN MORE</button> -->

       
    <a href="/goals"><button id="btn-start" class="btn-primary btn-lg">GET STARTED</button></a>
        


         </div>
        </div> 
   
</div>


<section class="bg2">
 <div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-4 thumbnail">
        <h2>Goals</h2>
        <i class="fa fa-calendar-check-o fa-5x" aria-hidden="true"></i>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>
    </div>
    <div class="col-xs-12 col-sm-4 thumbnail">
        <h2>Mentor</h2>
        <i class="fa fa-handshake-o fa-5x" aria-hidden="true"></i></span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>
    </div>
    <div class="col-xs-12 col-sm-4 thumbnail">
        <h2>Achieve</h2>
        <i class="fa fa-star-o fa-5x" aria-hidden="true"></i></span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>
    </div>
  </div>



  </div>
  
</section>

<footer></footer>


@include('layouts.footer') {{-- Include footer file --}}  

@endsection
