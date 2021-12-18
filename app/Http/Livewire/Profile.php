<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public $name = 'Initial value';
    public $counter;

    public function mount(){
        $this->name = 'Initial Change';
    }

    public function hydrate(){
        $this->counter++;
    }

    public function updated(){
        $this->counter++;
    }

    public function updateName($name){
        $this->name = $name;
    }
    public function render()
    {
        return view('livewire.profile');
    }
}
