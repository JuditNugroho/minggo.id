@extends('admin.layouts.layouttopup')
@section('title', 'Top Up Super Admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Daftar Top Up</h4>
                </div>
                <div class="card-body">
                    <a class="btn btn-primary" href="{{route('inserttopupdashboard', $namagames)}}" role="button">Tambah Data</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>No</th>
                            <th>Nama</th>
                            <th>List</th>
                            <th>Harga</th>
                            <th>Cara Pembayaran</th>
                            <th>Action</th>
                            </thead>
                            @php $i=1; @endphp
                            <tbody>
                            @foreach($topup as $isi)
                                @if($isi['id_games'] == $namagames)
                                <tr>
                                    <td>@php echo $i++; @endphp</td>
                                    <td>@php echo $isi['nama'] @endphp</td>
                                    @if($namagames == "aov")
                                        <td>@php echo $isi['list'] @endphp VOC</td>
                                    @elseif($namagames == "FF")
                                        <td>@php echo $isi['list'] @endphp Diamond</td>
                                    @endif
                                    <td>@php echo $isi['harga'] @endphp</td>
                                    <td>@php echo $isi['payment'] @endphp</td>
                                    <td>
                                        <a href="{{route('updatetopupdashboard',[$isi['id'],$namagames])}}"><i class="fa fa-edit" style="font-size:24px;color:red"></i></a>
                                        <a onclick="return confirm('Yakin ingin menghapus data?')" href="{{route('deletetopupdashboard',[$isi['id'],$namagames])}}" style="margin-left: 10px;"><i class="fa fa-trash" style="font-size:18px;color: red;"></i></a>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <a class="btn btn-primary" href="{{route('topupdashboard', $namagames)}}" role="button">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@stop