@extends('layouts.app')

@section('content')
<div class="mx-auto sm:px-4 mt-32">
    <div class="flex flex-wrap  justify-center">
        <div class="md:w-2/3 pr-4 pl-4">

            <div class="relative py-3 sm:max-w-xl mx-auto text-center">
                <span class="text-2xl font-light">Register New Accpunt</span>
                <div class="relative mt-4 bg-white shadow-md sm:rounded-lg text-left">
                <div class="h-2 bg-indigo-400 rounded-t-md"></div>
                <div class="py-6 px-8">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="block font-semibold">{{ __('Name') }}</label>
                            <input id="name" type="text" placeholder="Your Name" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md @error('name') bg-red-700 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="hidden mt-1 text-sm text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="mb-3">
                            <label for="email" class="block font-semibold">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" placeholder="Your E-mail Address" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md @error('email') bg-red-700 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="hidden mt-1 text-sm text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="block font-semibold">{{ __('Password') }}</label>
                            <input id="password" type="password" placeholder="Your Password" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md @error('password') bg-red-700 @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="hidden mt-1 text-sm text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="mb-4 flex flex-wrap ">
                            <label for="password-confirm" class="block font-semibold">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" placeholder="Re-enter your password" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md" name="password_confirmation" required autocomplete="new-password">
                            
                        </div>

                        <div class="flex items-baseline">
                                <button type="submit" class="mt-4 bg-indigo-500 text-white py-2 px-6 rounded-lg">
                                    {{ __('Register') }}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
