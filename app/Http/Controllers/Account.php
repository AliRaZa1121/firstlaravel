<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use App\Models\User;

class Account extends Controller
{
    public function login(){
        return view('backend.login');
    }

    public function loginpost(Request $request){
       $Email = Request::input('email');
       $password = Request::input('password');

      $user =  DB::table('users')->where('Email', '=', $Email ,
        'and' , 'Password', '=', $password )->first();

        if ($user) {
            Request::session()->put('Id', $user->id);
             return redirect('/dashboard');
        }

    }

    public function signup(){
     //   return view('backend.login');
    }

    public function signuppost(){
       // return redirect('/dashboard');
    }


    public function logout(){

    }


}
