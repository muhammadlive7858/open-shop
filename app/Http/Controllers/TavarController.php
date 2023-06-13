<?php

namespace App\Http\Controllers;

use App\Http\Requests\Shop\TavarValidatsiya;
use Auth;
use App\Models\Bolim;

use App\Models\taminotchi;
use App\Models\Tavar;
use Illuminate\Http\Request;

class TavarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tavarlar = Tavar::orderBy('id', 'desc')->where('user_id', Auth::user()->id)->get();
        return view('shops.tavar.index', compact('tavarlar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $bolimlar = Bolim::get();
        $taminotchilar = taminotchi::where('user_id', Auth::user()->id)->get();
        return view('shops.tavar.create', compact('bolimlar', 'taminotchilar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $uploaded = $request->file('image');
        if ($uploaded) {
            $tmp_name = $request->file('image')->getClientOriginalExtension();

            $baza_name = $this->generateFile($uploaded, $tmp_name);
            //dd($baza_name);
            if ($baza_name) {
                $store = Tavar::create([
                    'name' => $request->name,
                    'bolim' => $request->bolim,
                    'desc' => $request->desc,
                    'image' => $baza_name,
                    'taminotchi' => $request->taminotchi,
                    'price' => $request->price,
                    'shop_price' => $request->shop_price,
                    'count' => $request->count,
                    'taminot_count' => $request->count,
                    'chegirma' => $request->chegirma,
                    'chegirma_date' => $request->chegirma_date,
                    'user_id' => Auth::user()->id,
                    'sum' => $request['price'] * $request['count']
                ]);
                if ($store) {
                    return redirect()->route('tavar.index');
                } else {
                    return redirect()->back();
                }
            } else {
                return redirect()->back()->with('error', 'Fayl ko\'chirishda xatolik');
            }
        } else {
            return redirect()->back()->with('error', 'Fayl yuklanmagan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tavar  $tavar
     * @return \Illuminate\Http\Response
     */
    public function show(Tavar $tavar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tavar  $tavar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tavar = Tavar::where('user_id', Auth::user()->id)->where('id', $id)->get()->first();
        // dd($tavar);
        $bolimlar = Bolim::get();
        $taminotchilar = taminotchi::where('user_id', Auth::user()->id)->get();
        if ($tavar) {
            return view('shops.tavar.edit', compact('tavar', 'bolimlar', 'taminotchilar'));
        } else {
            return redirect()->back()->with('Tavar topilmadi');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tavar  $tavar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prod = Tavar::where('user_id', Auth::user()->id)->where('id', $id)->get()->first();
        $uploaded = $request->file('image');
        if ($uploaded) {
            $tmp_name = $request->file('image')->getClientOriginalExtension();

            $baza_name = $this->generateFile($uploaded, $tmp_name);
            if ($baza_name) {
                $updateStore = $prod->update([
                    'name' => $request->name,
                    'bolim' => $request->bolim,
                    'taminotchi' => $request->taminotchi,
                    'desc' => $request->desc,
                    'image' => $baza_name,
                    'price' => $request->price,
                    'shop_price' => $request->shop_price,
                    'count' => $request->count,
                    'taminot_count' => $request->taminot_count,
                    'chegirma' => $request->chegirma,
                    'chegirma_date' => $request->chegirma_date,
                    'user_id' => Auth::user()->id,
                    'sum' => $request->price * $request->taminot_count
                ]);
                if ($updateStore) {
                    return redirect()->route('tavar.index');
                } else {
                    return redirect()->back();
                }
            } else {
                return redirect()->back()->with('error', 'File yuklashda xatolik');
            }
        } else {
            $updateStore = $prod->update([
                'name' => $request->name,
                'bolim' => $request->bolim,
                'taminotchi' => $request->taminotchi,
                'desc' => $request->desc,
                'price' => $request->price,
                'shop_price' => $request->shop_price,
                'count' => $request->count,
                'taminot_count' => $request->taminot_count,
                'chegirma' => $request->chegirma,
                'chegirma_date' => $request->chegirma_date,
                'user_id' => Auth::user()->id,
                'sum' => $request->price * $request->taminot_count
            ]);
            if ($updateStore) {
                return redirect()->route('tavar.index');
            } else {
                return redirect()->back();
            }
            return redirect()->back()->with('error', 'Fayl yuklanmagan');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tavar  $tavar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('destroy');
        $tavar = Tavar::find($id);
        if ($tavar) {
            $tavar->delete();
            return redirect()->back()->with('Tavar o\'chirildi');
        } else {
            return redirect()->back()->with('Tavar topilmadi');
        }
    }
    protected function generateFile($uploaded, $tmp_name)
    {
        $new_name = rand(100, 999) . time() . 'image.' . $tmp_name;
        //dd($new_name);
        $move = $uploaded->move(public_path('images/uploaded-image/'), $new_name);
        //dd($move);
        if ($move) {
            return $baza_name = "images/uploaded-image/" . $new_name;
        }
    }
}
