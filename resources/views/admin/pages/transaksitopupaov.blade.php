@extends('admin.layouts.layouttransaksitopupaov')
@section('title', 'Top Up')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Daftar Game</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>No</th>
                            <th>Id Player</th>
                            <th>Nilai Topup</th>
                            <th>Jumlah Transfer</th>
                            <th>Cara Pembayaran</th>
                            <th>Tanggal Transaksi</th>
                            <th>Bukti Pembayaran</th>
                            </thead>
                            @php $i=1; @endphp
                            <tbody>
                            @foreach($transaksi as $pembayaran)
                                <tr>
                                    <td>@php echo $i++; @endphp</td>
                                    <td>{{$pembayaran->id_player}}</td>
                                    <td>{{$pembayaran->nilaitopup}}</td>
                                    <td>{{$pembayaran->jumlahtransfer}}</td>
                                    <td>{{$pembayaran->cara_pembayaran}}</td>
                                    <td>{{$pembayaran->tanggal_transaksi}}</td>
                                    <td><a href="{{route('lhtfotoaov',$pembayaran->bukti_pembayaran)}}">Cek Pembayaran</a> </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $transaksi->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop