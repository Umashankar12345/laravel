<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\api;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = api::all();
        return  response()->json([
            'status' => 'success',
            'message' => "student retrieved successfully",
            'data' => $data
        ]);
    //     //
    //     return response()->json([
    //         'message' => 'All Products',
    //         'data' => [
    //             ['id' => 1, 'name' => 'Laptop'],
    //             ['id' => 2 , 'name'=> 'Mobile']
    //         ]
    //     ]);
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     return response()->json([
    //         'message' => 'Product created',
    //         'data' => $request->all()
    //     ]);
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     return response()->json([
    //         'message' => 'Single product',
    //         'id' => $id
    //     ]);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     return response() -> json([
    //         'message' => 'Product updated',
    //         'id' => $id,
    //         'data' => $request->all()
    //     ]);
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     return response()->json([
    //         'message' => 'Product deleted',
    //         'id' => $id
    //     ]);
    
    }
}
