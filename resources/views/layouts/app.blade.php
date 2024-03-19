<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AnimalHub</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">

        {{-- <div class="music-bar bg-black text-white py-2 px-6 flex justify-between items-center">
            <div class="music-player">
                Music Player
            </div>
            <div class="music-info">
                Now Playing: Song Name
            </div>
        </div> --}}



        <header class="navbar py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="navapp">
                      <img src="../../images/animallogo.png"  style="width: 300px; height: auto" alt="Animalhub" />
                    </a>
                </div>
                <nav class="navbarlist font">
                    <a class="no-underline hover:underline" href="/">home
                        <img src="../../images/dogpaw.png" class="inline-block h-6 w-7">
                    </a>
                    

                        <a class="no-underline hover:underline  ml-1.5" href="/blog">blog</a>
                        <a class="no-underline hover:underline ml-1.5" href="/sharehub">gallery</a>
                        <a class="no-underline hover:underline ml-1.5" href="/quiz">quiz</a>



                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('register') }}</a>
                        @endif
                        @else
                        <span class="username">{{ Auth::user()->name }}</span>
                        <a href="{{ route('logout') }}" class="no-underline hover:underline"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>
</html>
