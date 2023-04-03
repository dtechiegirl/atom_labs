<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Register;

class CrudForm extends Component
{
    public $name;
    public $email;
    public $hiddenId;

    protected $rules = [
        'name'=> 'required|min:3|max:15',
        'email'=> 'required|email|unique:users'
    ];
    public function submit(){
        $validateData = $this->validate();
        $updateId = $this->hiddenId;
        if($updateId>0){
            $updateArr = [
                'name'=>$validateData['name'],
                'email'=> $validateData['email'],
            ];
            Register::where('id', $updateId)->update($updateArr);
        }else{
            Register::create($validateData);
        }
   
        session()->flash('message', 'User Created Successfully');
    }
    public function addForm(){
        $this->name = '';
        $this->email ='';
        $this->hiddenId= '';
    }
    public function deleteForm($id){
        Register::where('id', $id)->delete();
        session()->flash('message', 'Record deleted Successfully');
    }
    public function editForm($id){
           $singleData = Register::find($id) ;
           $this->name = $singleData->name;
           $this->email = $singleData->email;
           $this->hiddenId= $singleData->id;
    }
    public function render()
    {
        $AD = Register::paginate(2);
        // return view('livewire.form', );
        return view('livewire.crud-form', ['AD'=>$AD]);
    }
}
