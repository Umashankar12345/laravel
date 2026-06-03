<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrationn;

class RegistrationnController extends Controller
{
    public function index(){
        return view('registrationn');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:registrationns,email',
            'password' => 'required|min:6'
        ]);
        Registrationn::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>bcrypt($request->password)
        ]);
        return "Registration successful!";
    }
}
