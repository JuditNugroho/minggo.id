@extends('admin.layouts.layouttopup')
@section('title', 'Insert Top Up Super Admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Insert Top Up</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{route('prosesinsertsuptopupdashboard')}}">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama topup">
                        </div>
                        <div class="form-group">
                            <label for="list">List</label>
                            <input type="number" class="form-control" id="list" name="list" placeholder="Masukkan list topup (nominalnya saja) ">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan harga topup">
                        </div>
                        <div class="form-group">
                            <label for="payment">Cara Pembayaran</label>
                            <select id="payment" class="form-control" name="payment">
                                <option value="normal">Pembayaran Normal</option>
                                <option value="pulsa">Pembayaran Via Pulsa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_games">Daftar Game</label>
                            @foreach($games as $game)
                                @if($game['id'] == $namagames)
                                <input type="text" class="form-control" id="id_games2" name="id_games2" value="{{$game['nama']}}" disabled>
                                <input type="text" class="form-control" id="id_games" name="id_games" value="{{$namagames}}" hidden>
                                @endif
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            <div class="col-md-2">
                                <a class="btn btn-primary" href="{{route('topupadmindashboard', $namagames)}}" role="button">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop