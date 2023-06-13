<?php

namespace App\Http\Controllers;

use App\Models\Aksiya;
use Auth;
use Illuminate\Http\Request;

class AksiyaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aksiyalar = Aksiya::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        return view('shops.aksiya.index',compact('aksiyalar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shops.aksiya.create');
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
        $uploaded = $request->file('image');
        if($uploaded){
            $uploaded = $request->file('image');
            if($uploaded){
            $tmp_name = $request->file('image')->getClientOriginalExtension();

            $new_name = rand(100,999).time().'image.'.$tmp_name;
            //dd($new_name);


            $move = $uploaded->move(public_path('images/uploaded-image/'),$new_name);
            //dd($move);

            $baza_name = "images/uploaded-image/".$new_name;
            //dd($baza_name);
            if($move){
                $store = Aksiya::create([
                    'name'=>$request->name,
                    'aksiya_date'=>$request->aksiya_date,
                    'desc'=>$request->desc,
                    'image'=>$baza_name,
                    'salary'=>$request->salary,
                    'user_id'=>Auth::user()->id
                ]);
                if($store){
                    return redirect()->route('aksiya.index');
                }else{
                    return redirect()->back();
                }
            }
        }}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aksiya  $aksiya
     * @return \Illuminate\Http\Response
     */
    public function show(Aksiya $aksiya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aksiya  $aksiya
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aksiya = Aksiya::find($id)->get();
        if($aksiya){
            return view('shops.aksiya.edit',compact('aksiya'));
        }else{
            return redirect()->route('aksiya.index')->with('Aksiya topilmadi');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aksiya  $aksiya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate
        $aksiya = Aksiya::find($id);
            $uploaded = $request->file('image');
                if($uploaded and $aksiya){
                    $uploaded = $request->file('image');
                    if($uploaded){
                    $tmp_name = $request->file('image')->getClientOriginalExtension();

                    $new_name = rand(100,999).time().'image.'.$tmp_name;
                    //dd($new_name);


                    $move = $uploaded->move(public_path('images/uploaded-image/'),$new_name);
                    //dd($move);

                    $baza_name = "images/uploaded-image/".$new_name;
                    //dd($baza_name);
                    if($move){
                        $store = $aksiya->update([
                            'name'=>$request->name,
                            'aksiya_date'=>$request->aksiya_date,
                            'desc'=>$request->desc,
                            'image'=>$baza_name,
                            'salary'=>$request->salary,
                            'user_id'=>Auth::user()->id
                        ]);
                        if($store){
                            return redirect()->route('aksiya.index');
                        }else{
                            return redirect()->back();
                        }
                    }
                    else{
                        dd('mm');
                            return redirect()->back()->with('Aksiya rasmi topilmadi');
                        }
                }else{
                dd('mm');
                    return redirect()->back()->with('Aksiya tahrirlanmadi');
                }
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aksiya  $aksiya
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aksiya $aksiya)
    {
        $aksiya = Aksiya::find($aksiya['id']);
        if($aksiya){
            $aksiya->delete();
            return redirect()->route('aksiya.index')->with('Aksiya o\'chirildi');
        }else{
            return redirect()->route('aksiya.index')->with('Aksiya o\'chirilmadi');
        }
    }
}
