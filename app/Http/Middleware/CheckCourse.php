<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckCourse
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->input('course') != 'Laravel') {
            return "Access Denied ❌";
        }

        return $next($request);
    }
}