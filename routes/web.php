<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return  view ("home");
});

// Route::get('/about' , function(){
//     return "Hi about page";
// });

// Route::get('/contact' , function(){
//     return  "Hi contact apge";
// });

Route::get('/post/{id}' , function($id){
    return 'User ID: ' . $id;
});


// //create a dynamic id
// Route::get('/post/{id}/{name}' , function($id , $name){
//     return "this is post  number" .$id . " " . $name;
// });
// // create a admin group
// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/dashboard', function () {
//         return "Admin Dashboard";
//     });
// });
