@extends('layouts.app')

@section('content')    
<div class="flex justify-center">
      <div class="flex flex-col max-w-lg bg-white border-2 shadow-md px-10 py-6 rounded-xl mt-10 mb-10">
        <div class="flex justify-between">
          <h3 class="font-serif font-bold text-gray-900 text-xl">Chicken Rendang</h3>
          
          <div class="relative inline-block text-left dropdown">
            <span>
                <button class="inline-flex justify-center w-full px-4 text-sm font-medium leading-5 text-gray-900 transition duration-150 ease-in-out rounded-md  focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" type="button" aria-haspopup="true" aria-expanded="false" aria-controls="headlessui-menu-items-117">
                <span class="text-xl">
                Share
                </span>
                <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </span>
            <div class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
              <div class="absolute right-0 w-12 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                  <div class="py-1">
                      <a href="{{ route('logout') }}" tabindex="3" class="text-gray-700 flex px-2"  role="menuitem" >{!! $socialShare !!}</a><br>
                  </div>
              </div>
          </div>
          </div>
          
        </div>
        
        
        <img class="w-full rounded-md" src="/image/rendangayam.jpg" alt="rendangayam" />
        <p class="text-center leading-relaxed mt-3 mb-3 border-b-2 border-t-2 border-gray-600">An Malaysian-Indonesian chicken stew with spices and coconut milk. It can be paired up with white rice or lemang. 
        </p>
        
        <div class="border-b-2 border-gray-600">
          <div class="min-w-screen inline-flex items-center">
            <img src="/image/time.png" alt="time" width="15" height="15" class="mr-1">
            <h2 class="font-bold underline font-serif text-center text-lg">
              Cook Time:
            </h2>
            <p class="ml-5 font-thin">
              1 hour
            </p>
          </div>
          <div class="min-w-screen inline-flex items-center">
            <img src="/image/nutrition.png" alt="nutrition" width="15" height="15" class="mr-1">
            <h2 class="font-bold underline font-serif text-center text-lg">
              Nutrition: 
            </h2>
            <p class="ml-5 font-thin">
              383 Calories, Full Nutrition
              (40 protein, 20 carbohydrate,
              40 fat )
            </p>
          </div>
          <div class="min-w-screen inline-flex items-center mb-3">
            <img src="/image/serving.png" alt="nutrition" width="20" height="20" class="mr-1">
            <h2 class="font-bold underline font-serif text-center text-lg">
              Serving:
            </h2>
            <p class="ml-5 font-thin">4 Servings</p>
          </div>
        </div>
        <div class="min-w-screen items-center mt-3 border-b-2 border-gray-600">
          <div class="min-w-screen inline-flex items-center">
            <img src="/image/ingredients.png" alt="time" width="20" height="20" class="mr-1">
            <h2 class="font-bold underline font-serif text-center text-lg">
              Ingredients:
            </h2><br>
          </div>
          <p class="font-semibold underline">b) For Main preparation</p>
          <p class="font-thin mb-4">
            1. A whole chicken <br>2. 1 spoon of chili powder <br>3. 1 big bowl of coconut milk <br>4. 1 small bowl of tamarind <br>5. tablespoon of kerisik <br>6. 3 leaves of tumeric leaf <br>7. 2 leaves of kaffir lime leaf <br>8. Salt <br>9. Sugar <br>10. 1 big bowl of oil for stir-fry spices <br> 11. 1 onion <br>12. 8 red onions <br>13. 5 cloves of garlic <br>14. 2 lemongrass <br>15. 2 inch of halia <br>16. 2 inch of galangal <br>17. 3 tumeric
          </p>
          <p class="font-semibold underline">b) For Stir-fry Spices preparation</p>
          <p class="font-thin mb-4">
            1. 2 piece of cinnamons <br>2. 3 buds of star anise <br>3. 3 piece of cardamom
          </p> </div>
        <div class="min-w-screen items-center mt-3 border-b-2 border-gray-600">
          <div class="min-w-screen inline-flex items-center">
            <img src="/image/tips.png" alt="tips" width="20" height="20" class="mr-1">
            <h2 class="font-bold underline font-serif text-centertext-lg">
              Cooking Tips:
            </h2><br>
          </div>
          <p class="font-thin mb-5">
            If you are afraid of the chicken being crushed, you can remove the cooked chicken and cook the gravy until it thickens. <br> Can use palm sugar to replace sugar in your cooking.
          </p>
        </div>
        <div class="min-w-screen items-center mt-3 border-b-2 border-gray-600">
          <div class="min-w-screen inline-flex items-center">
            <img src="/image/steps.png" alt="steps" width="20" height="20" class="mr-1">
            <h2 class="font-bold underline font-serif text-centertext-lg">
              Cooking Steps:
            </h2><br>
          </div>
          <p class="font-semibold mb-5">
            1. Soak 400g glutinous rice in water for 6 hours, rinse dry and put aside. <br><br>2. Mix up 200ml of coconut milk and 1 tablespoon of salt in a pot and let it simmer  for 10 minutes. Then add soaked glutinous rice  into the pot and cook it for 10 minutes, stirring occasionally. <br><br>3. Cut banana leaf into a half, stuff glutinous rice mixture in the middle of the banana leaf and roll then wrap everything up, seal both ends with toothpicks. Transfer to steamer and steam for 20 minutes. Ready to serve.
          </p>
        </div>
        <div class="min-w-screen items-center mt-3 mb-3 border-b-2 border-gray-600">
          <div class="min-w-screen text-center">
            <h4 class="font-semibold mb-3">
              Enjoy and Have Fun Cooking with Us!!
            </h4>
          </div>
        </div>

          
        
      </div>
    
  </div>
@endsection
