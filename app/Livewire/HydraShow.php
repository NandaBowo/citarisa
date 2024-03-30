<?php

namespace App\Livewire;

use Livewire\WithPagination;
use App\Models\Hydra;
use Livewire\Component;

class HydraShow extends Component
{
    use WithPagination;
 
    protected $paginationTheme = 'bootstrap';
 
    public $nama, $lokasi, $posisi, $kondisihouse, $jumlah, $peralatan, $kondisikabinet, $flow, $hydra_id;
    public $search = '';
 
    protected function rules()
    {
        return [
            'nama' => 'required|string',
            'lokasi' => 'required|string',
            'posisi' => 'required|string',
            'kondisihouse' => 'required|string',
            'jumlah' => 'required|string',
            'peralatan' => 'required|string',
            'kondisikabinet' => 'required|string',
            'flow' => 'required|string',
        ];
    }
 
    public function updated($fields)
    {
        $this->validateOnly($fields);
    }
 
    public function saveHydra()
    {
        $validatedData = $this->validate();
 
        Hydra::create($validatedData);
        session()->flash('message','Hydra Added Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }
     
    public function editHydra(int $hydra_id)
    {
        $hydra = Hydra::find($hydra_id);
        if($hydra){
 
            $this->hydra_id = $hydra->id;
            $this->nama = $hydra->nama;
            $this->lokasi = $hydra->lokasi;
            $this->posisi = $hydra->posisi;
            $this->kondisihouse = $hydra->kondisihouse;
            $this->jumlah = $hydra->jumlah;
            $this->peralatan = $hydra->peralatan;
            $this->kondisikabinet = $hydra->kondisikabinet;
            $this->flow = $hydra->flow;
        } else {
            return redirect()->to('/hydra');
        }
    }
 
    public function updateHydra()
    {
        $validatedData = $this->validate();
 
        Hydra::where('id',$this->hydra_id)->update($validatedData);
        session()->flash('message','Hydra Updated Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }
     
    public function deleteHydra(int $hydra_id)
    {
        $this->hydra_id = $hydra_id;
    }
 
    public function destroyHydra()
    {
        Hydra::find($this->hydra_id)->delete();
        session()->flash('message','Hydra Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');
    }
 
    public function closeModal()
    {
        $this->resetInput();
    }
 
    public function resetInput()
    {
        $this->nama = '';
        $this->lokasi = '';
        $this->posisi = '';
        $this->kondisihouse = '';
        $this->jumlah = '';
        $this->peralatan = '';
        $this->kondisikabinet = '';
        $this->flow = '';
    }
 
    public function render()
    {
        $hydra = Hydra::where('nama', 'like', '%'.$this->search.'%')->orderBy('id','DESC')->paginate(3);
        return view('livewire.hydra-show', ['hydra' => $hydra]);
    }
}
