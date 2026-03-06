<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hello Umashankar 🚀 Laravel is working!";
});

Route::get('/about' , function(){
    return "Hi about page";
});

Route::get('/contact' , function(){
    return  "Hi contact apge";
});

Route::get('/post/{id}/{name}' , function($id , $name){
    return "this is post  number" .$id . " " . $name;
});