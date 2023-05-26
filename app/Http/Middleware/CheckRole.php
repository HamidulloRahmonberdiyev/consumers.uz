<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user()->role->name == 'owner') {
            return $next($request); 
        } elseif ($request->user()->role->name == 'manager') {
            return $next($request); 
        } else {
            return abort(403); 
        }
    }
}
