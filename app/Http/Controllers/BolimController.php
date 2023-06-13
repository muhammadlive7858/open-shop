<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Bolim;
use App\Models\Tavar;
use Illuminate\Http\Request;

class BolimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bolimlar = Bolim::get();
        return view('shops.bolim.index', compact('bolimlar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bolimlar = Bolim::all();

        return view('shops.bolim.create', compact('bolimlar'));
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
        // $validate = $request->validate([
        //         'name'=>['required|min:3|max:255']
        //     ]);
        // if(true){
            $store = Bolim::create([
                'name' => $request->name,
                'description' => $request->description,
                'parent_id' => $request->parent_id,

                // 'user_id'=>Auth::user()->id
            ]);
            if ($store) {
                return redirect()->route('bolim.index')->with('Bolim yaratildi');
            } else {
                return redirect()->back()->with('error','Bolim yaratilmadi');
            }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bolim  $Bolim
     * @return \Illuminate\Http\Response
     */
    public function show(Bolim $Bolim)
    {
        $tavarlar = Tavar::orderBy('id', 'desc')->where('bolim', $Bolim->id)->get();
        $report = [];
        $report['umumiyAslBaxo'] = 0;
        $report['umumiySotuvBaxo'] = 0;
        $report['umumiySoni'] = 0;
        foreach ($tavarlar as $tavar) {
            $report['umumiyAslBaxo'] = $report['umumiyAslBaxo'] + ($tavar->price * $tavar->count);
            $report['umumiySotuvBaxo'] = $report['umumiySotuvBaxo'] + ($tavar->shop_price * $tavar->count);
            $report['umumiySoni'] = $report['umumiySoni'] + $tavar->count;
        }
        // dd($tavarlar);
        return view('shops.bolim.show', compact('tavarlar', 'Bolim', 'report'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bolim  $Bolim
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bolim = Bolim::find($id);
        $bolimlar = Bolim::all();
        // dd($taminot);
        return view('shops.bolim.edit', compact('bolim', 'bolimlar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bolim  $Bolim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bolim = Bolim::find($id);
        // dd($taminot);
        if ($bolim) {
            $validate = $request->validate([
                'name'=>['required|min:3|max:255']
            ]);
            if($validate){
                $update = $bolim->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'parent_id' => $request->parent_id,

                    // 'user_id'=>Auth::user()->id
                ]);
                if ($update) {
                    return redirect()->route('bolim.index')->with('Bolim yangilandi');
                } else {
                    return redirect()->back()->with('error','Bolim yangilanmadi');
                }
            }else{
                return  redirect()->back()->with('error','Inputlarga noto\'g\'ri malumot kiritilgan');
            }
        } else {
            return redirect()->back()->with('error','Bo\'lim topilmadi');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bolim  $Bolim
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bolim = Bolim::find($id);
        // dd($taminot);
        if ($bolim) {
            $delete = $bolim->delete();
            if ($delete) {
                return redirect()->route('bolim.index');
            } else {
                return redirect()->back()->with('error','Bo\'lim o\'chirilmadi');
            }
        } else {
            return redirect()->back()->with('error','Bo\'lim topilmadi');
        }
    }
}
