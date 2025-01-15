<?php

namespace App\View\Components\public;

use App\Models\TourPackage;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TourCard extends Component
{

    public $tourId = '';
    public function __construct($tourId)
    {
        $this->tourId = $tourId;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $tour = TourPackage::findOrFail($this->tourId);
        return view('components.public.tour-card', compact('tour'));
    }
}
