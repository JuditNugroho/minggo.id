<!DOCTYPE html>
<html>
<head>
    @include('admin.includes.head')
</head>
<body>
<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="/iconweb/logoiconweb.png">
                </div>
            </a>
            <a href="#" class="simple-text logo-normal">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <a href="./dashboard.html">
                        <i class="nc-icon nc-bank"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('topupdashboard')}}">
                        <i class="nc-icon nc-diamond"></i>
                        <p>TopUp</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{route('gamesdashboard')}}">
                        <i class="nc-icon nc-controller-modern"></i>
                        <p>Game</p>
                    </a>
                </li>
                <li>
                    <a href="./user.html">
                        <i class="nc-icon nc-single-02"></i>
                        <p>User</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('tierboosterdashboard')}}">
                        <i class="nc-icon nc-spaceship"></i>
                        <p>Tier Booster</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">Top - Up || {{ config('app.name', 'Laravel') }}</a>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>