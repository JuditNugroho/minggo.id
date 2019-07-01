<?php

namespace App\Http\Controllers\User;

use App\TransaksiTopUpAOV;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class KonfirmasiPembayaran extends Controller
{
   public function konfirmasipembayaranaov(Request $request){
       $request->validate([
           'id_player' => 'required',
           'nilaitopup' => 'required',
           'cara_pembayaran' => 'required',
           'jumlahtransfer' => 'required',
           'bukti' =>'required'
       ]);
       $transaksitopupaov =  new TransaksiTopUpAOV();
       $transaksitopupaov->id_player = $request->input('id_player');
       $transaksitopupaov->nilaitopup = $request->input('nilaitopup');
       $transaksitopupaov->cara_pembayaran = $request->input('cara_pembayaran');
       $transaksitopupaov->jumlahtransfer = $request->input('jumlahtransfer');
       $path = $request->file('bukti')->storeAs(
           'public/transferaov', pathinfo(Carbon::now()->format('dmYh').$request->file('bukti')->getClientOriginalName(), PATHINFO_FILENAME) . '.' . $request->file('bukti')->getClientOriginalExtension()
       );
       $transaksitopupaov->bukti_pembayaran = Carbon::now()->format('dmYh'). ($request->file('bukti')->getClientOriginalName());
       $transaksitopupaov->save();
       return redirect()->back()->with('success','Proses pembayaran segera diproses');
   }
   public function lhtfotoaov(Request $request,$foto){
        return response()->download(storage_path('app/public/transferaov/'.$foto));
   }
}
