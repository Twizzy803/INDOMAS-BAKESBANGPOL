<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('..\css\style.css')}}">
    <title>INDOMAS</title>
</head>
<body>
    <div class="login">
        <div class="logo_login">
            <img class="lg-batu" src="{{asset('img\logobatu.png')}}" alt="">
            <img class="lg-kesbang" src="{{asset('img\KESBANG.png')}}" alt="">
        </div><br>
        @if ($errors->all())
        <button class="btn btn-danger mb-4 uppercase" style="margin-top: 2%; width:40%">
            Email atau kata sandi salah!
        </button>
    @endif
        <div class="card card-login">
            <form class="form_login" action="{{ route('login') }}" method="POST">
                @csrf
                <h2>Login</h2>
                    <input type="email" name="email" id="email" placeholder="Email" required><br><br>
                    <input type="password" name="password" id="password" placeholder="Password" required><br>
                <button class="masukbutton"
                    name="masuk" type="submit">MASUK</button>
            </form>
          </div>
    
</body>
</html>
{{-- <x-guest-layout>
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
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
