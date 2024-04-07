<?php

namespace App\Livewire;

use App\Models\Apar;
use App\Models\MasterLimbah; 
use Livewire\WithPagination;
use Livewire\Component;

class AparShow extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $merek, $jenis, $lokasi, $tanggalpengecekan, $berat, $segel, $selang, $keterangan, $indikator, $fisik, $apar_id;
    public $search = '';
    public $lokasiOptions = '';

    protected function rules()
    {
        return [
            'merek' => 'required|string',
            'jenis' => 'required|string',
            'lokasi' => 'required|string',
            'tanggalpengecekan' => 'required|date',
            'berat' => 'required|numeric',
            'segel' => 'required|string',
            'selang' => 'required|string',
            'indikator' => 'required|string',
            'fisik' => 'required|string',
            'keterangan' => 'required|string',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveApar()
    {
        $validatedData = $this->validate();
        
        Apar::create($validatedData);
        session()->flash('message','Apar Added Successfully');
        $this->resetInput();
        $this->dispatch('close-modal');
    }

    public function editApar(int $apar_id)
    {
        $apar = Apar::find($apar_id);
        if ($apar) {
            $this->apar_id = $apar->id;
            $this->merek = $apar->merek;
            $this->jenis = $apar->jenis;
            $this->lokasi = $apar->lokasi;
            $this->tanggalpengecekan = $apar->tanggalpengecekan;
            $this->berat = $apar->berat;
            $this->segel = $apar->segel;
            $this->selang = $apar->selang;
            $this->indikator = $apar->indikator;
            $this->fisik = $apar->fisik;
            $this->keterangan = $apar->keterangan;
        } else {
            return redirect()->to('/apar');
        }
    }

    public function updateApar()
    {
        $validatedData = $this->validate();

        Apar::where('id', $this->apar_id)->update($validatedData);
        session()->flash('message','Apar Updated Successfully');
        $this->resetInput();
        $this->dispatch('close-modal');
    }

    public function deleteApar(int $apar_id)
    {
        $this->apar_id = $apar_id;
    }

    public function destroyApar()
    {
        $apar = Apar::find($this->apar_id);

        if ($apar) {
            $apar->delete();
            session()->flash('message', 'Apar Deleted Successfully');
        } else {
            session()->flash('message', 'Apar not found');
        }

        $this->dispatch('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->merek = '';
        $this->jenis = '';
        $this->lokasi = '';
        $this->tanggalpengecekan = '';
        $this->berat = '';
        $this->segel = '';
        $this->selang = '';
        $this->indikator = '';
        $this->fisik = '';
        $this->keterangan = '';
    }

    public function mount()
    {
       
    $masterLimbah = MasterLimbah::where('kategori', 'Lokasi')->pluck('data');
    $this->lokasiOptions = $masterLimbah->implode(',');
    
    }

    public function render()
    {

        $apar = Apar::where('merek', 'like', '%' . $this->search . '%')->orderBy('id', 'DESC')->paginate(3);
      
        return view('livewire.apar-show', ['apar' => $apar]);
    }
}
