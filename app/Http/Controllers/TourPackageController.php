<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\TourPackage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TourPackage\StoreTourPackageRequest;

class TourPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.tour-packages.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.tour-packages.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTourPackageRequest $request)
    {
        DB::transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails/'.date('Y/m/d'), 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }

            $validated['slug'] = Str::slug($validated['name']);

            $packageTour = TourPackage::create($validated);

            if ($request->hasFile('photos')) {
                foreach ($request->file('photos') as $photo) {
                    $photoPath = $photo->store('tour_photos/'.date('Y/m/d'), 'public');
                    $packageTour->tourPhotos()->create([
                        'photo' => $photoPath
                    ]);
                }
            }
        });

        return redirect()->route('admin.tour-packages.index')->with('success', ['title' => 'Successfully created', 'description' => 'You have successfully created a tour package']);
    }

    /**
     * Display the specified resource.
     */
    public function show(TourPackage $tourPackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource. 
     */
    public function edit(TourPackage $tourPackage)
    {

        $categories = Category::orderBy('name')->get();
        return view('admin.tour-packages.edit', compact(['tourPackage', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TourPackage $tourPackage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TourPackage $tourPackage)
    {
        //
    }
}
