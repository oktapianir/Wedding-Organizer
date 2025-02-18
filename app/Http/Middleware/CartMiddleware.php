<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CartMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        \Log::info('CartMiddleware is called');
        // Mengambil data keranjang dari session atau membuat array baru
        if (!$request->session()->has('cart')) {
            $request->session()->put('cart', []);
        }

        // Mengambil data keranjang untuk digunakan di controller
        $cart = $request->session()->get('cart');

        // Simpan data keranjang di request untuk digunakan di controller
        $request->attributes->set('cart', $cart);

        return $next($request);
    }

}
