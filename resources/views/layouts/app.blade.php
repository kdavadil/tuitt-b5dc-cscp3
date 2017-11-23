<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.0/sweetalert2.all.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.0/sweetalert2.all.min.js"></script>

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style type="text/css">

    .bg1 {
      
        background-color: #F08080;
        height: 500px; 
        width: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
    }

    .navbar-default {
    background-color: #E15554 !important;
    border-color: red;
    color: white !important;

   }

  .navbar-brand {
    color: white !important;
  }

  .navbar {
    margin-bottom: 0;
  }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
        <!--  -->
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

    <!-- Branding Image -->
    <a class="navbar-brand" href="{{ url('/home') }}">MENTOR_PH
    <!-- <img src={{asset('/favicon-16x16.png')}}> --></a>
    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
            
    <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">&nbsp;</ul>

    <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
 
      <!-- <li><a href="{{ url('about') }}">About</a></li> -->
    <!-- Authentication Links -->
    @guest
    <li><a href="{{ route('login') }}">Login</a></li>
    <li><a href="{{ route('register') }}">Register</a></li>
    @else
    <li class="dropdown">

    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative;padding-left: 50px;">
    <img src="/avatar/{{Auth::user()->avatar}}" style="width:32px;height:32px;border-radius:50%;position: absolute; top:10px;left:10px;">
    {{ Auth::user()->name }} 
    <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
    <li><a href="{{url('home')}}">Home</li>
    <li><a href="{{url('goals')}}">My Goals</li>
    <li><a href="{{url('newsfeed')}}">Newsfeed</li>
    <li><a href="{{url('profile')}}">Profile</li>

    @if ( Auth::user()->email == 'admin@upstr3am.com')
       <li><a href="{{url('admin')}}">Admin</li>
      

    @endif

<li>
    <a href="{{ route('logout') }}"
    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
