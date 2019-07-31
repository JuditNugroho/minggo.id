<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\TopUp;
use Illuminate\Support\Facades\Response;

class HitungHargaController extends Controller
{
    public function index($id){
        $topupaov = TopUp::where('id',$id)->first();
        return Response::json($topupaov);
    }
}
