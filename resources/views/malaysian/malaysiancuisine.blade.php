@extends('layouts.app')

@section('content')
<div class="mt-32 mb-10">
  <div class="text-center">
    <h4 class="text-2xl font-semibold font-mono">
    Malaysian Cuisine
    </h4>
  </div>
  <div class="flex flex-wrap overflow-hidden text-sm text-center lg:grid-cols-5 gap-7 mt-10 justify-center">

    <div class="ml-10 shadow-md rounded-md overflow-hidden bg-red-300"> 
      <img src="image/nasilemak.jpg" alt="nasilemak" class="max-w-md h-32 sm:h-48 object-cover" width="300">
      <a class="font-semibold text-lg underline" href="/nasilemak" >Nasi Lemak</a>
  </div>
    
    <div class="ml-10 shadow-2xl rounded-md overflow-hidden bg-blue-300">
      <img src="image/lemang.jpg" alt="lemang" class="max-w-md h-32 sm:h-48 object-cover" width="300">
        <a class="font-semibold text-lg underline" href="/lemang" >Lemang</a>
    </div>

    <div class=" ml-10 shadow-md rounded-md overflow-hidden bg-yellow-300" >
      <img src="image/nasikerabu.jpg" alt="nasikerabu" class="w- h-32 sm:h-48 object-cover" width="300">
        <a class="font-semibold text-lg underline" href="/nasikerabu" >Nasi Kerabu</a>
    </div>
    
    <div class="ml-10 shadow-md rounded-md overflow-hidden bg-green-300" >
      <img src="image/apambalik.jpg" alt="apambalik" class="max-w-md h-32 sm:h-48 object-cover" width="300">
        <a class="font-semibold text-lg underline" href="/apambalik" >Apam Balik</a>
    </div>
    
    <div class="ml-10 shadow-md rounded-md overflow-hidden bg-gray-300" >
      <img src="image/rendangayam.jpg" alt="rendangayam" class="max-w-md h-32 sm:h-48 object-cover" width="300">
        <a class="font-semibold text-lg underline" href="/rendangayam" >Chicken Rendang</a>
    </div>
  </div>
  <br><br>
</div>
@endsection
