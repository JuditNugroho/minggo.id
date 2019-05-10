@extends('admin.layouts.layouttopup')
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
                                        <a href="{{route('topupadmindashboard', $game['id'])}}"><i class="fa fa-edit" style="font-size:24px;color:red"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop