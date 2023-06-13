<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Tavar;
use App\Models\ShopClient;
use App\Models\Savdo;


// use Symfony\Component\HttpFoundation\Session\Session;
// use Illuminate\Support\Facades\Cache;
use Gloudemans\Shoppingcart\Facades\Cart;

class SavdoController extends Controller
{
    public function index(){
        $tavar = Tavar::orderBy('id','desc')->where('user_id',Auth::user()->id)->get();
        $tavarlar = json_decode($tavar);
        return view('shops.savdo.index',compact('tavarlar'));
    }
    public function search(Request $request){
        $tavarlar = Tavar::orderBy('id','desc')->where('name','like',"%".$request->search."%")->where('user_id',Auth::user()->id)->get();
        return view('shops.savdo.index', compact('tavarlar'));
    }

    public function karzinkaplus(Request $request){
        // dd($request->session());
        $tavar = Tavar::where('id', $request->tavar_id)->where('user_id', Auth::user()->id)->first();

        $array = ['id' => $tavar->id, 'name' => $tavar->name, 'qty' => $request->count, 'price' => intval($tavar->shop_price)];
        Cart::add($array);

        return redirect()->route('karzinka');
    }
    public function karzinka(Request $request){
        $karzinka = Cart::content();
        $mijozlar = ShopClient::all();
        // dd($karzinka);
        return view('shops.savdo.karzinka', compact('karzinka','mijozlar'));
    }
    public function sell(Request $request){
        if($request->qarz === 'on'){
            // validate
            $request->validate([
                'mijoz_id' => 'required'
            ]);
            $carts = Cart::content();

            $summa = 0;
            $shop_count = 0;
            $name_array = [];
            foreach($carts as $cart){
                $summa = $summa + $cart->price * $cart->qty;
                array_push($name_array, [
                    'name' => $cart->name,
                    'price' => $cart->price,
                    'count' => $cart->qty
                ]);
            }
            $shop_count = $carts->count();

            $store = Savdo::create([
                    'name'=>json_encode($name_array),
                    'summa'=>$summa,
                    'product_count'=>$shop_count,
                    'client_id' => $request->mijoz_id,
                    'debt'=>1,
                    'user_id' => Auth::user()->id
                ]);

            if($store){
                foreach($carts as $cart){
                    $tavar = Tavar::find($cart->id);
                    if ($tavar) {
                        $tavar->update([
                            'count' => $tavar->count - $cart->qty
                        ]);
                    }
                }
                Cart::destroy();
                return redirect()->route('savdo');
            }
            return redirect()->back();

            // dd($summa);

        }else{
            // validate input
            $carts = Cart::content();

            $summa = 0;
            $shop_count = 0;
            $name_array = [];
            foreach($carts as $cart){
                $summa = $summa + $cart->price * $cart->qty;
                array_push($name_array, [
                    'name' => $cart->name,
                    'price' => $cart->price,
                    'count' => $cart->qty
                ]);
            }
            $shop_count = $carts->count();

            if($request->client_id != null){
                $store = Savdo::create([
                    'name'=>json_encode($name_array),
                    'summa'=>$summa,
                    'product_count'=>$shop_count,
                    'client_id' => $request->mijoz_id,
                    'debt'=>0,
                    'user_id' => Auth::user()->id
                ]);
            }else{
                $store = Savdo::create([
                    'name'=>json_encode($name_array),
                    'summa'=>$summa,
                    'product_count'=>$shop_count,
                    'debt'=>0,
                    'user_id' => Auth::user()->id
                ]);
            }
            

            if($store){
                foreach($carts as $cart){
                    $tavar = Tavar::find($cart->id);
                    if ($tavar) {
                        $tavar->update([
                            'count' => $tavar->count - $cart->qty
                        ]);
                    }
                }
                Cart::destroy();
                return redirect()->route('savdo');
            }
            return redirect()->back();
            // dd('of');
        }
    }
    public function remove($id){
        // dd($id);
        $remove = Cart::remove($id);
        return redirect()->back();
    }
    public function destroy(){
        Cart::destroy();
        return redirect()->route('savdo');
    }
}
