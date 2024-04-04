<?php

namespace App\Livewire;

use App\Models\Detector;
use App\Models\MasterLimbah; 
use Livewire\WithPagination;
use Livewire\Component;

class DetectorShow extends Component
{
    use WithPagination;
 
    protected $paginationTheme = 'bootstrap';
 
    public $nama, $lokasi, $signal, $kondisi, $alarm, $fisik, $pengetesan, $detector_id;
    public $search = '';
    public $lokasiOptions = '';
    protected function rules()
    {
        return [
            'nama' => 'required|string',
            'lokasi' => 'required|string',
            'signal' => 'required|string',
            'kondisi' => 'required|string',
            'alarm' => 'required|string',
            'fisik' => 'required|string',
            'pengetesan' => 'required|string',
        ];
    }
 
    public function updated($fields)
    {
        $this->validateOnly($fields);
    }
 
    public function saveDetector()
    {
        $validatedData = $this->validate();
 
        Detector::create($validatedData);
        session()->flash('message','Detector Added Successfully');
        $this->resetInput();
        $this->dispatch('close-modal');

    }
     
    public function editDetector(int $detector_id)
    {
        $detector = Detector::find($detector_id);
        if($detector){
 
            $this->detector_id = $detector->id;
            $this->nama = $detector->nama;
            $this->lokasi = $detector->lokasi;
            $this->signal = $detector->signal;
            $this->kondisi = $detector->kondisi;
            $this->alarm = $detector->alarm;
            $this->fisik = $detector->fisik;
            $this->pengetesan = $detector->pengetesan;
            
        } else {
            return redirect()->to('/detector');
        }
    }
 
    public function updateDetector()
    {
        $validatedData = $this->validate();
 
        Detector::where('id',$this->detector_id)->update($validatedData);
        session()->flash('message','detector Updated Successfully');
        $this->resetInput();
        $this->dispatch('close-modal');

    }
     
    public function deleteDetector(int $detector_id)
    {
        $this->detector_id = $detector_id;
    }
 
    public function destroyDetector()
    {
    $detector = Detector::find($this->detector_id);
    
    if ($detector) {
        $detector->delete();
        session()->flash('message', 'Detector Deleted Successfully');
    } else {
        session()->flash('message', 'Detector not found');
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
        $this->signal = '';
        $this->kondisi = '';
        $this->alarm = '';
        $this->fisik = '';
        $this->pengetesan = '';
    }

    public function mount()
    {
       
    $masterLimbah = MasterLimbah::where('kategori', 'Lokasi')->pluck('data');
    $this->lokasiOptions = $masterLimbah->implode(',');
    }
 
    public function render()
    {
        $detector = Detector::where('nama', 'like', '%'.$this->search.'%')->orderBy('id','DESC')->paginate(3);
        return view('livewire.detector-show', ['detector' => $detector]);
    }
}
