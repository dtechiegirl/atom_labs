<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ThirdComponent extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
                <h1>hello from third </h1>
            </div>
        blade;
    }
}
