<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use App\Models\User;

class Account extends Controller
{
    public function login(){
        return view('Frontend.login');
    }

    public function loginpost(Request $request){

       //$Email = Request::input('email');
       //$password = Request::input('password');

     // $user =  DB::table('users')->where('Email', '=', $Email ,
       // 'and' , 'Password', '=', $password )->first();

       //$user = DB::table('users')->first();
       //return ['users' => $user];

       $user = DB::table('users')
       ->where('email',Request::input('email'))
       ->where('password',Request::input('password'))
       ->first();
        if ($user) {
           //Request::session()->put('email', $user->email);
             return redirect('/dashboard');
             //echo "done";
        }
        else{
            //return view('backend.login');
            return redirect('/');
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
