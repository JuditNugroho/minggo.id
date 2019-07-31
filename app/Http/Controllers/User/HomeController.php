<?php

namespace App\Http\Controllers\User;

use App\Games;
use App\Http\Controllers\Controller;
use App\TierBoosterAov;
use App\TierBoosterFF;
use App\TierBoosterPUBGM;
use App\TopUp;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function  index(Request $request){
        return view('user/pages/home');
    }
    public function  topupaov(Request $request){
        $topup = TopUp::where('id_games','aov')->orderBy('list','asc')->get();
        return view('user/pages/topupaov')->with('topup',$topup);
    }
    public function  konfaov(Request $request){
        $topup = TopUp::where('id_games','aov')->orderBy('list','asc')->get();
        return view('user/pages/konfaov')->with('topup',$topup);
    }
    public function  prosestopupaov(Request $request){
        $waktusekarang = Carbon::now();
        $hargavalidasi = $waktusekarang->format('d');
        $hargarandom = rand(1,9);
        $hargasekarang = $request->input('hargaview');
        $cara_pembayaran = $request->input('cara_pembayaran');
        $id = $request->input('id_player');
        $nama = $request->input('namatopup');
        if ($cara_pembayaran == "pulsa"){
            $hargasekarang = ceil((int) $hargasekarang * 1.2);
        }
        $hargasekarangbaru = substr($hargasekarang,0,-3);
        $hargavalidasibaru = $hargavalidasi.$hargarandom;
        $hargabaru =  number_format(($hargasekarangbaru.$hargavalidasi.$hargarandom),0,".",".");
        $waktu1jam = $waktusekarang->addHours(2);
        return view('user/pages/prosestopupaov')->with('harga',$hargabaru)
            ->with('cara_pembayaran',$request->input('cara_pembayaran'))
            ->with('hargavalidasibaru',$hargavalidasibaru)
            ->with('id',$id)
            ->with('nama',$nama)
            ->with('waktusekarang',$waktu1jam);
    }
    public function  topupff(Request $request){
        $games = Games::paginate(10);
        return view('user/topupff',compact(['games']));
    }
    public function  tierbosteraov(Request $request){
        return view('user/pages/tierboosteraov')
            ->with('tierboosters',TierBoosterAov::all());
    }
    public function  tierbosterff(Request $request){
        return view('user/pages/tierboosterff')
            ->with('tierboosters',TierBoosterFF::all());
    }
    public function  tierbosterpubgm(Request $request){
        return view('user/pages/tierboosterpubgm')
            ->with('tierboosters',TierBoosterPUBGM::all());
    }
}
