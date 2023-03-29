<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Lifecycle extends Component
{
    public $hookProperty = [];
    public function mount(){
        $this->hookProperty[] = 'i am from mount';
    }
    public function hydrate(){
        $this->hookProperty[] = 'i am from hydrate';
    }
    public function render()
    {
        return view('livewire.lifecycle');
    }
}
