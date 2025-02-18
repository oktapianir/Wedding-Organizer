<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            // dd($request->all()); // Melihat semua data yang dikirimkan
            // $request->validate([
            //     'name' => ['required', 'string', 'max:255'],
            //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
            //     'no_handphone' => ['required', 'string', 'max:15'],
            //     'alamat' => ['required', 'string', 'max:255'],
            // ]); 
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'no_handphone' => $request->no_handphone,
                'alamat' => $request->alamat,
            ]);
    
            \Log::info('User Created:', $user->toArray());
    
            event(new Registered($user));
            Auth::login($user);
    
            // return redirect(route('dashboard', absolute: false));    
            return redirect()->route('home.index');
        } catch (\Exception $e) {
            \Log::error('Error Creating User:', ['error' => $e->getMessage()]);
            return back()->withErrors(['error' => 'Failed to create user. Please try again later.']);
        }
    }
    
    
}
