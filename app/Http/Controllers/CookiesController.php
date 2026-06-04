<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
class CookiesController extends Controller
{
    public function index(){
        return view('cookiesform');

    }
    public function setcookie(Request $request){
        Cookie::queue('name',$request->name , 60);

        Cookie::queue('email',$request->email , 60);

        return redirect('/getcookie')->with('success',  'cookies set succesfully');
    }
    public function getcookie(Request $request){
        $name = $request->cookie('name');
        $email = $request->cookie('email');
        return view('showcookie', compact('name' , 'email'));
    }
}
