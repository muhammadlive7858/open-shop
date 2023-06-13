<?php

namespace App\Http\Controllers;

use App\Models\taminotchi;
use App\Models\tolavlar;
use Illuminate\Http\Request;

class TolavlarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $store = tolavlar::create($request->input());
        // dd($store);
        if($store){
            return redirect()->route('taminot.show',$request->taminotchi_id);
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tolavlar  $tolavlar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $taminotchi = taminotchi::find($id);
        // dd($taminotchi);
        return view('shops.tolav.create',compact('taminotchi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tolavlar  $tolavlar
     * @return \Illuminate\Http\Response
     */
    public function edit(tolavlar $tolavlar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tolavlar  $tolavlar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tolavlar $tolavlar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tolavlar  $tolavlar
     * @return \Illuminate\Http\Response
     */
    public function destroy(tolavlar $tolavlar)
    {
        //
    }
}
