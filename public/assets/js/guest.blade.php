<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sofrecom</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/sofrecom.png">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
        integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css"
        integrity="sha512-KRrxEp/6rgIme11XXeYvYRYY/x6XPGwk0RsIC6PyMRc072vj2tcjBzFmn939xzjeDhj0aDO7TDMd7Rbz3OEuBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('assets/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icomoon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">



    @livewireStyles
</head>

<body class="home-page home-01 " style="background: white">



    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-number">
                            <p><i class="fa fa-phone-square"></i>0604956676</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img style="width:60px;height:60px"
                            src="{{ asset('assets/images/sofrecom.png') }}" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        {{-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li> --}}

                        @if (Route::has('login'))
                            @auth
                                @if (Auth::user()->type === 'ADM')
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My account
                                            {{ Auth::user()->name }}<i class="fa fa-angle-down"></i></a>
                                        <a href="{{ route('admin.dashboard') }}">Dahboard</a>
                                        <a href="{{ route('admin.competences') }}">Gestion Competences</a>
                                        <a href="{{ route('admin.projets') }}">Gestion Projets</a>
                                    </li>
                                    <li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf

                                        </form>
                                    </li>
                                @else
                                    <li class="dropdown">

                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My account
                                            {{ Auth::user()->name }}<i class="fa fa-angle-down"></i></a>

                                    </li>
                                    <li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf

                                        </form>
                                    </li>


                                @endif
                            @else
                                {{-- <li class="menu-item" ><a title="Register or Login" href="{{ route('login') }}">Se connecter</a></li>
									<li class="menu-item" ><a title="Register or Login" href="{{ route('register') }}">S'inscrire</a></li> --}}
                                <li class="dopdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Register <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    </ul>
                                </li>

                            @endif

                            @endif


                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!--/.container-->
            </nav>
            <!--/nav-->

        </header>
        <!--/header-->

        {{ $slot }}


        {{-- <script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"
	 integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" 
	 crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js"
	  integrity="sha512-EnXkkBUGl2gBm/EIZEgwWpQNavsnBbeMtjklwAa7jLj60mJk932aqzXFmdPKCG6ge/i8iOCK0Uwl1Qp+S0zowg=="
	  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	  <script src="https://cdn.tiny.cloud/1/n8cijm3act34yo1jn3xhrtznzrrspkkvux3z7x9xyldv6nzk/tinymce/5/tinymce.min.js"
	   referrerpolicy="origin"></script> --}}
        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.isotope.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>


        @livewireScripts

        @stack('scripts')
    </body>

    </html>
