<?php

namespace App\Http\Controllers\AdminDashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TopUpController extends Controller
{
    public function  index(Request $request){
        $games = \App\Games::paginate(10);
        return view('admin/pages/topup',compact(['games']));
    }


    //Controller Super Admin
    public function lihattopupadmin(Request $request,$idgames){
        $namagames= $idgames;
        $topup = \App\TopUp::where('id_games', $idgames)->orderBy('list', 'asc')->orderBy('payment', 'desc')->paginate(10);
        return view('admin/pages/admin/topupadmin',compact(['topup','namagames']));
    }
    public function inserttopupadmin(Request $request, $idgames){
        $namagames= $idgames;
        $games = \App\Games::where('id', $idgames)->get();
        return view('admin/pages/admin/topup/insert',compact(['namagames','games']));
    }
    public function prosesinserttopupadmin(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'list' => 'required',
            'harga' => 'required',
            'id_games' => 'required',
            'payment' => 'required'
        ]);
        $topup = new \App\TopUp();
        $topup->nama = $request->nama;
        $topup->list = $request->list;
        $topup->harga = $request->harga;
        $topup->id_games = $request->id_games;
        $topup->payment = $request->payment;
        $topup->save();
        return redirect()->route('topupadmindashboard', $request->id_games);
    }
    public function deletetopupadmin(Request $request,$id, $idgames){
        $namagames= $idgames;
        $topup = \App\TopUp::find($id);
        if(isset($topup)){
            $topup->delete();
        }
        return redirect()->route('topupadmindashboard', $namagames);
    }
    public function updatetopupadmin(Request $request,$id, $idgames){
        $namagames= $idgames;
        $topup = DB::table('topup')->where('id', $id)->first();
        if (isset($topup)){
            $games = \App\Games::where('id', $idgames)->get();
            return view('admin/pages/admin/topup/update',compact(['topup','namagames','games']));
        }else{
            return redirect()->route('topupadmindashboard', $namagames);
        }
    }
    public function prosesupdatetopupadmin(Request $request){
        $this->validate($request, [
            'id' => 'required',
            'nama' => 'required',
            'list' => 'required',
            'harga' => 'required',
            'id_games' => 'required',
            'payment' => 'required'
        ]);
        $topup = DB::table('topup')->where('id', $request->id)->first();
        if(isset($topup)){
            $topup = \App\TopUp::where('id', $request->id)->first();
            $topup->nama = $request->nama;
            $topup->list = $request->list;
            $topup->harga = $request->harga;
            $topup->id_games = $request->id_games;
            $topup->payment = $request->payment;
            $topup->save();
            return redirect()->route('topupadmindashboard', $request->id_games);
        }else{
            return redirect()->route('topupadmindashboard', $request->id_games);
        }
    }
}
