<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UmaController;

use App\Http\controllers\studentController;


// Route::get('/user' ,[UmaController::class , 'show']);


Route::get('/student' ,[studentController::class , 'student']);
Route::get('/students' ,[studentController::class , 'students']);
Route::get('/course/{course}' ,[studentController::class , 'course']);
// Route::get('/', function () {
//     return  view ("home");
// });

// Route::get('/about' , function(){
//     return "Hi about page";
// });

// Route::get('/contact' , function(){
//     return  "Hi contact apge";
// });

// Route::get('/post/{id}' , function($id){
//     return 'User ID: ' . $id;
// });
// Route::get('/user' , function(){
//     $name = 'umashankar';
//     return view('user' , ['name' => $name]);
// });
// Route::get('/createss', function () {
//     $name = 'umaa&motalog';
//     return view('createss', ['name' => $name]);
// });

// //create a dynamic id
// Route::get('/post/{id}/{name}' , function($id , $name){
//     return "this is post  number" .$id . " " . $name;
// });
    // Route::get('/post/{id}/{name}' , function($id , $name){
    //     return "this is post number" .$id . " " . $name;
    // });
    // Route::get('admin' , function(){
    //     return "Admin Dashboard";
    // });
// // create a admin group
// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/dashboard', function () {
//         return "Admin Dashboard";
//     });
// });

// controllers
// use App\Http\Controllers\UserController;
//group route
// Route::prefix('admin')->group(function(){

// Route::get('/dashboard' , function(){
//     return 'AdminDashboard';
// });
// Route::get('/AdminProfile' , function(){
//     return 'Admin Profile';
// });
// });

// // product create
// Route::prefix('/product')->group(function(){

//         Route::get('/create' , function(){
//             return 'Create Product';
//         });
//         Route::get('/categories' , function(){
//             return 'Product Categories';
//         });
//         Route::get('/tags' , function(){
//             return 'Product Tags';
// });
// });
// Route::prefix('/users')->group(function(){
//     Route::get('/list' , function(){
//         return view('list');
//     });
//     Route::get('/create' , function(){
//         return  view('create');
//     });
//     Route::get('/profile' , function(){
//         return  view('profile');
//     });
//     Route::get('/category' ,function(){
//         return view('category');
//     });
// });


