<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Account extends Controller
{
    public function login(){
        return view('backend.login');
    }
}
