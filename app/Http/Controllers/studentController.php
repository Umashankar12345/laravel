<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function  student(){
      
        return view('student');

    }

    public function students(){
        $name= 'umashankar';
        return view('students' , ['name' => $name]);
    }
    public function course($course){
        return view('course', ['name' => $course]);
    }
}
