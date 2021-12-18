<?php

namespace App\Http\Livewire\Wallet;

use Livewire\Component;

class AddAmount extends Component
{
    public $amount;

    public function mount(){
        $this->amount = 0;
    }

    public function render()
    {
        return view('livewire.wallet.add-amount');
    }
}
