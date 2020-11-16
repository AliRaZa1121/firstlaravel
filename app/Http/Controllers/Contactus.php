<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contactus extends Controller
{
    public function index(){
        return view('Frontend.contact');
    }
}
