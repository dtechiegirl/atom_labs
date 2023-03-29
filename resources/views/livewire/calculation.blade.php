<div>
    {{-- The whole world belongs to you. --}}
    <form action="" wire:submit.prevent= "cal">
        NUM1 
        <input type="text" name="num1" id="" wire:model="num1"> <br>
        NUM2
        <input type="text" name="num2" wire:model = "num2"><br>
        <button type="submit">Submit</button>
    </form>
    Resut: {{$sum}}
</div>
