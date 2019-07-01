<?php

namespace App\Http\Controllers\AdminDashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransaksiTopUp extends Controller
{
    public function  transaksitopupaov(Request $request){
        $transaksitopup = \App\TransaksiTopUpAOV::orderBy('tanggal_transaksi','desc')->paginate(10);
        return view('admin/pages/transaksitopupaov')->with('transaksi',$transaksitopup);
    }
}
