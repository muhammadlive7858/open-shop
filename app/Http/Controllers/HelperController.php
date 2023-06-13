<?php

namespace App\Http\Controllers;

use App\Models\Tavar;
use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function kirim($id){
        $tavar = Tavar::find($id)->first();
        // dd($tavar);
        return view('shops.taminot.kirim',compact('tavar'));
    }
    public function kirim_update(Request $request,$id){
        $tavar = Tavar::find($id)->first();
        if($tavar){
            $store = $tavar->update([
                    'count'=>$tavar->count + $request->count,
                    'taminot_count'=>$tavar->taminot_count + $request->count,
                    'sum'=>$tavar->sum + ($request->count * $tavar->price)
                ]);
            if($store){
                return redirect()->route('taminot.index');
            }else{
                return redirect()->back();
                // dd('chto');
            }
        }else{
            return view('shops.taminot.kirim',compact('tavar'))->with('Texnik xatolik');
        }
    }
}
