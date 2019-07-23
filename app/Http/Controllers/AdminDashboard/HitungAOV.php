<?php

namespace App\Http\Controllers\AdminDashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class HitungAOV extends Controller
{
    public function index(Request $request, $idawal, $idakhir, $id_games)
    {
        $idjadwalawal = \App\TierBooster::where('id', '=', $idawal)->where('id_games', '=', $id_games)->first();
        $rankawal = $idjadwalawal['rank'];
        $idjadwalakhir = \App\TierBooster::where('id', '=', $idakhir)->where('id_games', '=', $id_games)->first();
        $rankakhir = $idjadwalakhir['rank'];
        $biaya = 0;
        if ($rankawal > 0) {
            for ($i = $rankawal; $i < $rankakhir; $i++) {
                $tier = \App\TierBooster::where('rank', '=', $i)->where('id_games', '=', $id_games)->first();
                $biaya += $tier['harga'];
            }
        } else if ($rankawal == 0) {
            $biaya = $idjadwalawal['biaya'];
            for ($i = $rankawal++; $i < $rankakhir; $i++) {
                $tier = \App\TierBooster::where('rank', '=', $i)->where('id_games', '=', $id_games)->first();
                $biaya += $tier['harga'];
            }
        }
        return Response::json($biaya);
    }
    public function validasirankakhir(Request $request, $id){
        $rankawal = \App\TierBooster::where('id',$id)->first();
        $rankakhir = \App\TierBooster::where('rank','>',$rankawal->rank)->orderBy('rank','ASC')->get();
        return Response::json($rankakhir);
    }
}
