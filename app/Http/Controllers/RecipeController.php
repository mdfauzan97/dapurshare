<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jorenvh\Share\ShareFacade as Share;

class RecipeController extends Controller
{
    //
    public function nasilemak()
    {
        $socialShare = \Share::page(
            'http://127.0.0.1:8000/nasilemak',
            'Learnt to cook Delicious Nasi Lemak',
        )
        ->facebook()
        ->twitter()
        ->whatsapp()
        ->telegram();

        return view('malaysian.nasilemak', compact ('socialShare'));
    }
    public function nasikerabu()
    {
        $socialShare = \Share::page(
            'http://127.0.0.1:8000/nasikerabu',
            'Learnt to cook Delicious Nasi Kerabu',
        )
        ->facebook()
        ->twitter()
        ->whatsapp()
        ->telegram();

        return view('malaysian.nasikerabu', compact ('socialShare'));
    }
    public function apambalik()
    {
        $socialShare = \Share::page(
            'http://127.0.0.1:8000/apambalik',
            'Learnt to cook Delicious Apam Balik',
        )
        ->facebook()
        ->twitter()
        ->whatsapp()
        ->telegram();

        return view('malaysian.apambalik', compact ('socialShare'));
    }
    public function lemang()
    {
        $socialShare = \Share::page(
            'http://127.0.0.1:8000/lemang',
            'Learnt to cook Delicious Lemang',
        )
        ->facebook()
        ->twitter()
        ->whatsapp()
        ->telegram();

        return view('malaysian.lemang', compact ('socialShare'));
    }
    public function rendangayam()
    {
        $socialShare = \Share::page(
            'http://127.0.0.1:8000/rendangayam',
            'Learnt to cook Delicious Rendang Ayam',
        )
        ->facebook()
        ->twitter()
        ->whatsapp()
        ->telegram();

        return view('malaysian.rendangayam', compact ('socialShare'));
    }
}
