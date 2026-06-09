<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwitchController extends Controller
{
    public function index()
    {
        return view('switchform');
    }

    public function show(Request $request)
    {
        return view(
            'switchresult',
            [
                'number' => $request->number
            ]
        );
    }
}