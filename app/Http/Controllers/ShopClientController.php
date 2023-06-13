<?php

namespace App\Http\Controllers;

use App\Models\shopClient;
use Illuminate\Http\Request;

class ShopClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mijozlar = shopClient::orderBy('id','desc')->get();
        return view('shops.mijoz.index', compact('mijozlar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shops.mijoz.create');
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
        $store = ShopClient::create($request->input());
        if($store){
            return redirect()->route('mijoz.index');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\shopClient  $shopClient
     * @return \Illuminate\Http\Response
     */
    public function show(shopClient $shopClient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\shopClient  $shopClient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mijoz = ShopClient::find($id);
        return view('shops.mijoz.edit', compact('mijoz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\shopClient  $shopClient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //$store = ShopClient::create($request->input());
        $client = ShopClient::find($id);

        if($client){
            $client->update($request->input());
            return redirect()->route('mijoz.index');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\shopClient  $shopClient
     * @return \Illuminate\Http\Response
     */
    public function destroy(shopClient $shopClient)
    {
        //
    }
}
