<?php

namespace App\Http\Controllers\AdminDashboard;

use App\Http\Controllers\Controller;
use App\TierBoosterAov;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use stdClass;

class HitungAOV extends Controller
{
    public function index(Request $request, $idawal, $idakhir, $id_games)
    {
        $idjadwalawal = TierBoosterAov::where('id', '=', $idawal)->where('id_games', '=', $id_games)->first();
        $rankawal = $idjadwalawal['rank'];
        $idjadwalakhir = TierBoosterAov::where('id', '=', $idakhir)->where('id_games', '=', $id_games)->first();
        $rankakhir = $idjadwalakhir['rank'];
        $biaya = 0;
        if ($rankawal > 0) {
            for ($i = $rankawal; $i < $rankakhir; $i++) {
                $tier = TierBoosterAov::where('rank', '=', $i)->where('id_games', '=', $id_games)->first();
                $biaya += $tier['harga'];
            }
        } else if ($rankawal == 0) {
            $biaya = $idjadwalawal['biaya'];
            for ($i = $rankawal++; $i < $rankakhir; $i++) {
                $tier = TierBoosterAov::where('rank', '=', $i)->where('id_games', '=', $id_games)->first();
                $biaya += $tier['harga'];
            }
        }
        $aov =new stdClass();
        $aov->gambarawal = $idjadwalawal['gambar'];
        $aov->gambarakhir = $idjadwalakhir['gambar'];
        $aov->biaya = $biaya;
        return Response::json($aov);
    }
    public function validasirankakhir(Request $request, $id){
        $rankawal = TierBoosterAov::where('id',$id)->first();
        $rankakhir = TierBoosterAov::where('rank','>',$rankawal->rank)->where('id_tier','>',$rankawal->id_tier)->orderBy('rank','ASC')->get();
        return Response::json($rankakhir);
    }
}
