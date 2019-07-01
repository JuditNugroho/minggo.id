@extends('user.layouts.layoutmenu')
@section('title', 'Tier Booster AOV')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pembelian-tab" data-toggle="pill" href="#pembelian" role="tab" aria-controls="pembelian" aria-selected="true">Pembelian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="konfirmasipembelian-tab" data-toggle="pill" href="#konfirmasipembelian" role="tab" aria-controls="pills-profile" aria-selected="false">Konfirmasi Transfer</a>
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
                    <div class="tab-pane fade show active" id="pembelian" role="tabpanel" aria-labelledby="pembelian-tab">
                        <div class="row">
                                <div class="col-md-6">
                                    <h4>Rank Saat Ini</h4>
                                    <img src="{{asset('template/img/core-img/diamond.jpg')}}" width="50%"><br>
                                    <label>Rank Saat Ini</label><br>
                                    <select >
                                        <option >Warrior</option>
                                    </select><br>
                                    <label>Tier Saat Ini</label><br>
                                    <select >
                                        <option >Warrior</option>
                                    </select>
                                    <br>
                                    <label>Bintang Saat Ini</label><br>
                                    <select >
                                        <option >Warrior</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <h4>Rank Diinginkan</h4>
                                    <img src="{{asset('template/img/core-img/diamond.jpg')}}" width="50%"><br>
                                    <label>Rank Saat Ini</label><br>
                                    <select >
                                        <option >Warrior</option>
                                    </select><br>
                                    <label>Tier Saat Ini</label><br>
                                    <select >
                                        <option >Warrior</option>
                                    </select>
                                    <br>
                                    <label>Bintang Saat Ini</label><br>
                                    <select >
                                        <option >Warrior</option>
                                    </select>
                                </div>
                        </div><br><br><br>
                    </div>
                    <div class="tab-pane fade show " id="konfirmasipembelian" role="tabpanel" aria-labelledby="konfirmasipembelian-tab">
                        B
                    </div>
                </div>
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
@endsection