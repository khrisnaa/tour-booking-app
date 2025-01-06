<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DeleteModal extends Component
{
    public $title = "";
    public $description = "";

    public $model;
    public $modelId;

    public $route = '';

    public function destroy()
    {
        $modelInstance = $this->model::findOrFail($this->modelId);

        DB::transaction(function () use ($modelInstance) {
            $modelInstance->delete();
        });

        $this->dispatch('close-modal');

        session()->flash('success', [
            'title' => 'Successfully deleted',
            'description' => 'You have successfully deleted the record'
        ]);

        return redirect()->route('admin.'.$this->route.'.index');
    }
    public function render()
    {
        return view('livewire.delete-modal');
    }
}
