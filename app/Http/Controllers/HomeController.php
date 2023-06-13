<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(Auth::user()->role);
        if(Auth::user()->role === 'saler'){
            return view('shops.home');
        }else if(Auth::user()->role === 'driver'){

        }else if(Auth::user()->role === 'client'){

        }else if(Auth::user()->role == 'taxer'){
            return view('taxer.dashboard');
        }
    }
}
