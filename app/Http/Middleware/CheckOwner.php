<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckOwner
{
    public function handle(Request $request, Closure $next, $owner): Response
    {
        if ($request->user()->role->name !== $owner) {
            abort(403);
        }   
        return $next($request);
    }
}
