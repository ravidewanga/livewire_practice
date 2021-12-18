<?php

namespace App\Http\Livewire\Wallet;

use Livewire\Component;

class AddAmount extends Component
{
    public $amount;
    public $msg;

    public function mount(){
        $this->amount = 0;
    }

    public function updateMessage($myMsg){
        $this->msg = $myMsg;
    }

    public function render()
    {
        return view('livewire.wallet.add-amount');
    }
}
