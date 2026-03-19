<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentCController extends Controller
{
    public function student()
    {
        return "<h1>myclass</h1>";
    }
    public function profile($name){
        $data =[
            'name' => $name,
            'role' =>'admin',
            'id' => 1
        ];
        return  response-> view('profile' , $data)-> header('X-customer' , 'Anything');
    }
}