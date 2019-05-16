@extends('admin.layouts.layouttierbooster')
@section('title', 'Tier Booster')
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
                            <th>Nama</th>
                            <th>Action</th>
                            </thead>
                            @php $i=1; @endphp
                            <tbody>
                            @foreach($games as $game)
                                <tr>
                                    <td>@php echo $i++; @endphp</td>
                                    <td>@php echo $game['nama'] @endphp</td>
                                    <td>
                                        <a href="{{route('tierboosteradmindashboard', $game['id'])}}"><i class="fa fa-edit" style="font-size:24px;color:red"></i></a>
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