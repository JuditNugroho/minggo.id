<?php

namespace App\Http\Controllers\AdminDashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function  index(Request $request){
        $games = \App\Games::paginate(10);
        return view('admin/pages/games',compact(['games']));
    }
    public function insert(Request $request){
        return view('admin/pages/admin/games/insert');
    }
    public function prosesinsert(Request $request){
        $this->validate($request, [
            'id' => 'required',
            'nama' => 'required',
        ]);
        $games = new \App\Games();
        $games->id = $request->id;
        $games->nama = $request->nama;
        $games->save();
        return redirect()->route('gamesdashboard');
    }
    public function update(Request $request, $id){
        $games = DB::table('games')->where('id', $id)->first();
        if(isset($games)){
            return view('admin/pages/admin/games/update',compact(['games']));
        }else {
            return redirect()->route('gamesdashboard');
        }
    }
    public function prosesupdate(Request $request){
        $this->validate($request, [
            'nama' => 'required'
        ]);
        $games =  \App\Games::where('id', $request->id)->first();
        if(isset($games)){
            $games->id = $request->id;
            $games->nama = $request->nama;
            $games->save();
            return redirect()->route('gamesdashboard');
        }else {
            return redirect()->route('gamesdashboard');
        }
    }
    public function delete(Request $request,$id){
        $games =  \App\Games::where('id', $id)->first();
        if(isset($games)){
            $games->delete();
            return redirect()->route('gamesdashboard');
        }else {
            return redirect()->route('gamesdashboard');
        }
    }
}
