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
                    <!-- Logo Area -->
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="/iconweb/fileminggo.png" alt=""></a>
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
<!-- ##### Games Area Start ##### -->
<div class="games-area section-padding-100-0">
    @yield('content')
</div>
<!-- ##### Games Area End ##### -->
<!-- ##### Games Area End ##### -->
<footer class="footer-area">
    <div class="copywrite-content">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <p class="copywrite-text" align="center" style="color: black;">
                        Copyright  &copy; by Minggo.id <script>document.write(new Date().getFullYear());</script> </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>
<script src="/template/js/bootstrap/popper.min.js"></script>
<script src="/template/js/bootstrap/bootstrap.min.js"></script>
<script src="/template/js/plugins/plugins.js"></script>
<script src="/template/js/active.js"></script>
</body>
</html>