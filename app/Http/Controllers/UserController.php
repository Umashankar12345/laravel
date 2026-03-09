<?php

namespace App\Http\Controllers;
// namespace App\http\functions1;
// namespace App\http\functions2;

use Illuminate\Http\Request;


class UserController extends Controller
{
    //
    public function index(){
        return "This is user controller";
    }
    public function profile(){
        return "This is the   user profile page";
    }
}
