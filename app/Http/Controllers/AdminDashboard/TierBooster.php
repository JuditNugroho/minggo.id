<?php

namespace App\Http\Controllers\AdminDashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TierBooster extends Controller
{
    public function  index(Request $request){
        $games = \App\Games::paginate(10);
        return view('admin/pages/tierbooster',compact(['games']));
    }
    public function lihattieradmin(Request $request,$idgames){
        $namagames= $idgames;
        $tierbooster = \App\TierBooster::where('id_games', $idgames)->orderBy('rank', 'asc')->orderBy('tier','desc')->paginate(10);
        return view('admin/pages/admin/tierboosteradmin',compact(['tierbooster','namagames']));
    }
    public function deletetieradmin(Request $request,$id, $idgames){
        $namagames= $idgames;
        $tierbooster = \App\TierBooster::find($id);
        if(isset($tierbooster)){
            $tierbooster->delete();
        }
        return redirect()->route('tierboosteradmindashboard', $namagames);
    }
    public function inserttieradmin(Request $request, $idgames){
        $namagames= $idgames;
        $games = \App\Games::where('id', $idgames)->get();
        return view('admin/pages/admin/tierbooster/insert',compact(['namagames','games']));
    }
    public function prosesinserttieradmin(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'rank' => 'required',
            'tier' => 'required',
            'harga' => 'required',
            'id_games' => 'required'
        ]);
        $tierbooster = new \App\TierBooster();
        $tierbooster->nama = $request->nama;
        $tierbooster->rank = $request->rank;
        $tierbooster->tier = $request->tier;
        $tierbooster->harga = $request->harga;
        $tierbooster->id_games = $request->id_games;
        $tierbooster->save();
        return redirect()->route('tierboosteradmindashboard', $request->id_games);
    }
    public function updatetieradmin(Request $request,$id, $idgames){
        $namagames= $idgames;
        $tierbooster = DB::table('tierbooster')->where('id', $id)->first();
        if (isset($tierbooster)){
            $games = \App\Games::where('id', $idgames)->get();
            return view('admin/pages/admin/tierbooster/update',compact(['tierbooster','namagames','games']));
        }else{
            return redirect()->route('tierboosteradmindashboard', $namagames);
        }
    }
    public function prosesupdatetierdmin(Request $request){
        $this->validate($request, [
            'id' => 'required',
            'nama' => 'required',
            'rank' => 'required',
            'tier' => 'required',
            'harga' => 'required',
            'id_games' => 'required'
        ]);
        $tierbooster = DB::table('tierbooster')->where('id', $request->id)->first();
        if(isset($tierbooster)){
            $tierbooster = \App\TierBooster::where('id', $request->id)->first();
            $tierbooster->nama = $request->nama;
            $tierbooster->rank = $request->rank;
            $tierbooster->tier = $request->tier;
            $tierbooster->harga = $request->harga;
            $tierbooster->id_games = $request->id_games;
            $tierbooster->save();
            return redirect()->route('tierboosteradmindashboard', $request->id_games);
        }else{
            return redirect()->route('tierboosteradmindashboard', $request->id_games);
        }
    }
}
