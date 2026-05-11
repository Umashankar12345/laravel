<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    //
    public function showForm(){
        return view ('form1');
    }
    public function submitForm(Request $request)
{
    $request->validate([

        'email' => 'required|email',

        'password' => 'required|min:6',

        'confirmpassword' => 'required|same:password',

        'mobile' => 'required|digits:10',

        'altmobile' => 'required|digits:10',

        'gender' => 'required',

        'dob' => 'required|date',

        'age' => 'required|numeric',

        'address' => 'required',

        'pincode' => 'required|digits:6',

        'course' => 'required',

        'percentage' => 'required|numeric',

        'signature' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',

        'terms' => 'required'

    ]);

    return "Form Submitted Successfully";
}
    }

