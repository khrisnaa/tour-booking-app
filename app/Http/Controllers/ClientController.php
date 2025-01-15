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
        $promoTours = TourPackage::orderBy('created_at')->get();
        return view('public.home.index', compact('tours', 'promoTours'));
    }

    public function tours(Request $request)
    {
        $search = $request->input('search');

        // Fetch categories
        $categories = Category::take(2)->get();

        // If search exists, filter tours based on search query
        $tours = collect(); // Initialize with an empty collection
        if ($search) {
            $tours = TourPackage::where('name', 'like', '%'.$search.'%')->get();
        }

        // Return view with tours and categories
        return view('public.tours.index', compact('tours', 'categories', 'search'));
    }

    public function favorites()
    {
        return view('public.favorites.index');
    }

    public function category(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $search = $request->input('search');

        // Apply filter to tour packages if search query is present
        $tours = $category->tourPackages()
            ->where('name', 'like', '%'.$search.'%') // Assuming 'name' is the column for tour name
            ->get();
        return view('public.category.index', compact('tours', 'category'));
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
