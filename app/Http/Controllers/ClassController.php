<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class classController extends Controller
{
    public function index(){
    
    $students =[
        ["name" => "Umashankar" , "age" => 244 , "course" => "Laravel"],
        ["name" => "Motalog" , "age" => 25 , "course" => "PHP"],
        ["name" => "Ali" , "age" => 32 , "course" => "JavaScript"]

    ];
    return view('class', compact('students'));
}
};