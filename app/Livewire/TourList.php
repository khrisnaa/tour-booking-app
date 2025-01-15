<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\TourPackage;
use Livewire\Component;

class TourList extends Component
{
    public function render()
    {
        $categories = Category::take(2)->get();
        return view('livewire.tour-list', compact('categories'));
    }
}
