<div>
    {{-- Stop trying to control. --}}
    @if(session()->has('message'))
    <h1>{{session('message')}}</h1>
    @endif
    <form wire:submit.prevent = "submit">
       
        @error('name')
        <span style="color:red">{{$message}}</span>
        @enderror
        Name: <input type="text" wire:model = "name"><br>
        @error('email')
        <span style="color:red">{{$message}}</span>
        @enderror
        Email: <input type="email" wire:model ="email"><br>
        <button>Submit</button>
    </form>
    @foreach($AD as $ad)
            <h1>{{$ad->name}}</h1>
            <h2>{{$ad->email}}</h2>
@endforeach

</div>
{{$AD->links()}}
