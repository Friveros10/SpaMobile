<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SpaMobile</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

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
        <a href="#" class="list-group-item list-group-item-action"><h6><b>Registrar Ingresos </b></h6></a>
        <a href="#" class="list-group-item list-group-item-action"><h6><b>Registrar Retiros </b></h6></a>
        <a href="#" class="list-group-item list-group-item-action"><h6><b>Mis Locales </b></h6></a>
        <a href="#" class="list-group-item list-group-item-action"><h6><b>Historial </b></h6></a>
        <a class="list-group-item list-group-item-action dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

<!--        <a href="#" class="list-group-item list-group-item-action"></a> -->
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


</body>
</html>