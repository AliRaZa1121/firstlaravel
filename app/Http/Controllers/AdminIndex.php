<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminIndex extends Controller
{
    public function index(){
        return view('backend.adminindex');
    }
}
