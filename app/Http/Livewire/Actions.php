<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Actions extends Component
{
    public $sum;
    public $num =0;
    // public $decrease;

    public function add($a, $b){
        $this->sum =$a +$b;
    }
    public function increase(){
        $this->num++;
    }

    public function decrease(){
        $this->num--;
    }
    public function render()
    {
        return view('livewire.actions');
    }
}
