<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex min-h-screen sm:items-center py-4 sm:pt-0" style="background-image: url(image/homebg.jpg); background-repeat: no-repeat; background-size:cover">
            
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-white underline leading-none hover:border-transparent rounded font-semibold hover:bg-indigo-400 p-2 ml-2">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-white underline font-semibold leading-none rounded hover:border-transparent hover:bg-indigo-400 p-2 ml-2">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-white underline font-semibold leading-none rounded hover:border-transparent hover:bg-indigo-400 p-2 ml-2">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="object-right text-left ml-24">
                <a href="{{ url('/') }}"class="text-white text-8xl transform-origin:right font-semibold underline">
                DapurShare
                </a>
                <div class="text-4xl text-white">
                    Home of variety and healthy food which come
                </div>
                <div class="text-4xl text-white">
                    from each side of the world
                </div>
            </div>
            
        </div>
    </body>
</html>
