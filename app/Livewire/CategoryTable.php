<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryTable extends Component
{
    use WithPagination;
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $categories = Category::where('name', 'like', '%' . $this->search . '%')->paginate(2);
        return view('livewire.category-table', compact('categories'));
    }


}
