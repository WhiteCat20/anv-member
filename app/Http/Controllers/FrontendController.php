<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function abstract(){
        return view('abstract');
    }
    public function payment(){
        return view('payment');
    }
}
