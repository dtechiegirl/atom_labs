<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <button type="button" wire:click="add(7,11)">sum</button>
    Result {{$sum}}
    <br>
    <button wire:click="increase">+</button>
    {{$num}}
    <button wire:click="decrease">-</button>
</div>
