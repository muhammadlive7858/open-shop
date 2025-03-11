<?php

namespace App\Http\Controllers\taxer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class EntrepreneursController extends Controller
{
    public function index(){
        $users = User::get();
        return view('taxer.entrepreneurs.index',compact('users'));
    }
    public function show($id)
    {
        $user = User::find($id);
        // dd($user);
        return view('taxer.entrepreneurs.show',compact('user'));
    }
}
