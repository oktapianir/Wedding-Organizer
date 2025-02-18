{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-wrapper">
    <form action="{{ route('login')}}">
        <h2>Login</h2>
       <div class="input-field">
        <input type="text" required>
        <label>Email</label>
       </div>
       <div class="input-field">
        <input type="password" required>
        <label>Password</label>
       </div>
       <div class="password-options">
        <label for="remember">
            <input type="checkbox" id="remember">
            <p>Remember Me</p>
        </label>
        <a href="#"> Forgot password </a>
       </div>
       <button type="submit">Log In</button>
       <div class="account-options">
        <p>Don't have an account? <a href="{{ route('register')}}"> Register</a></p>
</body>
</html> --}}

{{-- 
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-wrapper">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2>Login</h2>
            <!-- Email Address -->
            <div class="input-field">
                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                <label for="email">Email</label>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="input-field">
                <input id="password" type="password" name="password" required autocomplete="current-password">
                <label for="password">Password</label>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="password-options">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember">
                    <p>Remember Me</p>
                </label>
                <a href="{{ route('password.request') }}">Forgot password</a>
            </div>

            <!-- Submit Button -->
            <button type="submit">Log In</button>

            <!-- Register Option -->
            <div class="account-options">
                <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>
