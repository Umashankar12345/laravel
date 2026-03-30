<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 👇 ye line MUST honi chahiye
use App\Http\Controllers\Controller;

class UmaController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkcourse');
    }

    public function students()
    {
        return 'Laravel Course';
    }

    public function profile()
    {
        return [
            'name' => 'Auto',
            'role' => 'admin',
            'id' => 1
        ];
    }
}