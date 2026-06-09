<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('loginform');
    }
    public function Login(Request $request){

    if($request->username == 'admin' && $request -> password == 'admin1234'){
        session([
            'username' => $request ->username
        ]);
        return redirect('/profiles');
    }
    return  'Invalid username ';


    }
    public function profiles(){
        if(!session()->has('username')){
            return redirect('/login');
        }
        return view('profiles');
    }
    public  function logout(){
       // if(session()->has('username')){
            session()->forget('username');
       // }
        return redirect('/login');
    }
}
