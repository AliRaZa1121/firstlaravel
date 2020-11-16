<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndProductDetails extends Controller
{
    public function index(){
        return view('Frontend.productdetails');
    }
}
