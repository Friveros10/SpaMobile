<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" ng-app="app">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SpaMobile</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-loading-bar/0.7.1/loading-bar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.11/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script> 
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SpaMobile</title>

  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/angular-loading-bar/0.7.1/loading-bar.min.css" rel="stylesheet"/>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 

</head>

<body>
<div class="d-flex " id="wrapper">

    <!-- Sidebar -->
    <div class="  " style="background-color:#000; color:#fff " id="sidebar-wrapper">
         <div class="sidebar-heading">
            <img src="{{ asset('assets/img/brand/spamobile.png')}}" style="padding-top: 10px; padding-bottom: 20px; padding-right: 10px; padding-left: 20px;
            " class="navbar-spaMobile" alt="...">
        </div>
      <div class="list-group list-group-flush">
          <a href="#" class="list-group-item list-group-item-action" style="background-color: #000; color:#fff;"><h4>Menu</h4> </a>
          <a href="/register" class="list-group-item list-group-item-action" style="background-color: #000; color:#fff;"><h4>Registrar</h4></a>
          <a href="/registros" class="list-group-item list-group-item-action" style="background-color: #000; color:#fff;"><h4>Mis Registros</h4></a>
          <a href="/misLocales" class="list-group-item list-group-item-action" style="background-color: #000; color:#fff;"><h4>Mis Locales </h4></a>
          <a href="#" class="list-group-item list-group-item-action" style="background-color: #000; color:#fff;"><h4>Historial </h4></a><br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
          <a class="list-group-item list-group-item-action dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="background-color: #000; color:#fff;">
              <span class=" btn btn-xs glyphicon glyphicon-log-out"><h4>Cerrar Sesion</h4></span>
          </a>
      </div>
    </div>
    <!-- Page Content -->
    <div id="page-content-wrapper" >

      <nav class="navbar navbar-expand-lg navbar-light  border-bottom" style="background-color:#000; color:#fff ">
        <a href="#menu-toggle" style="background-color:#fff"class="btn btn-xs  navbar-toggler-icon" id="menu-toggle" >
            </a>
<i class="icon-bar"></i>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="background-color:#fff">
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class=" dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
          </ul>
        </div>
      </nav>
      <main class="py-4">
        @yield('content')
    </main>
</div>
</div>
<script src="{{asset('/angularController/mainAppAdmin.js?v=2.0.0')}}"></script>

<script src="{{asset('/angularController/homeController.js?v=2.0.0')}}"></script>
</body>
</html>