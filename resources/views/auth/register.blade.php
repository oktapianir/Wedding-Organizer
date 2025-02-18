{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-wrapper">
        <form action="{{ route('register') }}">
            <h2>Register</h2>
            <!-- Name -->
            <div class="input-field">
                <input type="text" required>
                <label>Name</label>
            </div>
            <!-- Email -->
            <div class="input-field">
                <input type="email" required>
                <label>Email</label>
            </div>
            <!-- Phone -->
            <div class="input-field">
                <input type="tel" required>
                <label>Phone</label>
            </div>
            <!-- Address -->
            <div class="input-field">
                <input type="text" required>
                <label>Address</label>
            </div>
            <!-- Password -->
            <div class="input-field">
                <input type="password" required>
                <label>Password</label>
            </div>
            <!-- Confirm Password -->
            <div class="input-field">
                <input type="password" required>
                <label>Confirm Password</label>
            </div>
            <!-- Submit Button -->
            <button type="submit">Register</button>
            <!-- Login Option -->
            <div class="account-options">
                <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html> --}}

{{-- 

<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-wrapper">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h2>Register</h2>
            <!-- Name -->
            <div class="input-field">
                <input type="text" name="name" value="{{ old('name') }}" required>
                <label>Name</label>
            </div>
            <!-- Email -->
            <div class="input-field">
                <input type="email" name="email" value="{{ old('email') }}" required>
                <label>Email</label>
            </div>
            <!-- Phone -->
            <div class="input-field">
                <input type="tel" name="no_handphone" value="{{ old('no_handphone') }}" required>
                <label>Phone</label>
            </div>
            <!-- Address -->
            <div class="input-field">
                <input type="text" name="alamat" value="{{ old('alamat') }}" required>
                <label>Address</label>
            </div>
            <!-- Password -->
            <div class="input-field">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <!-- Confirm Password -->
            <div class="input-field">
                <input type="password" name="password_confirmation" required>
                <label>Confirm Password</label>
            </div>
            <!-- Submit Button -->
            <button type="submit">Register</button>
            <!-- Login Option -->
            <div class="account-options">
                <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>

<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div class="mt-4">
            <x-input-label for="no_handphone" :value="__('Phone')" />
            <x-text-input id="no_handphone" class="block mt-1 w-full" type="text" name="no_handphone" :value="old('no_handphone')" required />
            <x-input-error :messages="$errors->get('no_handphone')" class="mt-2" />
        </div>

        <!-- Address -->
        <div class="mt-4">
            <x-input-label for="alamat" :value="__('Address')" />
            <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')" required />
            <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
