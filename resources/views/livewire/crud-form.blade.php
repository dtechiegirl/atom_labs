<div>
    @if(session()->has('message'))
    <div style="color:green">{{session('message')}}</div>
    @endif
    <input type="hidden" wire:model= "hiddenId" value={{$hiddenId}}>
   <form wire:submit.prevent="submit">
    @error('name')
    <span style="color:red">{{$message}}</span>
    @enderror
    Name: <input type="text" wire:model="name"><br>
    @error('email')
    <span style="color:red">{{$message}}</span>
    @enderror
    Email: <input type="text" wire:model ="email"><br>
    <button type="submit">Submit</button>
   </form>
   @foreach($AD as $ad)
            <h1>{{$ad->name}}</h1>
            <h2>{{$ad->email}}</h2>
            {{-- <h1>yeloloq</h1> --}}
            {{-- <h4>qawsedrftgyhuioko</h4> --}}
           <h1><a href="javascript:void(0)" wire:click="editForm({{$ad->id}})">Edit</a></h1>
           <h1><a href="javascript:void(0)" wire:click="addForm">Add</a></h1>
           <h1><a href="javascript:void(0)" wire:click="deleteForm({{$ad->id}})">Delete</a></h1>

            @endforeach
            
</div>
{{$AD->links()}}
