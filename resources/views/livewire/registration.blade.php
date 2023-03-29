<div>
    {{-- Success is as dangerous as failure. --}}
    Student Name <br>
    <input type="text" wire:model="name"><br>
    Address <br>
    <input type="text" wire:model= "address">
    Gender <br>
    <input type="radio" value="male" wire:model="gender"><>male
    <input type="radio" value="female" wire:model="gender"><>female
    Subjects <br>
    <input type="checkbox" value="Math" wire:model="subjects"><>Math <br>
    <input type="checkbox" value="Eng" wire:model="subjects"><>Eng <br>
    <input type="checkbox" value="phy" wire:model="subjects"><>Phy <br>

    <h1>
        Name: {{$name}} <br>
        address: {{$address}} <br>
        gender: {{$gender}} <br>
        Subjects: @foreach($subjects as $sub )
              <li>  {{$sub}}</li>
                @endforeach
    </h1>
</div>
