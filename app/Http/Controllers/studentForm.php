<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentForm extends Controller
{
    public function showForm(){
        return view('register');
    }
    public function store(Request $request){
        $request -> validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
            'age' => 'required|integer|min:18'
        ]);
        return "Registration successful!";
    }
}
