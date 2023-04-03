<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Register;

class Forms extends Component
{
    public $name;
    public $email;
    // public $password
    public $all = [];
    protected $rules = [
        'name'=>'required|min:6|max:30',
        'email'=> 'required|email|unique:registers',
    ];
    public function submit(){
       $validateData = $this->validate();
       Register::create($validateData); 
        session()->flash('message', 'fields are valid');
    }
    public function render()
    {
        $this->all = Register::all();
        return view('livewire.forms');
    }
}
