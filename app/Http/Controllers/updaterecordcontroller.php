<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\updaterecord;

class updaterecordcontroller extends Controller
{
    public function index(){
        return view('updateuser');
    }
    public function update(Request $request){
        $request->validate([
            'email' => 'required|email',
            'name' => 'required'
        ]);

       $updaterecord =   updaterecord::where('email' , $request->email)->first();

    if($updaterecord){
        $updaterecord->name = $request-> name;
        $updaterecord->save();

        return back()->with('success' , 'record added succesfully');

    }
    return back()->with('success' , 'record not found');
    }
}
