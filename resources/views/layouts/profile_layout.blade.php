<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/flat-ui.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav-menu.css">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Material CSS -->
    <link rel="stylesheet" href="css/material-kit.css" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <!-- Line Icons CSS -->
    <link rel="stylesheet" href="fonts/line-icons/line-icons.css" type="text/css">
    <!-- Line Icons CSS -->
    <link rel="stylesheet" href="fonts/line-icons/line-icons.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="css/responsive.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
</head>
<body>
<!-- Header Section Start -->
<div class="header">
    <nav class="navbar navbar-default main-navigation" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- Stat Toggle Nav Link For Mobiles -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <!-- End Toggle Nav Link For Mobiles -->
                <a class="navbar-brand logo" href="{{ route('index') }}"><img src="assets/img/logo.png" alt=""></a>
            </div>
            <!-- brand and toggle menu for mobile End -->

            <!-- Navbar Start -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @guest


                        <li><a href="{{ route('login') }}"><i class="lnr lnr-enter"></i> Login</a></li>
                        <li><a href="{{ route('register') }}"><i class="lnr lnr-user"></i> Signup</a></li>
                        <li class="postadd">
                            <a class="btn btn-danger btn-post" href="post-ads.html"><span class="fa fa-plus-circle"></span> Post an Ad</a>
                        </li>
                    @else
                        <li><a href=""> {{ Auth::user()->name }} </a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        <li class="postadd">
                            <a class="btn btn-danger btn-post" href="{{ route('post_ads') }}l"><span class="fa fa-plus-circle"></span> Post an Ad</a>
                        </li>
                    @endguest
                </ul>
            </div>
            <!-- Navbar End -->
        </div>
    </nav>

</div>
<!--end header    -->

<section class="user-profile section card">
    <div class="container">
        @if(session('status'))
        <h1 class="text-right">{{session()->get()}} </h1>
    @endif
        <div class="row">

            <div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
                <div class="sidebar">
                    <!-- User Widget -->
                    <div class="widget user-dashboard-profile">
                        <!-- User Image -->
                        <div class="profile-thumb">
                            <img src="image/user.jpg">
                           <br/>
                            <h3 class="text-left">{{auth()->user()->first_name}}</h3>
                            <br/>
                            <form enctype="multipart/form-data" action="/picture/" method="POST">
                                <div class="form-group choose-file">
                                    <i class="fa fa-user fa-2x"></i>
                                    <input type="file" class="form-control-file d-inline" id="input-file">
                                </div>
                            </form>
                        </div>
                        <!-- User Name -->
                        <h5 class="text-center"></h5>

                    </div>
                    <!-- Dashboard Links -->
                    <div class="widget user-dashboard-menu">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="{{ route('ads') }}"><i class="fa fa-user"></i> My Ads</a></li>
                            <li class="list-group-item">
                                <a href=""><i class="fa fa-bookmark-o"></i> Statistic <span></span></a>
                            </li>
                            <li class="list-group-item">
                                <a href=""><i class="fa fa-file-archive-o"></i> Inbox<span></span></a>
                            </li>
                            <li class="list-group-item">
                                <a href=" {{ route('profile')}}"><i class="fa fa-bolt"></i> Settings<span></span></a>
                            </li>
                            <li class="list-group-item">
                                <a href="logout.html"><i class="fa fa-cog"></i> Logout</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            @yield('content')
        </div>
    </div>

</section>


<script type="text/javascript" src="js/jquery-min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/flat-ui.min.js"></script>
<script type="text/javascript" src="js/material.min.js"></script>
<script type="text/javascript" src="js/material-kit.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="js/bootstrap-select.min.js"></script>
</body>
</html>