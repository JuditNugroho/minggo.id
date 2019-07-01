@extends('user.layouts.layouthome')
@section('title', 'Halaman Utama')
@section('content')
    <h2 align="center">Top Up</h2>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="single-games-area text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <a href="{{route('topupaov')}}"><img src="/template/img/bg-img/aov.jpg" alt=""></a>
                </div>
            </div>
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
            <div class="col-12 col-md-4">
                <div class="single-games-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <a href="{{route('tierbosteraov')}}"><img src="/template/img/bg-img/FF.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <script src="/template/js/jquery/jquery-2.2.4.min.js"></script>
    <script src="/template/js/bootstrap/popper.min.js"></script>
    <script src="/template/js/bootstrap/bootstrap.min.js"></script>
    <script src="/template/js/plugins/plugins.js"></script>
    <script src="/template/js/active.js"></script>
@endsection