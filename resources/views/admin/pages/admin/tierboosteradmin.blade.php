@extends('admin.layouts.layouttierbooster')
@section('title', 'Tier Booster Super Admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Daftar Tier Booster</h4>
                </div>
                <div class="card-body">
                    <a class="btn btn-primary" href="{{route('inserttierdashboard', $namagames)}}" role="button">Tambah Data</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Rank</th>
                            <th>Tier</th>
                            <th>Harga</th>
                            <th>Action</th>
                            </thead>
                            @php $i=1; @endphp
                            <tbody>
                            @foreach($tierbooster as $isi)
                                @if($isi['id_games'] == $namagames)
                                    <tr>
                                        <td>@php echo $i++; @endphp</td>
                                        <td>@php echo $isi['nama'] @endphp</td>
                                        <td>@php echo $isi['rank'] @endphp</td>
                                        <td>@php echo $isi['tier'] @endphp</td>
                                        <td>@php echo $isi['harga'] @endphp</td>
                                        <td>
                                            <a href="{{route('updatetierdashboard',[$isi['id'],$namagames])}}"><i class="fa fa-edit" style="font-size:24px;color:red"></i></a>
                                            <a onclick="return confirm('Yakin ingin menghapus data?')" href="{{route('deletetierdashboard',[$isi['id'],$namagames])}}" style="margin-left: 10px;"><i class="fa fa-trash" style="font-size:18px;color: red;"></i></a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                        {{ $tierbooster->links() }}
                    </div>
                    <a class="btn btn-primary" href="{{route('tierboosterdashboard')}}" role="button">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@stop