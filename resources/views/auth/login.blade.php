@extends('layouts.app')

@section('content')
<div class="mx-auto sm:px=4 mt-32">
    <div class="flex flex-wrap justify-center">
        <div class="md:w-2/3 pr-4 pl-4">
            
                <div class="relative py-3 sm:max-w-xl mx-auto text-center">
                    <span class="text-2xl font-light">Login to your account</span>
                    <div class="relative mt-4 bg-white shadow-md sm:rounded-lg text-left">
                    <div class="h-2 bg-indigo-400 rounded-t-md"></div>
                    <div class="py-6 px-8">
                        
                        <form action="{{ route('login') }}" method="POST">
                          @csrf    
                                <div>
                                  <label class="block font-semibold">{{ __('E-Mail Address') }}<label>
                                  <input id="email" type="text" placeholder="Email" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md @error('name') @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                      @error('email')
                                          <span class="hidden mt-1 text-sm text-red" role="alert">
                                              <strong>{{ $message }}<strong>
                                          </span>
                                      @enderror
                                </div>
                              
                                <div>
                                  <label class="block mt-3 font-semibold">{{ __('Password') }}<label>
                                  <input id="password" type="password" placeholder="Password" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md @error('email') @enderror" name="password" required autocomplete="current-password">
                                      @error('password')
                                          <span class="hidden mt-1 text-sm text-red" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror   
                                </div>  
                                
                                <div class="flex justify-between items-baseline">
                                  <button type="submit" class="mt-4 bg-indigo-500 text-white py-2 px-6 rounded-lg">{{ __('Login') }}</button>
                                  @if (Route::has('password.request'))
                                      <a href="{{ route('password.request') }}" class="text-sm hover:underline">Forgot password?</a>
                                  @endif
                                </div>
                        </form>
                          
                      </div>
                    </div>
                  
                  </div>
            
        </div>
    </div>
</div>
@endsection
  