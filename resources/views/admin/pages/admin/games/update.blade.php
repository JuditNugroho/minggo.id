@extends('admin.layouts.layouttopup')
@section('title', 'Update Game Super Admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Game</h4>
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
                    <form method="POST" action="{{route('prosesupdategamesdashboard')}}">
                        @csrf
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" id="id2" name="id2" value="{{$games->id}}" disabled>
                            <input type="text" class="form-control" id="id" name="id" value="{{$games->id}}" hidden>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{$games->nama}}" required>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            <div class="col-md-2">
                                <a class="btn btn-primary" href="{{route('gamesdashboard')}}" role="button">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop