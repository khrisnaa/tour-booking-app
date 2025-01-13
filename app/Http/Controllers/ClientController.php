<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function home()
    {
        return view('public.home.index');
    }

    public function tours()
    {
        return view('public.tours.index');
    }

    public function favorites()
    {
        return view('public.favorites.index');
    }

    public function details()
    {

    }
}
