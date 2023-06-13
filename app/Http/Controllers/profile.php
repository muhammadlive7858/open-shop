<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class profile extends Controller
{
    //index
    public function index(){
        $user = User::where('id', Auth::user()->id)->get();
        return view('shops.user.index', compact('user'));
    }
    public function update(Request $request,$id)
    {
        // dd($request);
        $uploaded = $request->file('image');
        if ($uploaded) {
            $user = User::find(Auth::user()->id);
            $tmp_name = $request->file('image')->getClientOriginalExtension();

            $new_name = rand(100, 999) . time() . 'image.' . $tmp_name;
            //dd($new_name);


            $move = $uploaded->move(public_path('images/uploaded-image/'), $new_name);
            //dd($move);

            $baza_name = "images/uploaded-image/" . $new_name;
            if ($user and $move) {
                $store = $user->update([
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'image' => $baza_name,
                    'job' => $request->job,
                    'address' => $request->address,
                    'market_name' => $request->market_name,
                    'description' => $request->description,
                ]);
                if ($store) {
                    // dd('update');
                    return redirect()->route('profile');
                }
            }else{
                dd('User not found');
                return redirect()->back()->with('Foydalanuvchi topilmadi');
            }
        }else{
            dd('file not found');
            return redirect()->back()->with('File yuklanmadi');
        }
    }
    public function changePassword(Request $request,$id){
        $user = User::where('id', Auth::user()->id)->first();
        $oldPassword = $user['password'];
        if($user){
            if($request->newpassword === $request->renewpassword){
                if($oldPassword === $request->password){
                    $store = $user->update([
                            'password'=>$request->newpassword
                        ]);
                    if($store){
                        return redirect()->back()->with('User password updated');
                    }else{
                        return redirect()->back()->with('User password not updated');
                    }
                }else{
                    return redirect()->back()->with('password warning');
                }
            }else{
                return redirect()->back()->with('password not ==');
            }
        }else{
            return redirect()->back()->with('user not fount');
        }
    }

}
