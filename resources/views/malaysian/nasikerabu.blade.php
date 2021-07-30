@extends('layouts.app')

@section('content')
<div class="mt-4 ml-3 flex hover:underline  hover:text-gray-700">
  <a href="/malaysiancuisine" class="text-lg font-semibold">
  <img src="/image/backbutton.png" alt="backbutton" width="25" height="15"><span>Malaysian Cuisine</span>
  </a>
</div>    
<div class=" bg-gray-600 flex justify-center">
      <div class="flex flex-col max-w-lg bg-white px-10 py-6 rounded-xl mt-10 mb-10">
        <div class="flex justify-between">
          <h3 class="font-serif font-bold text-gray-900 text-xl">Nasi Lemak</h3>
          
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
        
        
        <img class="w-full rounded-md" src="/image/nasikerabu.jpg" alt="nasikerabu" />
        <p class="text-center leading-relaxed mt-3 mb-3 border-b-2 border-t-2 border-gray-600">A dish originating in Malay Cuisine that consist of fragrant rice cooked in coconut milk and pandan leaf. Commonly found in Malaysia, where it is considered as national dish.</p>
        
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
              578 Calories, Full Nutrition
              (19.5g protein, 57.4g carbohydra@extends('layouts.app')

              @section('content')    
              <div class="flex justify-center">
                    <div class="flex flex-col max-w-lg bg-white border-2 shadow-md px-10 py-6 rounded-xl mt-10 mb-10">
                      <div class="flex justify-between">
                        <h3 class="font-serif font-bold text-gray-900 text-xl">Lemang</h3>
                        
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
                      
                      
                      <img class="w-full rounded-md" src="/image/lemang.jpg" alt="lemang" />
                      <p class="text-center leading-relaxed mt-3 mb-3 border-b-2 border-t-2 border-gray-600">Lemang is an iconic food during Hari Raya Festive. During Hari Raya Festive, Lemang are usually replace white rice to eat up  with other dishes. Traditionally, Lemang are made by putting in marinated glutinous rice into bamboo and will be roast.
                        
                      </p>
                      
                      <div class="border-b-2 border-gray-600">
                        <div class="min-w-screen inline-flex items-center">
                          <img src="/image/time.png" alt="time" width="15" height="15" class="mr-1">
                          <h2 class="font-bold underline font-serif text-center text-lg">
                            Cook Time:
                          </h2>
                          <p class="ml-5 font-thin">
                            6 hours, 40 minutes
                          </p>
                        </div>
                        <div class="min-w-screen inline-flex items-center">
                          <img src="/image/nutrition.png" alt="nutrition" width="15" height="15" class="mr-1">
                          <h2 class="font-bold underline font-serif text-center text-lg">
                            Nutrition: 
                          </h2>
                          <p class="ml-5 font-thin">
                            206 Calories, Full Nutrition
                            (0 protein, 8 carbohydrate,
                            2 fat )
                          </p>
                        </div>
                        <div class="min-w-screen inline-flex items-center mb-3">
                          <img src="/image/serving.png" alt="nutrition" width="20" height="20" class="mr-1">
                          <h2 class="font-bold underline font-serif text-center text-lg">
                            Serving:
                          </h2>
                          <p class="ml-5 font-thin">2 Servings</p>
                        </div>
                      </div>
                      <div class="min-w-screen items-center mt-3 border-b-2 border-gray-600">
                        <div class="min-w-screen inline-flex items-center">
                          <img src="/image/ingredients.png" alt="time" width="20" height="20" class="mr-1">
                          <h2 class="font-bold underline font-serif text-center text-lg">
                            Ingredients:
                          </h2><br>
                        </div>
                        <p class="font-thin py-7">
                          1. 400g glutinous rice <br>2. 200ml coconut milk <br>3. 1 tablespoon salt <br>4. 2 leaves banana leaf
                      </div>
                      <div class="min-w-screen items-center mt-3 border-b-2 border-gray-600">
                        <div class="min-w-screen inline-flex items-center">
                          <img src="/image/tips.png" alt="tips" width="20" height="20" class="mr-1">
                          <h2 class="font-bold underline font-serif text-centertext-lg">
                            Cooking Tips:
                          </h2><br>
                        </div>
                        <p class="font-thin mb-5">
                          You can wrap the glutinous rice however you want, but make sure it is tightly seal so it won't leak during the steaming process.
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
              
            </p>
          </div>
          <div class="min-w-screen inline-flex items-center mb-3">
            <img src="/image/serving.png" alt="nutrition" width="20" height="20" class="mr-1">
            <h2 class="font-bold underline font-serif text-center text-lg">
              Serving:
            </h2>
            <p class="ml-5 font-thin">2 Servings</p>
          </div>
        </div>
        <div class="min-w-screen items-center mt-3 border-b-2 border-gray-600">
          <div class="min-w-screen inline-flex items-center">
            <img src="/image/ingredients.png" alt="time" width="20" height="20" class="mr-1">
            <h2 class="font-bold underline font-serif text-center text-lg">
              Ingredients:
            </h2><br>
          </div>
          <p class="font-semibold underline">a) For Rice preparation</p>
          <p class="font-thin py-7">
            1. 1 Tablespoon coconut milk <br> 2. 1 tablespoon water <br> 3. 5/8 teaspoon ginger <br>
            4. 1/2 inch sliced ginger <br> 5. Salt <br> 6. 2 pandan leaves tied into a knot <br> 7. 1 tablespoon basmati rice, rinsed and drained
          </p>
          <p class="font-semibold underline">b) For Garnish preparation</p>
          <p class="font-thin py-7">
            1. 1 Egg <br> 2. 1/4 cucumber <br> 3. 1/4 cup oil <br>
            4. 1/4 cup raw peanuts <br> 5. 1/4 package of washed anchovies
          </p>
          <p class="font-semibold underline">b) For Sambal preparation</p>
          <p class="font-thin py-7">
            1. 2 tablespoon vegetable oil <br> 2. 1 sliced medium onion <br> 3. 3 cloves garlic, thinly sliced  <br> 4. 2 teaspoons chile paste <br> 5. 1 package washed white anchovies <br> 6. Salt <br> 7. 3 tablespoons white sugar <br> 1/4 cup tamarind juice
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
            1. In a medium saucepan over medium heat, stir together coconut milk, water, ground ginger, ginger root, salt, bay leaf, and rice. Cover, and bring to a boil. Reduce heat, and simmer for 20 to 30 minutes, or until done.
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
            1. In a medium saucepan over medium heat, stir together coconut milk, water, ground ginger, ginger root, salt, bay leaf, and rice. Cover, and bring to a boil. Reduce heat, and simmer for 20 to 30 minutes, or until done. <br><br> 2. Place eggs in a saucepan, and cover with cold water. Bring water to a boil, and immediately remove from heat. Cover, and let eggs stand in hot water for 10 to 12 minutes. Remove eggs from hot water, cool, peel and slice in half. Slice cucumber. <br><br> 3. Meanwhile, in a large skillet or wok, heat 1 cup vegetable oil over medium-high heat. Stir in peanuts and cook briefly, until lightly browned. Remove peanuts with a slotted spoon and place on paper towels to soak up excess grease. Return skillet to stove. Stir in the contents of one package anchovies; cook briefly, turning, until crisp. Remove with a slotted spoon and place on paper towels. Discard oil. Wipe out skillet. <br><br>
            4. Heat 2 tablespoons oil in the skillet. Stir in the onion, garlic, and shallots; cook until fragrant, about 1 or 2 minutes. Mix in the chile paste, and cook for 10 minutes, stirring occasionally. If the chile paste is too dry, add a small amount of water. Stir in remaining anchovies; cook for 5 minutes. Stir in salt, sugar, and tamarind juice; simmer until sauce is thick, about 5 minutes. <br><br> 5. Serve the onion and garlic sauce over the warm rice, and top with peanuts, fried anchovies, cucumbers, and eggs.
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
