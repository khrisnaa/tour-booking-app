<?php

namespace App\View\Components\public;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ToursSlider extends Component
{
    public $categoryId = '';
    public $id = '';
    public function __construct($categoryId, $id)
    {
        $this->categoryId = $categoryId;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $category = Category::findOrFail($this->categoryId);
        $tours = $category->tourPackages()->get();
        return view('components.public.tours-slider', compact('category', 'tours'));
    }
}
