<div>
    {{-- The whole world belongs to you. --}}
    <h1>this is something</h1>
    <input type="text" wire:model="name"><br>
    @foreach ($hookProperty as $hp)
        {{$hp}}
    @endforeach
    {{-- <h2>{{$hookProperty}}</h2> --}}
</div>
