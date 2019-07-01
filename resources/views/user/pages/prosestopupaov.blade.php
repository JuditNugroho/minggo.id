@extends('user.layouts.layoutmenu')
@section('title', 'Top Up AOV')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-style-10">
                    <h1>TOP UP AOV<span>Transfer Pembayaran</span></h1>
                    <div class="section">Transfer Pembayaran</div>
                    <div class="inner-wrap">
                        <label style="background-color: yellow;line-height: 1.5;">Mohon hindari transfer ke rekening {{ $cara_pembayaran }} diatas jam 9 malam.
                            Anda bisa melakukan transfer kembali setelah jam 12 dini hari.</label>
                        <label>Tambahkan angka <b style="color: red;">{{$hargavalidasibaru}}</b> dibelakang jumlah transfer sebagai penanda transfer ini.</label>
                        <label>Pemilik rekening {{$cara_pembayaran}} bisa transfer ke rekening di bawah ini.</label>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Nama Bank : </label>
                            </div>
                            <div class="col-md-6">
                                @if($cara_pembayaran == "BCA")
                                    <label>Bank Central Asia (BCA)</label>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label>Nomor Rekening : </label>
                            </div>
                            <div class="col-md-6">
                                @if($cara_pembayaran == "BCA")
                                    <label>222 - 076 - 3920 </label>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label>Nama Pemilik Rekening : </label>
                            </div>
                            <div class="col-md-6">
                                @if($cara_pembayaran == "BCA")
                                    <label>GERALDO SURYA CHRISTIAN </label>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label>Jumlah Transfer </label>
                            </div>
                            <div class="col-md-6">
                                <label>Rp . {{ $harga}}</label>
                            </div>
                            <div class="col-md-6">
                                <label> Batas Transfer </label>
                            </div>
                            <div class="col-md-6">
                                <label> {{ $waktusekarang }}</label>
                            </div>
                        </div><br>
                        <label style="line-height: 1.5;text-align: justify;">
                            Setelah melakukan transfer. Segera kirim konfirmasi transfer pada tab "Konfirmasi Transfer".
                            Lengkapi pula dengan foto atau scan bukti transfer yang sudah dipersiapkan.
                            Proses transfer akan diproses selama 1 - 2 jam setelah dana masuk ke rekening kami.
                            Hubungi customer service apabila deposit belum masuk ke akun anda dalam 12 jam.
                        </label>
                        <a role="button" href="{{route('topupaov')}}" class="btn btn-warning" style="color: white;">Batalkan Pembayaran</a><br><br>
                        <a role="button" class="btn btn-primary" style="color: white;">Konfirmasi Pembayaran</a> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection