<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Chegirma;
use App\Models\Tavar;

use Illuminate\Http\Request;

class ChegirmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chegirmalar = Tavar::orderBy('id','desc')->where('chegirma','>',0)->where('user_id',Auth::user()->id)->get();
        return view('shops.chegirma.index',compact('chegirmalar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tavarlar = Tavar::where('user_id',Auth::user()->id)->get();
        return view('shops.chegirma.create',compact('tavarlar'));
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
        // dd($request);
        $tavar = Tavar::find($request->tavar);
        if($tavar){
            $store = $tavar->update([
                    'chegirma' => $request->chegirma,
                    'chegirma_date' => $request->chegirma_date
                ]);
                if($store){
                return redirect()->route('chegirma.index')->with('chegirma yaratildi');
                }
        }else{
            return redirect()->back()->with('404', 'Tavar topilmadi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chegirma  $chegirma
     * @return \Illuminate\Http\Response
     */
    public function show(Chegirma $chegirma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chegirma  $chegirma
     * @return \Illuminate\Http\Response
     */
    public function edit(Chegirma $chegirma)
    {
        dd($chegirma);
        $tavar = Tavar::find($chegirma);
        if ($tavar) {
            return view('shops.chegirma.edit', compact('tavar'));
        }else{
            return redirect()->route('chegirma.index')->with('404', 'Tavar topilmadi');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chegirma  $chegirma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chegirma $chegirma)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chegirma  $chegirma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chegirma $chegirma)
    {
        //
    }
}
