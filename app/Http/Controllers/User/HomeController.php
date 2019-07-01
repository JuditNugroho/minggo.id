<?php

namespace App\Http\Controllers\User;

use App\TopUp;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function  index(Request $request){
        return view('user/pages/home');
    }
    public function  topupaov(Request $request){
        $topup = TopUp::where('id_games','aov')->orderBy('list','asc')->get();
        return view('user/pages/topupaov')->with('topup',$topup);
    }
    public function  prosestopupaov(Request $request){
        $waktusekarang = Carbon::now();
        $hargavalidasi = $waktusekarang->format('d');
        $hargarandom = rand(1,9);
        $hargasekarang = $request->input('hargaview');
        $hargasekarangbaru = substr($hargasekarang,0,-3);
        $hargavalidasibaru = $hargavalidasi.$hargarandom;
        $hargabaru =  number_format(($hargasekarangbaru.$hargavalidasi.$hargarandom),0,".",".");
        $waktu1jam = $waktusekarang->addHours(2);
        return view('user/pages/prosestopupaov')->with('harga',$hargabaru)
            ->with('cara_pembayaran',$request->input('cara_pembayaran'))
            ->with('hargavalidasibaru',$hargavalidasibaru)
            ->with('waktusekarang',$waktu1jam);
    }
    public function  topupff(Request $request){
        $games = \App\Games::paginate(10);
        return view('user/topupff',compact(['games']));
    }
    public function  tierbosteraov(Request $request){
        return view('user/pages/tierboosteraov');
    }
    public function  tierbosterff(Request $request){
        $games = \App\Games::paginate(10);
        return view('user/tierbosterff',compact(['games']));
    }
}
