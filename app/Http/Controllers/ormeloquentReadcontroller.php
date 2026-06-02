<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ormeloquent;
class ormeloquentReadcontroller extends Controller
{
    public function index(){
        $data = ormeloquent :: all();
        return view('show' , compact('data'));
    }
}
