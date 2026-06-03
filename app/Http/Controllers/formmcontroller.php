<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formm;

class formmcontroller extends Controller
{
    public function index (){
        return view('formm');
    }
    public function store(Request $request){
        $request -> validate([
            'name' => 'required|min:12',
            'email' => 'required|email|unique:formms,email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'branch' => 'required',
            'number' => 'required|numeric'
,        ]);
        formm::create([
            'name' => $request->name ,
            'email' => $request->email ,
            'password' =>bcrypt($request->password),
            'confirm_password' => bcrypt($request->confirm_password),
            'branch' => $request->branch ,
            'number' => $request->number
        ]);
        return "form submitted succesfully";
    }
}
