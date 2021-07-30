@extends('layouts.app')

@section('content')    
<div class="mt-4 ml-3 flex hover:underline  hover:text-gray-700">
  <a href="/malaysiancuisine" class="text-lg font-semibold">
  <img src="/image/backbutton.png" alt="backbutton" width="25" height="15"><span>Malaysian Cuisine</span>
  </a>
  </div>
  <div class="flex justify-center">
        <div class="flex flex-col max-w-lg bg-white border-2 shadow-md px-10 py-6 rounded-xl mt-10 mb-10">
          <div class="flex justify-between">
          <h3 class="font-serif font-bold text-gray-900 text-xl">Apam Balik</h3>
          
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
        
        
        <img class="w-full rounded-md" src="/image/apambalik.jpg" alt="apambalik">
        <p class="text-center leading-relaxed mt-3 mb-3 border-b-2 border-t-2 border-gray-600">Apam Balik also known as Malaysian Pancake that is popular food which sold at food stalls. There are two types of apam balik we can see outside, the thick apam balik and think apam balik.</p>
        
        <div class="border-b-2 border-gray-600">
          <div class="min-w-screen inline-flex items-center">
            <img src="/image/time.png" alt="time" width="15" height="15" class="mr-1">
            <h2 class="font-bold underline font-serif text-center text-lg">
              Cook Time:
            </h2>
            <p class="ml-5 font-thin">
              30 minutes
            </p>
          </div>
          <div class="min-w-screen inline-flex items-center">
            <img src="/image/nutrition.png" alt="nutrition" width="15" height="15" class="mr-1">
            <h2 class="font-bold underline font-serif text-center text-lg">
              Nutrition: 
            </h2>
            <p class="ml-5 font-thin">
              155 Calories, Full Nutrition
              (4g protein, 16g carbohydrate,
              9g fat )
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
          <p class="font-semibold underline">a) For Apam Balik Dough</p>
          <p class="font-thin mb-4">
            1. 2 cup of wheat flour <br> 2. 1/4 cup of sugar  <br> 3. 1 tablespoon soda bicorbonate  <br>
            4. 1 tablespoon of baking powder <br> 5. 1 egg <br> 6. 1,1/2 cup of full creamer <br> 7. 1 teaspoon of salt <br>8. Oil <br>9. Yellow colour liquid
          </p>
          <p class="font-semibold underline">b) For Apam Balik Filling</p>
          <p class="font-thin mb-4">
            1. Peanuts <br> 2.Sugar <br>3. Creamed Corn
          </p>
        </div>
        <div class="min-w-screen items-center mt-3 border-b-2 border-gray-600">
          <div class="min-w-screen inline-flex items-center">
            <img src="/image/tips.png" alt="tips" width="20" height="20" class="mr-1">
            <h2 class="font-bold underline font-serif text-centertext-lg">
              Cooking Tips:
            </h2><br>
          </div>
          <p class="font-thin mb-5">
            Use a nonstick pan which is slight higher on the side to make apam balik's sides more crispy. <br> Use 1:1 ratio of sugar and peanuts for the filling.
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
            1. Mix wheat flour with baking powder, soda bicarbonate and salt in a single pot. <br><br> 2. Mix evenly 1 egg and 1/4 cup of sugar in a bowl and then add yellow colour liquid and 1 and 1/2 cup of creamer, mix it evenly. <br><br> 3. Combine both mixture and stirred until the dough become smooth and not lumpy.<br><br>
            4. Let the combined mixture marinated for 1 hour. Meanwhile, heat up nonstick pan and clean up it surfaces using tissues or clean cloth. Then cover up the pan surface with a thin layer of oil. <br><br> 5. Pour the batter approximately one spoon or more. Leave for a while until the air bubbles rise. <br><br> 6. Sprinkle a little sugar, corn and peanuts. Fold and lift the apam back and cut into wedges.

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
