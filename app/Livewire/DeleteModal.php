<?php

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DeleteModal extends Component
{
    public $title = "";
    public $description = "";

    public $categoryId = "";

    public function destroy()
    {
        $category = Category::findOrFail($this->categoryId);

        DB::transaction(function () use ($category) {
            $category->delete();
        });

        $this->dispatch('close-modal');

        session()->flash('success', [
            'title' => 'Successfully deleted',
            'description' => 'You have successfully deleted a category'
        ]);

        return redirect()->route('admin.categories.index');
    }
    public function render()
    {
        return view('livewire.delete-modal');
    }
}
