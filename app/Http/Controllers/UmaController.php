<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmaController extends Controller
{
    public function show(){
        $name = 'umashankar';
        return view('user' , ['name' =>$name]);
    }
}
