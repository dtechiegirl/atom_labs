<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ParamComponent extends Component
{

    public $param;
    public function mount($param = null){
        $this->param = $param;
    }
    public function render()
    {
        return view('livewire.param-component');
    }
}
