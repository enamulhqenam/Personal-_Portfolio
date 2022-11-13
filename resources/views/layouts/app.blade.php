<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Portfolio') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased hold-transition sidebar-mini sidebar-collapse">
        {{-- <div class="min-h-screen bg-gray-100">
          @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
          
            <main>
                {{ $slot }}
            </main>
        </div> --}}
        
        <main>
            <div class="wrapper">
                <nav class="main-header navbar navbar-expand navbar-white navbar-light py-2">
                     <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">                           
                       
                        <li class="nav-item">
                            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                                <i class="fas fa-search"></i>
                            </a>
                            <div class="navbar-search-block " style="width:60%;margin:auto;border-radius:50%;">
                                <form class="form-inline">
                                <div class="input-group input-group-lg" >
                                    <input class="form-control form-control-navbar" type="search" placeholder="Search "  aria-label="Search">
                                    <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search" >
                                        <i class="fas fa-times"></i>
                                    </button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </li>
                       <li class="nav-item dropdown user-menu">
                            <a href="#" class="nav-link dropdown-toggle responsive" data-toggle="dropdown">
                                
                                @if(Auth::user()->Photo)
                                    <img src="/uploads/{{ Auth::user()->Photo }}" class="user-image img-circle elevation-2" alt="User Photo">
                                @endif
                                <b class="d-none d-md-inline"><i class="fa fa-lock"> => </i>{{ Auth::user()->name }}</b>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right mt-3" style="border-radius: 0.5rem">
                                <!-- User image -->
                                {{-- <li class="">
                                    @if(Auth::user()->Photo)
                                        <img src="/uploads/{{ Auth::user()->Photo }}" class="user-image img-circle elevation-2" alt="User Photo">
                                    @endif
                                    <p>
                                        {{ Auth::user()->name }}
                                        <small>Member since {{ Auth::user()->created_at->format('D-M. Y') }}</small>
                                    </p>
                                </li> --}}
                                <li class="text-center py-1">
                                    <a href="profile/show" class="text-navy"><i class="fa-solid fa-user mr-3 text-navy"></i>Profile</a>
                                    
                                </li>
                                <!-- Menu Footer-->
                                <li class="text-center py-1 pb-3">
                                    <a href="#" class="text-navy"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    LogOut
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div> 
            @include('layouts.sidebar')
            <div class="content-wrapper">
                <section class="content">
                    @yield('content')
                </section>
            </div>
        </main>
        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="plugins/moment/moment.min.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>
    </body>
</html>
