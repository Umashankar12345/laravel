<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUser
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->query('user') == 'admin') {
            return $next($request);
        }

        return response("Unauthorized", 401);
    }
}