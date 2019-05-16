@extends('admin.layouts.layoutgames')
@section('title', 'Games Super Admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Daftar Game</h4>
                </div>
                <div class="card-body">
                    <a class="btn btn-primary" href="{{route('insertgamesdashboard')}}" role="button">Tambah Data</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Action</th>
                            </thead>
                            @php $i=1; @endphp
                            <tbody>
                            @foreach($games as $game)
                                <tr>
                                    <td>@php echo $i++; @endphp</td>
                                    <td>{{ $game['nama'] }}</td>
                                    <td>
                                        <a href="{{route('updategamesdashboard', $game['id'])}}"><i class="fa fa-edit" style="font-size:24px;color:red"></i></a>
                                        <a onclick="return confirm('Yakin ingin menghapus data?')" href="{{route('deletegamesdashboard',$game['id'])}}" style="margin-left: 10px;"><i class="fa fa-trash" style="font-size:18px;color: red;"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $games->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop