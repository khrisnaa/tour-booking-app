<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\TourPackage;
use Livewire\Component;
use Livewire\WithPagination;

class TourPackageTable extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $categories = Category::orderBy('name')->get();
        $tours = TourPackage::where('name', 'like', '%'.$this->search.'%')->orderByDesc('created_at')->paginate(10);
        return view('livewire.tour-package-table', compact(['categories', 'tours']));
    }
}
