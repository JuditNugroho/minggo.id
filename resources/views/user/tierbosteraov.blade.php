<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Egames - Gaming Magazine Template</title>

    <!-- Favicon -->
    <link rel="icon" href="/template/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/template/style.css">

</head>

<body>
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area wow fadeInDown" data-wow-delay="500ms">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 d-flex align-items-center justify-content-between">
                    <!-- Logo Area -->
                    <div class="logo">
                        <a href="localhost:7000"><img src="/template/img/core-img/logo.png" alt=""></a>
                    </div>

                    <!-- Search & Login Area -->
                    <div class="search-login-area d-flex align-items-center">
                        <!-- Top Search Area -->
                        <!-- Top Search Area -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="egames-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="egamesNav">

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="localhost:7000">Home</a></li>
                                <li><a href="game-review.html">Topup</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('topupaov')}}">Arena of Valor</a></li>
                                        <li><a href="{{route('topupff')}}">Free Fire</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Tier Boster</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('tierbosteraov')}}">Arena Of Valor</a></li>
                                        <li><a href="{{route('tierbosterff')}}">Free Fire</a></li>
                                    </ul>
                                </li>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->
<!-- ##### Games Area Start ##### -->
<div class="games-area section-padding-100-0">
    <h2 align="center">Top UP</h2>
    <div class="container">
        <div class="row">

            <!-- Single Games Area -->
            <div class="col-12 col-md-6">
                <div class="single-games-area text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <a href="{{route('topupaov')}}"><img src="/template/img/bg-img/aov.jpg" alt=""></a>
                </div>
            </div>

            <!-- Single Games Area -->
            <div class="col-12 col-md-4">
                <div class="single-games-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">

                    <a href="{{route('topupff')}}"><img src="/template/img/bg-img/FF.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <h2 align="center">Tier Boster</h2>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="single-games-area text-center mb-100 wow fadeInUp" data-wow-delay="300ms">

                    <a href="{{route('tierbosteraov')}}"><img src="/template/img/bg-img/aov.jpg" alt=""></a>
                </div>
            </div>

            <!-- Single Games Area -->
            <div class="col-12 col-md-4">
                <div class="single-games-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">

                    <a href="{{route('tierbosteraov')}}"><img src="/template/img/bg-img/FF.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Games Area End ##### -->
<footer class="footer-area">
    <!-- Copywrite Area -->
    <div class="copywrite-content">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <p class="copywrite-text" align="center">
                        Copyright  &copy; by Minggo.id <script>document.write(new Date().getFullYear());</script> </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="/template/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="/template/js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="/template/js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="/template/js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="/template/js/active.js"></script>
</body>

</html>