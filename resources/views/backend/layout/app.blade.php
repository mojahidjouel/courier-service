<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>@yield('title','Courier Service')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('public/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">
    <!-- Styles -->
    @stack('styles')
</head>

<style>
    .saidebarbg{
        background-color: #f5ebe0;
    }

    .sidebar .navbar .navbar-nav .nav-link i{
         background-color:white!important;
    }

    .sidebar .navbar .navbar-nav .nav-link:hover, .sidebar .navbar .navbar-nav .nav-link.active{
        color: white!important;
        background: #bb010b!important;

    }

    .shdo{
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3)!important;
    }
     

</style>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <div class="sidebar saidebarbg pe-4 pb-3">
            <nav class="navbar saidebarbg shdo">
                <a href="" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>E-Couriar</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4 ">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('public/uploads/adminuser/'.request()->session()->get('image'))}}" alt="" style="width: 50px; height: 50px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3 ">
                        <h6 class="mb-0">{{encryptor('decrypt',request()->session()->get('userName')) }}</h6>
                        <span>{{encryptor('decrypt',request()->session()->get('role')) }}</span>
                    </div>
                </div>
                <div class="navbar-nav w-100 shdo">
                    <a href="{{route('dashboard')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i> Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle fw-bolder" data-bs-toggle="dropdown"><i class="bi bi-person"></i></i> AdminUser</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('adminuser.index')}}" class="dropdown-item">List </a>
                            <a href="{{route('adminuser.create')}}" class="dropdown-item">Add New </a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle fw-bolder" data-bs-toggle="dropdown"><i class="bi bi-person"></i>User</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('user.index')}}" class="dropdown-item"> List</a>
                            <a href="{{route('user.create')}}" class="dropdown-item"> Add New</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle fw-bolder" data-bs-toggle="dropdown"><i class="bi bi-person"></i> Role</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('role.index')}}" class="dropdown-item"> List</a>
                            <a href="{{route('role.create')}}" class="dropdown-item"> Add New</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle fw-bolder" data-bs-toggle="dropdown"><i class="bi bi-person"></i> Asset</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('asset.index')}}" class="dropdown-item"> List</a>
                            <a href="{{route('asset.create')}}" class="dropdown-item"> Add New</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle fw-bolder" data-bs-toggle="dropdown"><i class="bi bi-truck"></i> Company</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('company.index')}}" class="dropdown-item"> List</a>
                            <a href="{{route('company.create')}}" class="dropdown-item"> Add New</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-truck"></i> Branch</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('branch.index')}}" class="dropdown-item"> List</a>
                            <a href="{{route('branch.create')}}" class="dropdown-item"> Add New</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle fw-bolder" data-bs-toggle="dropdown"><i class="bi bi-truck"></i> City</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('city.index')}}" class="dropdown-item"> List</a>
                            <a href="{{route('city.create')}}" class="dropdown-item"> Add New</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle fw-bolder" data-bs-toggle="dropdown"><i class="bi bi-truck"></i> Price</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('price.index')}}" class="dropdown-item"> List</a>
                            <a href="{{route('price.create')}}" class="dropdown-item"> Add New</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle fw-bolder" data-bs-toggle="dropdown"><i class="bi bi-truck"></i> Shipment</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('shipment.index')}}" class="dropdown-item"> List</a>
                            <a href="{{route('shipment.create')}}" class="dropdown-item"> Add New</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle fw-bolder" data-bs-toggle="dropdown"><i class="bi bi-truck"></i> Order Tracking</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('ordertrack.index')}}" class="dropdown-item"> List</a>
                            <a href="{{route('ordertrack.create')}}" class="dropdown-item"> Add New</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle fw-bolder" data-bs-toggle="dropdown"><i class="bi bi-truck"></i> General Setting</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('general_setting.index')}}" class="dropdown-item"> General Setting List</a>
                            <a href="{{route('general_setting.create')}}" class="dropdown-item"> General Setting Add</a>
                        </div>
                    </div>

                    <!-- <a href="" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle fw-bolder" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('login')}}" class="dropdown-item">Sign In</a>
                            <a href="{{route('register')}}" class="dropdown-item">Sign Up</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand   bg-primary navbar-primary sticky-top px-4 py-0">
                <a href="" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{asset('public/uploads/adminuser/'.request()->session()->get('image'))}}" alt="" style="width: 50px; height: 50px;">
                            <span class="d-none d-lg-inline-flex">{{encryptor('decrypt',request()->session()->get('userName')) }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <!-- <a href="#" class="dropdown-item">My Profile</a> -->
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="{{route('logOut')}}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

        <!-- Main Content -->
        <div class="container-fluid pt-4 px-4">
            @yield('content')
        </div>

            <!-- Footer Start -->
            <div class="container-fluid pt-2">
                <div class="bg-primary rounded-top p-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start text-white">
                            &copy; <a class="text-white" href="#">Couriar_Service</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end text-white">
                            Designed By <a class="text-white" href="">Muhammad Mojahedul Islam</a>
                            <br>Distributed By: <a class="text-white" href="" target="">WDPF_Round_54</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    
    <!-- JavaScript Libraries -->
    @stack('scripts')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('public/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('public/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('public/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('public/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('public/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('public/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('public/js/main.js')}}"></script>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
</body>

</html>