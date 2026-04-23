<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('simpleform');
    }
    public  function submitForm(Request $request){

    return "Form  submitted successfully";
    }
}
