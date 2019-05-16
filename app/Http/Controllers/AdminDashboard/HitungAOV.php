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
            //  echo $biaya;
        } else if ($rankawal == 0) {
            $biaya = $idjadwalawal['biaya'];
            for ($i = $rankawal++; $i < $rankakhir; $i++) {
                $tier = \App\TierBooster::where('rank', '=', $i)->where('id_games', '=', $id_games)->first();
                $biaya += $tier['harga'];
            }
            //    echo $biaya;
        }
        $tier = \App\TierBooster::where('rank', '>', $rankawal)->orderBy('rank', 'ASC')->get();
        return Response::json($tier);
    }
}
