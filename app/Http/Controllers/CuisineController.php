<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuisineController extends Controller
{
    //
    public function american()
    {
        return view('american.americancuisine');
    }

    public function chinese()
    {
        return view('chinese.chinesecuisine');
    }
    public function italian()
    {
        return view('italian.italiancuisine');
    }
    public function malaysian()
    {
        return view('malaysian.malaysiancuisine');
    }
    public function japanese()
    {
        return view('japanese.japanesecuisine');
    }

}
