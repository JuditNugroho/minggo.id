<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function  index(Request $request){
        $games = \App\Games::paginate(10);
        return view('user/home',compact(['games']));
    }
    public function  topupaov(Request $request){
        $games = \App\Games::paginate(10);
        return view('user/topupaov',compact(['games']));
    }
    public function  topupff(Request $request){
        $games = \App\Games::paginate(10);
        return view('user/topupff',compact(['games']));
    }
    public function  tierbosteraov(Request $request){
        $games = \App\Games::paginate(10);
        return view('user/tierbosteraov',compact(['games']));
    }
    public function  tierbosterff(Request $request){
        $games = \App\Games::paginate(10);
        return view('user/tierbosterff',compact(['games']));
    }
}
