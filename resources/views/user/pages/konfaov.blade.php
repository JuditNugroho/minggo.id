@extends('user.layouts.layoutmenu')
@section('title', 'Top Up AOV')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="pembelian-tab" data-toggle="pill" href="#pembelian" role="tab" aria-controls="pembelian" aria-selected="true">Pembelian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="konfirmasipembelian-tab" data-toggle="pill" href="#konfirmasipembelian" role="tab" aria-controls="pills-profile" aria-selected="false">Konfirmasi Transfer</a>
                    </li>
                </ul>
                @if(session()->has('success'))
                    <div class="alert alert-success alert-icon alert-icon-border alert-dismissible" role="alert">
                        <!-- <div class="icon">
                            <span class="mdi mdi-check"></span>
                        </div> -->
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
                    <div class="tab-pane fade" id="pembelian" role="tabpanel" aria-labelledby="pembelian-tab">
                        <br>
                        <div class="col-md-12">
                            <div class="form-style-10">
                                <h1>TOP UP AOV<span>Pembelian Voucher AOV Murah</span></h1>
                                <form action="{{route('prosestopupaov')}}" method="GET">
                                    <div class="section"><span>1</span>Masukkan Player ID</div>
                                    <div class="inner-wrap">
                                        <a href="https://www.youtube.com/watch?v=7zNqy_XFHOw" style="color: blue;font-size: 15px;"> Cara Bind Akun Facebook</a>
                                        <br><br><label>Player ID Anda<input type="text" id="id_player"  name="id_player" />
                                            <a href="#"><i class="fas fa-question-circle" data-rel="popover" data-placement="right" data-content="<img src='/template/img/payment/idaov.png'>"></i></a>
                                        </label>
                                        <label>Untuk menemukan Player ID Anda, Ketuk ikon pengaturan, scroll ke bawah,
                                            temukan bagian "Umum", lalu Klik "Player ID". Contoh: "888347346221333".</label>
                                    </div>
                                    <div class="section"><span>2</span>Pilih Nominal Top Up</div>
                                    <div class="inner-wrap">
                                        <label>Pilih Dibawah ini
                                            <select class="form-control" id="hargavoucher">
                                                <option hidden>Pilih Salah Satu</option>
                                                @foreach($topup as $pembayaran)
                                                    <option value="{{$pembayaran->id}}">{{$pembayaran->list}} Voucher</option>
                                                @endforeach
                                            </select>
                                        </label>
                                        <input type="text" name="hargaview" id="hargaview" hidden/>
                                        <label>Harga<input type="text" name="hargaview2" id="hargaview2" disabled/></label>
                                    </div>
                                    <div class="section"><span>3</span>Cara Pembayaran</div>
                                    @php $cara_pembayaran=""; @endphp
                                    <div class="inner-wrap">
                                        <img src="/template/img/payment/bca.png"  id="bca" data-toggle="collapse" href="#transferbankbca" /><br>
                                        <div class="collapse" id="transferbankbca"><br>
                                            <div class="card card-body">
                                                <p>Transfer dengan JUMLAH YANG BENAR termasuk jumlah angka unik (jika ada).</p>
                                                <b> GAGAL MENGIKUTI PETUNJUK DI ATAS DAPAT MENYEBABKAN PEMBAYARAN TIDAK DI PROSES!</b><br>
                                                @php $cara_pembayaran = "BCA" @endphp
                                                <input type="submit"  class="btn btn-warning" style="color: white;" value="Saya Mengerti, Lanjutkan"><br>
                                            </div>
                                        </div><br>
                                        <img src="/template/img/payment/mandiri.png"  id="mandiri" data-toggle="collapse" href="#transfermandiri" /><br>
                                        <div class="collapse" id="transfermandiri"><br>
                                            <div class="card card-body">
                                                <p>Transfer dengan JUMLAH YANG BENAR termasuk jumlah angka unik (jika ada).</p>
                                                <b> GAGAL MENGIKUTI PETUNJUK DI ATAS DAPAT MENYEBABKAN PEMBAYARAN TIDAK DI PROSES!</b><br>
                                                <button type="button" class="btn btn-warning" style="color: white;">Saya Mengerti, Lanjutkan</button><br>
                                            </div>
                                        </div><br>
                                        <a class="btn btn-primary" role="button" id="bca" data-toggle="collapse" href="#pulsa">Via Pulsa</a>
                                        <div class="collapse" id="pulsa"><br>
                                            <div class="card card-body">
                                                <p>Kirim pulsa dengan JUMLAH YANG BENAR termasuk jumlah angka unik (jika ada).</p>
                                                <b> GAGAL MENGIKUTI PETUNJUK DI ATAS DAPAT MENYEBABKAN PEMBAYARAN TIDAK DI PROSES!</b><br>
                                                @php $cara_pembayaran = "pulsa" @endphp
                                                <input type="submit"  class="btn btn-warning" style="color: white;" value="Saya Mengerti, Lanjutkan"><br>
                                            </div>
                                        </div><br>
                                    </div>
                                    <input type="text" name="cara_pembayaran" id="cara_pembayaran" value="{{$cara_pembayaran}}" hidden/>
                                    <input type="text" name="id_topup" id="id_topup" hidden/>
                                    <input type="text" name="namatopup" id="namatopup" hidden/>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="konfirmasipembelian" role="tabpanel" aria-labelledby="konfirmasipembelian-tab">
                        <br>
                        <div class="form-style-10">
                            <h1>Konfirmasi Pembayaran<span>Halaman Konfirmasi Pembayaran AOV</span></h1>
                            <form action="{{route('konfirmasipembayaranaov')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="section"><span>1</span>Masukkan Player ID</div>
                                <div class="inner-wrap">
                                    <label>Player ID Anda<input type="text" name="id_player" id="id_player" required/>
                                        <a href="#"><i class="fas fa-question-circle" data-rel="popover" data-placement="right" data-content="<img src='/template/img/payment/idaov.png'>"></i></a>
                                    </label>
                                    <label>Untuk menemukan Player ID Anda, Ketuk ikon pengaturan, scroll ke bawah,
                                        temukan bagian "Umum", lalu Klik "Player ID". Contoh: "888347346221333".</label>
                                </div>
                                <div class="section"><span>2</span>Pilih Nominal Top Up</div>
                                <div class="inner-wrap">
                                    <label>Pilih Dibawah ini
                                        <select class="form-control" id="nilaitopup" name="nilaitopup">
                                            <option hidden>Pilih Salah Satu</option>
                                            @foreach($topup as $pembayaran)
                                                <option value="{{$pembayaran->harga}}">{{$pembayaran->nama}}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>
                                <div class="section"><span>3</span>Jumlah Nominal Transfer/Kirim Pulsa</div>
                                <div class="inner-wrap">
                                    <label>Masukkan jumlah rupiah yang anda transfer <input type="text" id="jumlahtransfer" name="jumlahtransfer" required />
                                    </label>
                                </div>
                                <div class="section"><span>4</span>Cara Pembayaran</div>
                                <div class="inner-wrap">
                                    <label>Pilih Dibawah ini
                                        <select class="form-control" id="cara_pembayaran" name="cara_pembayaran">
                                            <option value="transfer">Via Transfer Bank</option>
                                            <option value="pulsa">Via Pulsa</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="section"><span>5</span>Upload Bukti Pembayaran</div>
                                <div class="inner-wrap">
                                    <label>Bukti Transfer Pembayaran <br>
                                        <input  id="bukti"  name="bukti" type="file" />
                                    </label>
                                </div>
                                <input type="submit" class="btn btn-primary" value="Kirim" />
                            </form>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('[data-rel=popover]').popover({
                html: true,
                trigger: "hover"
            });
        })
    </script>
    <script type="text/javascript">
        $('#hargavoucher').on('change', function (e) {
            var id = e.target.value;
            $.get('/hitungharga/aov/' + id, function (data) {
                console.log(data);
                $('#hargaview').val(data.harga);
                $('#hargaview2').val(data.harga);
                $('#id_topup').val(data.id);
                $('#namatopup').val(data.nama);
            });
        });
    </script>
@endsection
