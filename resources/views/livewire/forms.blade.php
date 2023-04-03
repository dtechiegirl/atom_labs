<div>
    <style>
        body{
            background-color: rgb(238, 118, 118)
        }
    </style>
    <form wire:submit.prevent="submit"> <br>
        @if(session()->has('message'))
        <div style="color:green">{{session('message')}}</div>
        @endif
  Name: <input type="text" wire:model = "name"><br>
  @error('name')
  <span style="color:red">{{$message}}</span>
  @enderror
  Email: <input type="email" name="" id="" wire:model= "email"><br>
  @error('email')
  <span style="color:red">{{$message}}</span>
  @enderror
        <button type="submit" style="border: solid 3px black" >Submit</button>
</form>
@foreach($all as $ad)
            <h1>{{$ad->name}}</h1>
            <h2>{{$ad->email}}</h2>
@endforeach
</div>
