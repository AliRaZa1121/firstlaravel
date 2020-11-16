<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrnotEndProducts extends Controller
{
    public function index(){
        return view('Frontend.products');
    }
}
