<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">


<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('admin/img/favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{ config('app.name', 'Siva') }}</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/css/light-bootstrap-dashboard.css?v=2.0.0')}} " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('admin/css/demo.css')}}" rel="stylesheet" />

    <!-- <link href="{{asset('ckeditor/samples/css/samples.css')}}" rel="stylesheet" /> -->
    <!-- <link href="{{asset('ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')}}" rel="stylesheet" /> -->



        <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <style type="text/css">
    .custom-textarea{
        height: 100px;
    }
</style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="{{asset('admin/img/sidebar-5.jpg')}}">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="{{ url('home') }}" class="simple-text">
                        Dr. Bora Siva Kumar Reddy
                    </a>
                </div>
                <ul class="nav">
      
                    <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('home') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Home</p>
                        </a>
                    </li>

                    <li class="nav-item {{ Request::is('admin/posts') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('admin/posts') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Posts</p>
                        </a>
                    </li>


                    <li class="nav-item {{ Request::is('admin/categories') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('admin/categories') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Categories</p>
                        </a>
                    </li>


                    <li class="nav-item {{ Request::is('admin/comments') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('admin/comments') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Comments</p>
                        </a>
                    </li>


                    <li class="nav-item {{ Request::is('admin/tags') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('admin/tags') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Tags</p>
                        </a>
                    </li>

                    @if (Auth::user()->is_admin)
                    <li class="nav-item {{ Request::is('admin/users') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('admin/users') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>users</p>
                        </a>
                    </li>
                    @endif
                   
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> {{ ucfirst(collect(request()->segments())->last()) }} </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            
                           <!--  <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li> -->
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/profile') }}">
                                    <span class="no-icon">{{ ucfirst(Auth::user()->name) }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
           <div class="content">
                          @yield('content')
           </div>


<!--             <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="https://santoshge-reddy.github.io/Santosh/">Santosh</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer> -->
        </div>
    </div>



</body>
<!--   Core JS Files   -->
<script src="{{asset('admin/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset('admin/js/plugins/bootstrap-switch.js')}}"></script>
<!--  Chartist Plugin  -->
<script src="{{asset('admin/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('admin/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{asset('admin/js/light-bootstrap-dashboard.js?v=2.0.0')}}" type="text/javascript"></script>

    <script src="{{ asset('js/app.js') }}"></script>


    <!-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script> -->
    <!-- <script src="{{ asset('ckeditor/samples/js/sample.js') }}"></script> -->



<script>
    // initSample();
</script>

</html>