<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Users extends Component
{
    public $names = ['ravi','suman','deepak','jyoti'];

    public function render()
    {    
        return view('livewire.users',);
    }
}
