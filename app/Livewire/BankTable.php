<?php

namespace App\Livewire;

use App\Models\Bank;
use Livewire\Component;
use Livewire\WithPagination;

class BankTable extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $banks = Bank::where('bank_name', 'like', '%'.$this->search.'%')->orderByDesc('created_at')->paginate(10);
        return view('livewire.bank-table', compact('banks'));
    }
}
