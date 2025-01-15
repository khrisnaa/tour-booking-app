<?php

namespace App\Livewire;

use Livewire\Component;

class LikeButton extends Component
{
    public $isActive = false;

    public function activate()
    {
        $this->isActive = ! $this->isActive;
    }
    public function render()
    {
        return view('livewire.like-button');
    }
}
