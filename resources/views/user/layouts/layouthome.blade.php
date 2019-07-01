<!DOCTYPE html>
<html>
<head>
    @include('user.includes.head')
</head>
<body>
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <header class="header-area wow fadeInDown" data-wow-delay="500ms">
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <div class="logo">
                            <a href="{{route('home')}}"><img src="/template/img/core-img/logo.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="egames-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <nav class="classy-navbar justify-content-between" id="egamesNav">
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
                        <div class="classy-menu">
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="#">Topup</a>
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
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="hero-area">
        <div class="hero-post-slides owl-carousel">
            <div class="single-slide bg-img bg-overlay" style="background-image: url(/template/img/bg-img/aov.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="blog-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="400ms">Arena Of Valor</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Mobile Arena yang sekarang dikenal AOV ini merupakan salah satu game MOBA (Multiplayer Online Battle Arena) yang saat ini menjadi populer diantara para gamer Indonesia. Bahkan game AOV telah diunduh lebih dari 1 jutaan dan menjadi game MOBA nomor satu untuk tingkat Asia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide bg-img bg-overlay" style="background-image: url(/template/img/bg-img/FF.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="blog-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="400ms">FreeFire</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">
                                    Free Fire adalah game atau permainan peperangan beraliran Battle Royale dan TPS (Third Person Shooter) yang mempertemukan 50 sampai 52 pemain di dalam satu map yang luas, dimana setiap pemain diharuskan agar saling membunuh dan menjadi satu-satunya orang yang bisa bertahan hidup untuk menjadi pemenang.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="games-area section-padding-100-0">
        @yield('content')
    </div>

    <footer class="footer-area">
        <div class="copywrite-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Copywrite Text -->
                        <p class="copywrite-text" align="center" style="color: white;">
                            Copyright  &copy; by Minggo.id <script>document.write(new Date().getFullYear());</script> </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
</body>