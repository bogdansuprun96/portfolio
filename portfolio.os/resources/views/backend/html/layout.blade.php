@section('header')
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Pixel Admin - Responsive Admin Dashboard Template built with Twitter Bootstrap</title>
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.maskedinput.min.js') }}"></script>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('assets/admin-panel/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}"
          rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{ asset('assets/admin-panel/plugins/bower_components/toast-master/css/jquery.toast.css') }}"
          rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{ asset('assets/admin-panel/
assets/admin-panel/plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('assets/admin-panel/css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/admin-panel/css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('assets/admin-panel/css/colors/blue-dark.css') }}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header"><a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)"
                                      data-toggle="collapse" data-target=".navbar-collapse"><i
                        class="fa fa-bars"></i></a>
            <div class="top-left-part"><a class="logo" href="{{ route('admin-index') }}"><b><img
                                src="../plugins/images/pixeladmin-logo.png" alt="home"/></b><span class="hidden-xs"><img
                                src="../plugins/images/pixeladmin-text.png" alt="home"/></span></a></div>
            <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
                <li>
                    <form role="search" class="app-search hidden-xs">
                        <input type="text" placeholder="Search..." class="form-control"> <a href=""><i
                                    class="fa fa-search"></i></a>
                    </form>
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li>
                    <a class="profile-pic" href="#"> <img src="../plugins/images/users/varun.jpg" alt="user-img"
                                                          width="36" class="img-circle"><b
                                class="hidden-xs">{{ Auth::user()->name }}</b> </a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- Left navbar-header -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse slimscrollsidebar">
            @section('menu')
                <ul class="nav" id="side-menu">
                    <li style="padding: 10px 0 0;">
                        <a href="{{ route('admin-index') }}" class="waves-effect"><i class="fa fa-clock-o fa-fw"
                                                                                     aria-hidden="true"></i><span
                                    class="hide-menu">Головна</span></a>
                    </li>
                    <li>
                        <a href="{{ route('admin-profile') }}" class="waves-effect"><i class="fa fa-user fa-fw"
                                                                                       aria-hidden="true"></i><span
                                    class="hide-menu">Профіль</span></a>
                    </li>
                    <li>
                        <a href="basic-table.html" class="waves-effect"><i class="fa fa-table fa-fw"
                                                                           aria-hidden="true"></i><span
                                    class="hide-menu">Basic Table</span></a>
                    </li>
                    <li>
                        <a href="fontawesome.html" class="waves-effect"><i class="fa fa-font fa-fw"
                                                                           aria-hidden="true"></i><span
                                    class="hide-menu">Icons</span></a>
                    </li>
                    <li>
                        <a href="map-google.html" class="waves-effect"><i class="fa fa-globe fa-fw"
                                                                          aria-hidden="true"></i><span
                                    class="hide-menu">Google Map</span></a>
                    </li>
                    <li>
                        <a href="blank.html" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span
                                    class="hide-menu">Blank Page</span></a>
                    </li>
                    <li>
                        <a href="404.html" class="waves-effect"><i class="fa fa-info-circle fa-fw"
                                                                   aria-hidden="true"></i><span class="hide-menu">Error 404</span></a>
                    </li>
                </ul>
            @show
        </div>
    </div>
    <!-- Left navbar-header end -->
    <!-- Page Content -->
    <div id="page-wrapper">
        @show

        @yield('content')

        @section('footer')
            <footer class="footer text-center"> 2017 - {{ date('Y')  }} &copy; {{ $_SERVER['HTTP_HOST'] }}</footer>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="{{ asset('assets/admin-panel/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('assets/admin-panel/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ asset('assets/admin-panel/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
<!--slimscroll JavaScript -->
<script src="{{ asset('assets/admin-panel/js/jquery.slimscroll.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('assets/admin-panel/js/waves.js') }}"></script>
<!--Counter js -->
<script src="{{ asset('assets/admin-panel/plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
<script src="{{ asset('assets/admin-panel/plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
<!--Morris JavaScript -->
<script src="{{ asset('assets/admin-panel/plugins/bower_components/raphael/raphael-min.js') }}"></script>
<script src="{{ asset('assets/admin-panel/plugins/bower_components/morrisjs/morris.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('assets/admin-panel/js/custom.min.js') }}"></script>
<script src="{{ asset('assets/admin-panel/js/dashboard1.js') }}"></script>
<script src="{{ asset('assets/admin-panel/plugins/bower_components/toast-master/js/jquery.toast.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $.toast({
            heading: 'Welcome to Pixel admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
</script>
</body>

</html>
@show