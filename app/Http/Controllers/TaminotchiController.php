<?php

namespace App\Http\Controllers;

use App\Models\taminotchi;
use App\Models\Tavar;
use App\Models\Shaxsiy_qarz;
use App\Models\tolavlar;


use Auth;
use Illuminate\Http\Request;

class TaminotchiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taminotchilar = taminotchi::where('user_id',Auth::user()->id)->get();
        return view('shops.taminot.index', compact('taminotchilar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shops.taminot.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate
        $store = taminotchi::create([
                'name'=>$request->name,
                'description'=>$request->description,
                'user_id'=>Auth::user()->id
            ]);
        if($store){
            return redirect()->route('taminot.index')->with('Taminotchi yaratildi');
        }else{
            return back()->with('Taminotchi yaratilmadi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\taminotchi  $taminotchi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $id = $id;
        $taminotchi = taminotchi::find($id);
        // dd($taminotchi);
        $tavarlar = Tavar::where('taminotchi', $id)->where('user_id',Auth::user()->id)->get();
        // $shaxsiy_qarz = Shaxsiy_qarz::where('taminotchi_id', $id)->get();
        $qarz_summa = 0;
        foreach($tavarlar as $qarz){
            $qarz_summa = $qarz_summa + $qarz->sum;
        }
        $tolavlar = tolavlar::where('taminotchi_id', $id)->get();
        $tolav_summa = 0;
        foreach($tolavlar as $tolav){
            $tolav_summa = $tolav_summa + $tolav->sum;
        }
        return view('shops.taminot.show', compact('taminotchi', 'tavarlar', 'qarz_summa','tolav_summa','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\taminotchi  $taminotchi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $taminotchi = taminotchi::where('id',$id)->where('user_id',Auth::user()->id)->get();
        // dd($taminot);
        return view('shops.taminot.edit', compact('taminotchi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\taminotchi  $taminotchi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $taminot = taminotchi::find($id);
        // dd($taminot);
        if($taminot){
            $store = $taminot->update([
                    'name'=>$request->name,
                    'description'=>$request->description,
                    'user_id'=>Auth::user()->id
                ]);
            if($store){
                return redirect()->route('taminot.index');
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\taminotchi  $taminotchi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taminot = taminotchi::find($id);
        // dd($taminot);
        if($taminot){
            $delete = $taminot->delete();
            if($delete){
                return redirect()->route('taminot.index');
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
    }
}
