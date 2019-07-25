@extends('user.layouts.layouthome')
@section('title', 'Halaman Utama')
@section('content')

    <div class="col-md-6">
    <h2 align="center">Top Up</h2>
            <div class="form-style-11">
                <div class="inner-wrap">
                    <div><a href="{{route('topupaov')}}"><img src="/template/img/bg-img/aov.jpg" alt=""></a></div>

                </div>
            </div>
        <div class="form-style-11"><div class="inner-wrap">
                <div><a href="{{route('topupaov')}}"><img src="/template/img/bg-img/FF.jpg" alt=""></a></div>
            </div>
        </div>
    </div>

    <script src="/template/js/jquery/jquery-2.2.4.min.js"></script>
    <script src="/template/js/bootstrap/popper.min.js"></script>
    <script src="/template/js/bootstrap/bootstrap.min.js"></script>
    <script src="/template/js/plugins/plugins.js"></script>
    <script src="/template/js/active.js"></script>
@endsection