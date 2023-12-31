<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title',env('APP_NAME'))</title>

    <!--  ---------------  Favicons----------------->
    
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('public/assets/img/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('public/assets/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/assets/img/favicons/favicon-16x16.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/img/favicons/favicon.ico')}}">
    <link rel="manifest" href="{{asset('public/assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{asset('public/assets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">

    <!--    Stylesheets-->
    
    <link href="{{asset('public/assets/css/theme.css')}}" rel="stylesheet" />
    <style>
      .nav-link {
        color:#000;
      }
    </style>
    <!-- Styles -->
    @stack('styles')
  </head>


  <body>

    <!--    Main Content-->

    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href=""><img src="{{asset('public/assets/img/gallery/logo.png')}}" height="45" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <!-- <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="{{route('userdashboard')}}">Dashboard</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="{{route('order.index')}}">Couriar Order List</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="{{route('order.create')}}">Couriar Order</a></li>
            </ul> -->
            <div class="dropdown d-none d-lg-block ms-auto">
            </div><a class="btn btn-primary order-1 order-lg-0 ms-lg-3" href="{{url('/')}}">Home</a>
            <a href="{{route('user.login')}}" class="btn btn-primary mx-2">User Login</a>
            <a class="btn btn-primary mx-2" href="{{route('user.LogOut')}}">Log Out </a>
          </div>
        </div>
      </nav>
      <section class="pt-4" >
        <div class="container mt-5">
          <div class="row">
            <div class="col-sm-2">
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <!-- <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a href="{{route('userdashboard')}}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i><span class="ms-1 d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Shipment Order</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{route('order.index')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">List</span></a>
                            </li>
                            <li>
                                <a href="{{route('order.create')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Add New</span></a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <div class="col-sm-10">
              @yield('content')
            </div>
          </div>
        </div>
      </section>
    </main>
    
    <!--    End of Main Content-->

    <!--    JavaScripts-->
    
    <script src="{{asset('public/vendors/@popperjs/popper.min.js')}}"></script>
    <script src="{{asset('public/vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/vendors/is/is.min.js')}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{asset('public/vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{asset('public/assets/js/theme.js')}}"></script>

@stack('scripts')

  </body>
</html>