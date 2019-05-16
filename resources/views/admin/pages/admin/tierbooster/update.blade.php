@extends('admin.layouts.layouttierbooster')
@section('title', 'Update Tier Booster Super Admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Tier Booster</h4>
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
                    <form method="POST" action="{{route('prosesupdatetierdashboard')}}">
                        @csrf
                        <div class="form-group">
                            <label for="id2">ID</label>
                            <input type="text" class="form-control" id="id2" name="id2" value="{{$tierbooster->id}}" disabled>
                            <input type="text" class="form-control" id="id" name="id" value="{{$tierbooster->id}}" hidden>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{$tierbooster->nama}}" required>
                        </div>
                        <div class="form-group">
                            <label for="rank">Rank</label>
                            <input type="number" class="form-control" id="rank" name="rank" value="{{$tierbooster->rank}}" required>
                        </div>
                        <div class="form-group">
                            <label for="tier">Tier</label>
                            <input type="text" class="form-control" id="tier" name="tier" value="{{$tierbooster->tier}}" required>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" value="{{$tierbooster->harga}}" required>
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
                                <a class="btn btn-primary" href="{{route('tierboosteradmindashboard', $namagames)}}" role="button">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop