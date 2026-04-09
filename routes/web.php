<?php

// use App\Http\Controllers\ReservationController;

// Route::get('/reservation', [ReservationController::class, 'create']);
// Route::post('/reservation', [ReservationController::class, 'store']); -->

// use App\Http\Controllers\ReservationController;

// Route::get('/reservation', [ReservationController::class, 'create']);

// Route::post('/reservation', [ReservationController::class, 'store']);
// use Illuminate\Support\Facades\Route;
// // use App\Http\Controllers\UmaController;

// use App\Http\controllers\studentController;


// Route::get('/user' ,[UmaController::class , 'show']);


// Route::get('/student' ,[studentController::class , 'student']);
// Route::get('/students' ,[studentController::class , 'students']);
// Route::get('/course/{course}' ,[studentController::class , 'course']);
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



// Routing 
//heaader
//  use Illuminate\Support\Facades\Route; 
//  use App\Http\Controllers\UserController;
// Route::prefix('admin')->group(function(){
//     Route::get('/users' , function(){

//     });
// });


// Route::get('/header' , function() {
//     return response("Hello world")
//     ->header('content-Type' , 'text-plain')
//     ->header('X-Custom-Header' , 'Laravel');
// });


// Route::get('/header' , function(){
//         return response()->json([
//             'name' => 'uma',
//             'course' => 'Laravel',
//             'age' => 38
//         ]);
// });

// //cokkie 
// Route::get('/set-cookie' , function(){
//     return  response ("cookie set")
//     ->cookie('username' , 'Ajay' , 1)
//     ->cookie('role' , 'admin' , 1);
// });
// Route::get('get=cookie' , function(Illuminate\Http\Request $_request){
//     return $request->cookie('username');
// });

// Route::get('/dashboard' , function(){
//     // return 'This is a my dashboard page';
//     return "  umasss Dashboard";
// })->name('dashboard');

// Route::get('/new-dashboard' , function(){
//     // return redirect('/dashboard')
//     return redirect() ->route('dashboard');
//     // ->with('success' , 'Login Successful');
// });

//named route passed data in url 
// Route::get('/dashboard/{name}',function($name){
//     return   "welcome to dashboard". $name;
// })->name('dashboard');

// Route::get('/new-dashboard' , function(){
//     return redirect() ->route('dashboard', ['name' => 'Uma'] );
// });

// Route::get('/dashboard/{name}/{id}' ,function($name , $id){
   
//       return "Welcome to your dashboard: Name = " . $name . " ID = " . $id;
// })->name('dashboard');

// Route::get('/new-dashboard' , function(){
//     return redirect() ->route('dashboard' ,[
//         'name' => 'Uma' ,
//          'id' => '234a'
//          ]);
// });

// //help of your controller
// //login
// Route::get('/login' , function(){
//     $email = request('email');
//     $password = request('password');
//     if($email == "Uma@gmail.com" && password == "1234456y"){
//         return redirect()->route('dashboard')
//         ->with('success' , 'login Successful');
//     }
//     return redirect()->back()
// 


                            //unit3
 use Illuminate\Support\Facades\Route; 
 // use Illuminate\Http\Request;
// use App\Http\Controllers\StudentCController;
// Use App\Http\Controllers\ProductController;
// use App\Http\Controllers\ApiController;
// use App\http\controllers\singleActionController;

// Route::get('/ab' , [StudentCController::class, 'student' ]);


// Route::get('/sudent-profile' , [studentCController::class, 'profile'])
//product list
// Route::get('/product' , [ProductController ::class , 'index']);

// Route::get('/products{id}' , [productController::class, 'show']) ->name('product.show');

// Route::get('/product-redirect' , [ProductController::class , 'redirectToproduct']);


// Route::resource('products' , ProductController::class);

// Route::apiResource('products' , ApiController::class);

//Route::get('/single' , SingleActionController::class);



//middleware
//use App\Http\Controllers\UmaController;

// Route::get('/test', [UmaController::class, 'students']);
// Route::get('/test' , function(){
//     return view('welcome');
// });
// Route::get('/about' , function(){
//     return view('About');
// });

//
// Route::get('/home' ,  function(){
//     return view('home');
// });
use App\Http\Controllers\classController;

// Route::get('/student', [classController::class, 'index']);


Route::get('/home' , function(){
    return view('home');
})->name('home');

Route::get('/about' , function(){
    return view('about');
})->name('about');
Route::get('/class', [classController::class, 'index']);