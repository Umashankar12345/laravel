<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create()
    {
        return view('reservation');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        return view('reservation_result', compact('data'));
    }
}