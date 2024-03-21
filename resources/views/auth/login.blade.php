
@extends('layouts.app')

@section('content')

<div class="background-image">
    <main class="bg-cover bg-center pb-10 sm:container sm:mx-auto sm:max-w-lg p-10"> <!-- Removed unnecessary margin classes -->
        <div class="w-full">
            <section class="flex flex-col break-words bg-cool-toned-orange sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
    
            <header class="font-semibold bg-cool-toned-pink text-white py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                {{ __('Login') }}
            </header>

            <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="flex flex-wrap">
                    <label for="email" class="block text-white-700 text-sm font-bold mb-2 sm:mb-4">
                        {{ __('E-Mail Address') }}:
                    </label>

                    <input id="email" type="email"
                        class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="flex flex-wrap">
                    <label for="password" class="block text-white text-sm font-bold mb-2 sm:mb-4">
                        {{ __('Password') }}:
                    </label>

                    <input id="password" type="password"
                        class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                        required>

                    @error('password')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="flex items-center">
                    <label class="inline-flex items-center text-sm text-white" for="remember">
                        <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                            {{ old('remember') ? 'checked' : '' }}>
                        <span class="ml-2">{{ __('Remember Me') }}</span>
                    </label>

                    @if (Route::has('password.request'))
                    <a class="text-sm text-red hover:text-red whitespace-no-wrap no-underline hover:underline ml-auto"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>

                <div class="flex flex-wrap">
                    <button type="submit"
                    class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-white bg-red hover:bg-red sm:py-4 p-10">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('register'))
                    <p class="w-full text-xs text-center text-white my-6 sm:text-sm sm:my-8 pb-10">
                        {{ __("Don't have an account?") }}
                        <a class="text-red hover:text-red no-underline hover:underline" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                    </p>
                    @endif
                </div>
            </form>
        </section>
    </div>
</main>
</div>
@endsection