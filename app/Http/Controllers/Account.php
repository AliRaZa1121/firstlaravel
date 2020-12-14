<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use App\Models\User;

class Account extends Controller
{


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
            Request::session()->put('user', $user);
             return redirect('/dashboard');

        }
        else{
            $error = "Email Password does'nt Match!!";
            return $error;
            //return redirect('/');

        }

    }


    public function signuppost(){
       // return redirect('/dashboard');
    }


    public function logout(){

    }


}
