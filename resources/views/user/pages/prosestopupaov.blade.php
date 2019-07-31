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
                        <label style="background-color: yellow;line-height: 1.5;">Mohon hindari transfer
                            @if($cara_pembayaran == "pulsa")
                                pulsa
                            @else
                                ke rekening {{ $cara_pembayaran }}
                            @endif diatas jam 9 malam.
                            Anda bisa melakukan transfer kembali setelah jam 12 dini hari.</label>
                        <label>Tambahkan angka <b style="color: red;">{{$hargavalidasibaru}}</b> dibelakang jumlah transfer sebagai penanda transfer ini.</label>
                        <label>Pemilik
                            @if($cara_pembayaran == "pulsa")
                                bisa mengirim pulsa ke nomor handphone
                            @else
                                rekening {{$cara_pembayaran}} bisa transfer ke rekening
                            @endif     di bawah ini.</label>
                        <div class="row">
                            <div class="col-md-6">
                                @if($cara_pembayaran != "pulsa")
                                    <label>Nama Bank : </label>
                                @endif
                            </div>
                            <div class="col-md-6">
                                @if($cara_pembayaran == "BCA")
                                    <label>Bank Central Asia (BCA)</label>
                                @endif
                            </div>
                            <div class="col-md-6">
                                @if($cara_pembayaran == "pulsa")
                                    <label>Nomor Handphone : </label>
                                @else
                                    <label>Nomor Rekening : </label>
                                @endif
                            </div>
                            <div class="col-md-6">
                                @if($cara_pembayaran == "pulsa")
                                    <label>082 121 218 439 (Telkomsel) </label>
                                    <label>087 834 609 483 (XL) </label>
                                    <label>087 834 609 483 (AXIS) </label>
                                @elseif($cara_pembayaran == "BCA")
                                    <label>222 - 076 - 3920 </label>
                                @endif
                            </div>
                            <div class="col-md-6">
                                @if($cara_pembayaran == "pulsa")
                                    <label>Nama Pemilik Nomor : </label>
                                @else
                                    <label>Nama Pemilik Rekening : </label>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label>GERALDO SURYA CHRISTIAN </label>
                            </div>
                            <div class="col-md-6">
                                @if($cara_pembayaran == "pulsa")
                                    <label>Jumlah Kirim Pulsa</label>
                                @else
                                    <label>Jumlah Transfer </label>
                                @endif
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
                        <a role="button" href="{{ route('konfaov') }}" class="btn btn-primary" style="color: white;">Konfirmasi Pembayaran</a> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
