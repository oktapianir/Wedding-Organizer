<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Kernel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }


    // protected $routeMiddleware = [
    //     // Middleware lainnya...
    //     'admin' => \App\Http\Middleware\Admin::class,
    // ];
    
    protected $routeMiddleware = [
        // Middleware lainnya...
        'admin' => \App\Http\Middleware\Admin::class,
        'cart' => \App\Http\Middleware\CartMiddleware::class,
    ];
        
}
