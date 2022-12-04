<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}->@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    {{-- vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
        
        <!-- jQuery UI 1.11.4 -->
        <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- overlayScrollbars -->
        <script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/dist/js/adminlte.js"></script>
    </body>
</html>
