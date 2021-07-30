<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DapurShare</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .dropdown:focus-within .dropdown-menu {
          opacity:1;
          transform: translate(0) scale(1);
          visibility: visible;
        }
        li{
            list-style: none;
            background: #e2e2e2;
            margin-left: 5px;
            text-align: center;
            border-radius:5px;
        }
        li span{
            font-size: 20px;
        }
        ul li{
            display: inline-block;
            padding: 10px 10px 5px;
        }
        #social-links{
            float: left;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen ">
    
    <header class="bg-blue-400">
            <nav class="flex justify-between w-full bg-blue-400 text-white p-4">
                <a href="{{ url('/') }}"><span class="font-semibold text-xl tracking-tight">DapurShare</span></a>
                
                <div class="md:items-center md:w-auto flex text-sm" v-else>
                @guest
                    @if (Route::has('login'))
                    <a class="p-2 ml-2 bg-teal-500 text-teal-500 font-semibold leading-none border border-gray-100 rounded hover:border-transparent hover:bg-indigo-400" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif
                
                    
                    @if (Route::has('register'))
                    <a class="p-2 ml-2 bg-teal-500 text-gray-100 font-semibold leading-none border border-teal-600 rounded hover:border-transparent hover:bg-indigo-400" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif

                @else
                <div class=" relative inline-block text-left dropdown">
                    <span class="rounded-md shadow-sm">
                        <button class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" 
                        type="button" aria-haspopup="true" aria-expanded="false" aria-controls="headlessui-menu-items-117">
                        
                        <span>{{ Auth::user()->name }}</span>
                        
                        <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </span>
                    
                    <div class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                        <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                            <div class="py-1">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" tabindex="3" class="text-gray-700 flex px-2 py-2 text-sm leading-5 text-right"  role="menuitem" >{{ __('Logout') }}</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                            </div>
                        </div>
                    </div>
                </div>
                @endguest 
                </div>
            </nav>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>
        
    <footer class="footer bg-white relative pt-1 border-b-2 border-blue-700 my-auto">
        <div class="container mx-auto px-6">
            <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
                <div class="sm:w-2/3 text-center py-6">
                    <p class="text-sm text-blue-700 font-bold mb-2">
                        © 2021 by DapurShare Dev.
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
