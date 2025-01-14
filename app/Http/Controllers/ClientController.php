<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\TourPackage;
use App\Models\TourPhoto;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function home()
    {
        $tours = TourPackage::orderByDesc('created_at')->get();
        return view('public.home.index', compact('tours'));
    }

    public function tours()
    {
        return view('public.tours.index');
    }

    public function favorites()
    {
        return view('public.favorites.index');
    }

    public function details(TourPackage $tour)
    {
        $categoryId = $tour->category_id;

        $relatedTours = TourPackage::where('category_id', $categoryId)
            ->where('id', '!=', $tour->id)
            ->get();

        $photos = $tour->tourPhotos->take(3);

        return view('public.tours.details', compact('tour', 'relatedTours',
            'photos'));
    }
}
