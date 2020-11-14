@extends('layouts.aragon')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="sidenav navbar navbar-vertical toggled navbar-expand-xs navbar-light" style="background-color: #000; color: #ffffff;" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header align-items-center "  href="#menu-toggle" id="menu-toggle">
             @include('include.brand')
            </div>
            <div class="navbar-inner">
              <!-- Collapse -->
              @include('include.sidenav')
            </div>
          </div>
        </nav>
      
        <!-- Main content -->
        <div class="main-content" id="panel">
          <!-- Topnav -->
          <nav class="navbar-horizontal navbar-top navbar-expand navbar-dark border-bottom" style="background-color: #000" >
            <div class="container-fluid" style="background-color: #000">
              <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <!-- Search form -->
             @include('include.search')
                <!-- Navbar links -->
             @include('include.navbar')
              </div>
            </div>
          </nav>
          <!-- Header -->
          <!-- Header -->
          <div class="header pb-6" style="background-color: #000">
            <div class="container-fluid">
              @include('include.header')
            </div>
          </div>
          <!-- Page content -->
          <div class="container-fluid mt--6">
           
         
            <!-- Footer -->
            <footer class="footer pt-0">
               @include('include.footer')
            </footer>
          </div>
        </div>
        
</body>
</html>






