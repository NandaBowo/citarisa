<?php

namespace App\Livewire;

use Livewire\WithPagination;
use App\Models\Hydra;
use App\Models\MasterLimbah; 
use Livewire\Component;

class HydraShow extends Component
{
    use WithPagination;
 
    protected $paginationTheme = 'bootstrap';
 
    public $nama, $lokasi, $posisi, $kondisihouse, $valve, $jumlah, $peralatan, $kondisikabinet, $flow, $hydra_id;
    public $search = '';
    public $lokasiOptions = '';
    
    protected function rules()
    {
        return [
            'nama' => 'required|string',
            'lokasi' => 'required|string',
            'posisi' => 'required|string',
            'kondisihouse' => 'required|string',
            'valve' => 'required|string',
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
        $this->dispatch('close-modal');

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
            $this->valve = $hydra->valve;
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
        $this->dispatch('close-modal');

    }
     
    public function deleteHydra(int $hydra_id)
    {
        $this->hydra_id = $hydra_id;
    }
 
    public function destroyHydra()
    {
    $hydra = Hydra::find($this->hydra_id);
    
    if ($hydra) {
        $hydra->delete();
        session()->flash('message', 'Hydra Deleted Successfully');
    } else {
        session()->flash('message', 'Hydra not found');
    }

    $this->dispatch('close-modal');

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
        $this->valve = '';
        $this->jumlah = '';
        $this->peralatan = '';
        $this->kondisikabinet = '';
        $this->flow = '';
    }
    
    public function mount()
    {
       
    $masterLimbah = MasterLimbah::where('kategori', 'Lokasi')->pluck('data');
    $this->lokasiOptions = $masterLimbah->implode(',');
    }

    public function render()
    {
        $hydra = Hydra::where('nama', 'like', '%'.$this->search.'%')->orderBy('id','DESC')->paginate(3);
        return view('livewire.hydra-show', ['hydra' => $hydra]);
    }
}
