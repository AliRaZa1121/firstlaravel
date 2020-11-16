<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Helloname extends Controller
{
    public function helloname($name){
        return view('home.index', ['name'=> $name]);
    }
}
