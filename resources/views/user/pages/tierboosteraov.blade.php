@extends('user.layouts.layoutmenu')
@section('title', 'Tier Booster AOV')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pembelian-tab" data-toggle="pill" href="#pembelian" role="tab" aria-controls="pembelian" aria-selected="true">Pembelian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="konfirmasipembelian-tab" data-toggle="pill" href="#konfirmasipembelian" role="tab" aria-controls="pills-profile" aria-selected="false">Konfirmasi Transfer</a>
                    </li>
                </ul>
                @if(session()->has('success'))
                    <div class="alert alert-success alert-icon alert-icon-border alert-dismissible" role="alert">
                        <div class="message">
                            <span class="mdi mdi-check"></span>
                            <button class="close" data-dismiss="alert">
                                <span class="mdi mdi-close" aria-hidden="true"></span>
                            </button>
                            {{ session()->get('success') }}
                        </div>
                    </div>
                @endif
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pembelian" role="tabpanel" aria-labelledby="pembelian-tab">
                        <div class="row">
                                <div class="col-md-6">
                                    <h4>Rank Saat Ini</h4>
                                    <select name="rankawal" id="rankawal">
                                        <option hidden value="salah">-- Pilih Salah Satu --</option>
                                        @foreach($tierboosters as $tierbooster)
                                        <option value="{{ $tierbooster->id }}">{{ $tierbooster->nama }}</option>
                                        @endforeach
                                    </select><br>
                                    <br><img src="{{asset('template/img/core-img/diamond.jpg')}}" width="50%"><br>
                                </div>
                                <div class="col-md-6">
                                    <h4>Rank Diinginkan</h4>
                                    <select name="rankakhir" id="rankakhir">
                                        <option hidden value="salah">-- Pilih Salah Satu --</option>
                                    </select><br>
                                    <br>
                                    <img src="{{asset('template/img/core-img/diamond.jpg')}}" width="50%"><br>
                                </div>
                        </div><br><br><br>
                    </div>
                    <div class="tab-pane fade show " id="konfirmasipembelian" role="tabpanel" aria-labelledby="konfirmasipembelian-tab">
                        B
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <h4>Total Harga</h4>
        </div>
        <div class="row">
            <input type="text" name="totalharga" id="totalharga"  disabled>
        </div>
        <br>
    </div>
    <script>
        $(document).ready(function() {
            $('[data-rel=popover]').popover({
                html: true,
                trigger: "hover"
            });
        })
        $('#rankawal').on('change', function (rankawal) {
            var validasirankawal = rankawal.target.value;
            var validrankakhir = $('#rankakhir');
            validrankakhir.empty();
            $.get('/validasirankakhir/' + validasirankawal, function (data) {
                validrankakhir.append('<option value="salah" hidden>Pilih Salah Satu </option>');
                $.each(data, function (index,rank) {
                    validrankakhir.append('<option value=' + rank.id + '>' + rank.nama + '</option>');
                });
                $('#rankakhir').on('change', function (rankakhir) {
                    nilairankakhir = rankakhir.target.value;
                    $.get('/hitung/aov/'+validasirankawal+'/'+nilairankakhir+'/aov/', function (data) {
                        document.getElementById('totalharga').value =  data;
                    });
                });
            });
        });
    </script>
@endsection