<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Reg;
use App\Models\Register;
use Livewire\WithPagination;
class Form extends Component
{
    public $name;
    public $email;
    // public $AD =[];
    // public $ADS = [];
    // public $all = [];
    protected $rules = [
        'name'=> 'required|min:3|max:15',
        'email'=> 'required|email|unique:users'
    ];
    public function submit(){
        $validateData = $this->validate();
        Reg::create($validateData);
        Register::create($validateData);
        session()->flash('message', 'User Created Successfully');
    }
    public function render()
    {
       $AD = Register::paginate(2);
        return view('livewire.form', ['AD'=>$AD]);
    }
}
