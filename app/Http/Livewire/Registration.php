<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Registration extends Component
{
    public $name;
    public $address;
    public $gender;
    public $subjects = [];
    public function render()
    {
        return view('livewire.registration');
    }
}
