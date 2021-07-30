<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CuisineController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/americancuisine', 'App\Http\Controllers\CuisineController@american');
Route::get('/chinesecuisine', 'App\Http\Controllers\CuisineController@chinese');
Route::get('/malaysiancuisine', 'App\Http\Controllers\CuisineController@malaysian');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/nasilemak', 'App\Http\Controllers\RecipeController@nasilemak');
Route::get('/nasikerabu', 'App\Http\Controllers\RecipeController@nasikerabu');
Route::get('/lemang', 'App\Http\Controllers\RecipeController@lemang');
Route::get('/apambalik', 'App\Http\Controllers\RecipeController@apambalik');
Route::get('/rendangayam', 'App\Http\Controllers\RecipeController@rendangayam');


