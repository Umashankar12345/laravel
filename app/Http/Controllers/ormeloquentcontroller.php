<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ormeloquentcontroller extends Controller
{
    public function store(Request $request){
 ormeloquent ::create([
    'name' => $Request -> name ,
    'email' => $request -> email ,
    'age' => $request -> age
 ]);
        
    }
}
