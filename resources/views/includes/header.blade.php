<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Property Disposal</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <style type="text/css">
    p, i{
      color: black;
    }
      #blacklabel{
         
         margin: 10px 0; 
         background: #323733; 
         text-align: center; 
         color: white; 
         font: 13px Helvetica, Sans-Serif; 
         text-decoration: uppercase;  
         padding: 8px 0px; 
          }
      .nameff{
        -webkit-text-decoration-line: overline; /* Safari */
        text-decoration-line: overline; 
      }

  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background: #07A231;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        
          <i class="fa fa-sign-out-alt">
            <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
               document.getElementById('logout-form').submit();" style="color: black;">
                Sign-out
            </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
              </form>          
          </i>
        
       
      </li>
    </ul> 
</nav>


  @yield('content')
</div>
