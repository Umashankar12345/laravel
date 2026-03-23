<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return  'This is my index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'This is my create page';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return   'This is my store method ';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'This is my show function '.$id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
            return 'This is my edit function '.$id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return 'This is my update function' .$id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'This is my delete function' .$id;
    }
}
