<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxsController extends Controller
{
    public function index()
    {
        $taxs = Taxs::orderBy('id','desc')->get();
        return view('taxer.tax.index',compact('taxs'));
    }
}
