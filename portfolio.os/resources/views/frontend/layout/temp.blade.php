@section('header')
        <!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/gif">
    <title>Site</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.auto.pagination.min.js') }}"></script>
    <!--    <script src="https://unpkg.com/vue"></script>-->
    <script src="{{ asset('/assets/js/jquery.maskedinput.min.js') }}"></script>

</head>
<body>
<div class="container">
    <div class="row header">
        <h1 class="name hidden-xs">Bohdan Suprun</h1>
        <img src="{{ asset('images/avatar.jpg') }}" class="img-responsive img-thumbnail" id="avatar-thumbnail" alt="">
        <div id="lang" class="col-md-6">
            <ul class="icons-lang-ul">
                <li><a href="#"><i id="usa" class="icons-lang"></i></a></li>
                <li><a href="#"><i id="ua" class="icons-lang"></i></a></li>
                <li><a href="#"><i id="ru" class="icons-lang"></i></a></li>
            </ul>
        </div>
        <div class="col-md-6" style="text-align: right; color: white; padding-right: 6px;">
            bogdansuprun96@gmail.com
        </div>
        <div id="callback" class="contact-block">
            <span>Call me:</span>
            <h3>+38(068)578-67-48</h3>
        </div>
    </div>
    <div class="row nav">
        <nav class="navbar navbar-default hidden-xs">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="/resume">Resume</a></li>
                    <li><a href="/portfolio">Portfolio</a></li>
                    <li><a href="/price">Price</a></li>
                    <li><a href="/faq">FAQ</a></li>
                    <li><a href="/order">Замовити сайт</a></li>
                    @if(Auth::guest())
                        <li><a href="{{ url('/login') }}">Увійти</a></li>
                        <li><a href="{{ url('/register') }}">Реєстрація</a></li>
                    @else
                        <li><a href="#">{{ Auth::user()->name }}</a></li>
                        <li><a href="{{ url('/logout') }}">Вийти</a></li>
                    @endif
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-default visible-xs">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand hidden-xs" href="#">Web-Coders</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">

                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="/resume">Resume</a></li>
                        <li><a href="/portfolio">Portfolio</a></li>
                        <li><a href="/price">Price</a></li>
                        <li><a href="/faq">FAQ</a></li>
                        <li><a href="/order">Замовити сайт</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @show

    @yield('content')

    @section('footer')
        <div class="row panel-footer">
            <!--    <div class="col-md-3">
                    <ul>
                        <li>Hello</li>
                        <li>Hello</li>
                        <li>Hello</li>
                        <li>Hello</li>
                        <li>Hello</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li>Hello</li>
                        <li>Hello</li>
                        <li>Hello</li>
                        <li>Hello</li>
                        <li>Hello</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li>Hello</li>
                        <li>Hello</li>
                        <li>Hello</li>
                        <li>Hello</li>
                        <li>Hello</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li>Hello</li>
                        <li>Hello</li>
                        <li>Hello</li>
                        <li>Hello</li>
                        <li>Hello</li>
                    </ul>
                </div>-->
            <div class="row">
                <div class="col-md-6" id="social-icons">
                    <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-github-square" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
</div>
<script>
    $(document).ready(function () {
        var url = window.location;
        $('ul.nav a[href="' + url + '"]').parent().addClass('active');
        $('ul.nav a').filter(function () {
            return this.href == url;
        }).parent().addClass('active');
    });
</script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script>
    $('#ua').click(function () {
        document.cookie = "lang=UA";
        location.reload();
    });
    $('#ru').click(function () {
        document.cookie = "lang=RU";
        location.reload();
    });
    $('#usa').click(function () {
        document.cookie = "lang=US";
        location.reload();
    });
</script>
</body>
</html>
@show