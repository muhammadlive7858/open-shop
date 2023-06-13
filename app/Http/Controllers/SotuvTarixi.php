<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Savdo;
use Auth;
class SotuvTarixi extends Controller
{
    // protected $user = Auth::user();
    public function index(){
        $sotuvlar = Savdo::orderBy('id', 'desc')->where('user_id',Auth::user()->id)->get();
        // dd($sotuvlar);
        $report['summa'] = 0;
        $report['qarz'] = 0;
        $report['qarz_summa'] = 0;

        foreach ($sotuvlar as $value) {
            $report['summa'] = $report['summa'] + $value->summa;
            $report['qarz'] = $report['qarz'] + $value->debt;
            if($value->debt == 1){
                $report['qarz_summa'] = $report['qarz_summa'] + $value->summa;
            }
        }
        // dd($sotuvlar);

        return view('shops.sotuvlar.index',compact('sotuvlar','report'));
    }
    public function show($id){
        $sotuv = Savdo::where('id',$id)->where('user_id',Auth::user()->id)->first();
        // dd($sotuvlar);
        $report['summa'] = 0;
        $report['qarz'] = 0;
        $report['qarz_summa'] = 0;

            $report['summa'] = $report['summa'] + $sotuv->summa;
            $report['qarz'] = $report['qarz'] + $sotuv->debt;
            if($sotuv->debt == 1){
                $report['qarz_summa'] = $report['qarz_summa'] + $sotuv->summa;
            }
        return view('shops.sotuvlar.show',compact('sotuv','report'));
    }

    public function sotuv_client($id){
        $sotuvlar = Savdo::orderBy('id', 'desc')->where('client_id',$id)->where('user_id',Auth::user()->id)->get();
        // dd($sotuvlar);
        $report['summa'] = 0;
        $report['qarz'] = 0;
        $report['qarz_summa'] = 0;

        foreach ($sotuvlar as $value) {
            $report['summa'] = $report['summa'] + $value->summa;
            $report['qarz'] = $report['qarz'] + $value->debt;
            if($value->debt == 1){
                $report['qarz_summa'] = $report['qarz_summa'] + $value->summa;
            }
        }
        return view('shops.sotuvlar.client_show',compact('sotuvlar','report'));
    }
}
