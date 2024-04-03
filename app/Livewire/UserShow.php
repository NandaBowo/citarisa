<?php

namespace App\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Sadmin; 

class UserShow extends Component
{
    use WithPagination;
 
    protected $paginationTheme = 'bootstrap';
 
    public $name, $email, $password, $sadmin_id;
    public $search = '';
 
    protected function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
         
            'password' => 'required|string',
        ];
    }
 
    public function updated($fields)
    {
        $this->validateOnly($fields);
    }
 
    public function saveSadmin()
    {
        $validatedData = $this->validate();
 
        Sadmin::create($validatedData);
        session()->flash('message','User Added Successfully');
        $this->resetInput();
        $this->dispatch('close-modal');

    }
     
    public function editSadmin(int $sadmin_id)
    {
        $sadmin = Sadmin::find($sadmin_id);
        if($sadmin){
 
            $this->sadmin_id = $sadmin->id;
            $this->name = $sadmin->name;
            $this->email = $sadmin->email;
         
            $this->password = $sadmin->password;
            
        } else {
            return redirect()->to('/user');
        }
    }
 
    public function updateSadmin()
    {
        $validatedData = $this->validate();
 
        Sadmin::where('id',$this->sadmin_id)->update($validatedData);
        session()->flash('message','User Updated Successfully');
        $this->resetInput();
        $this->dispatch('close-modal');

    }
     
    public function deleteSadmin(int $sadmin_id)
    {
        $this->sadmin_id = $sadmin_id;
    }
 
    public function destroySadmin()
    {
    $sadmin = Sadmin::find($this->sadmin_id);
    
    if ($sadmin) {
        $sadmin->delete();
        session()->flash('message', 'User Deleted Successfully');
    } else {
        session()->flash('message', 'User not found');
    }

    $this->dispatch('close-modal');

    }

 
    public function closeModal()
    {
        $this->resetInput();
    }
 
    public function resetInput()
    {
        $this->name = '';
        $this->email = '';
     
        $this->password = '';
        
    }
 
    public function render()
    {
        $sadmin = Sadmin::where('name', 'like', '%'.$this->search.'%')->orderBy('id','DESC')->paginate(3);
        return view('livewire.user-show', ['sadmin' => $sadmin]);
    }
}
