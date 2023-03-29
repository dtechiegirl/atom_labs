<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SecondComponent extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
              <h1> form second component </h1>
            </div>
        blade;
    }
}
