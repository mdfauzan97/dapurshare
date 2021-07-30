@extends('layouts.app')

@section('content')
<div class="mt-48 mb-48">
  <div class="text-center">
    <h4 class="text-2xl">
    Type of Cuisine
    </h4>
    <h2>
    you can learn recipes from any cuisine listed.
    </h2>
  </div>
  <div class="flex flex-wrap overflow-hidden text-sm text-center lg:grid-cols-5 gap-7 mt-10 justify-center">

    <div class="ml-10 shadow-md rounded-md overflow-hidden bg-green-300" >
      <img src="image/malaysiancuisine.png" alt="malaysiancuisine" class="max-w-md h-32 sm:h-48 object-cover" width="300">
        <a class="font-semibold text-lg underline" href="/malaysiancuisine" >Malaysian Cuisine</a>
    </div>

    <div class="ml-10 shadow-md rounded-md overflow-hidden bg-red-300"> 
        <img src="image/americancuisine.jpg" alt="americancuisine" class="max-w-md h-32 sm:h-48 object-cover" width="300">
        <a class="font-semibold text-lg underline" href="/americancuisine" >American Cuisine</a>
    </div>
    
    <div class="ml-10 shadow-2xl rounded-md overflow-hidden bg-blue-300">
      <img src="image/chinesecuisine.jpg" alt="chinesecuisine" class="max-w-md h-32 sm:h-48 object-cover" width="300">
        <a class="font-semibold text-lg underline" href="/chinesecuisine" >Chinese Cuisine</a>
    </div>
    
  </div>
  <br><br>
</div>
@endsection
