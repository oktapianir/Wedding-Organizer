<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    // public function store(LoginRequest $request): RedirectResponse
    // {
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     if (Auth::user()->usertype == 'admin') {
    //         return redirect()->intended('admin/dashboard');
    //     } else {
    //         return redirect()->intended('user/dashboard');
    //     }     
    // }

    public function store(LoginRequest $request): RedirectResponse
{
    $request->authenticate();
    $request->session()->regenerate();

    // Set flash message untuk alert
    $request->session()->flash('complete_profile', 'tolong lengkapi data diri anda terlebih dahulu di halaman akun!');

    // Redirect ke dashboard berdasarkan usertype
    if (Auth::user()->usertype == 'admin') {
        return redirect()->intended('admin/dashboard');
    } else {
        return redirect()->intended('user/dashboard');
    }
}


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    } 
 
}
