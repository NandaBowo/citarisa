<!-- Insert Modal -->
<div wire:ignore.self class="modal fade" id="aparModal" tabindex="-1" aria-labelledby="aparModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aparModalLabel">Create Apar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="saveApar">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Merek/Type</label>
                        <input type="text" wire:model="merek" class="form-control">
                        @error('merek') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Jenis</label>
                        <select wire:model="jenis" class="form-control">
                            <option value=" ">--Pilih Jenis--</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
            
                        </select>
                        @error('jenis') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Lokasi Penempatan</label>
                        <select wire:model="lokasi" class="form-control">
                            <option value=" ">--Pilih Lokasi--</option>
                            <option value="Car Way 1">Car Way 1</option>
                            <option value="Car Way 2">Car Way 2</option>
                            <option value="Car Way 3">Car Way 3</option>
                            <option value="Depan Gudang">Depan Gudang</option>
                            <option value="Depan Rumah Penjaga">Depan Rumah Penjaga</option>
                            <option value="Kantin">Kantin</option>
                            <option value="Gedung Existing Lt.2">Gedung Existing Lt.2</option>
                            <option value="Ruang Pertemuan 1">Ruang Pertemuan 1</option>
                            <option value="Ruang Pertemuan 2">Ruang Pertemuan 2</option>
                            <option value="Depan Mushalla">Depan Mushalla</option>
                            <option value="Depan Toilet Wanita">Depan Toilet Wanita</option>
                            <option value="Depan Ruang Panel">Depan Ruang Panel</option>
                            <option value="Ruang Rapat">Ruang Rapat</option>
                            <option value="Depan Ruang Kepala">Depan Ruang Kepala</option>
                            <option value="Ruang Komputer">Ruang Komputer</option>
                            <option value="Ruang LHU Lt.3">Ruang LHU Lt.3</option>
                            <option value="Ruang Mutu Teknis">Ruang Mutu Teknis</option>
                            <option value="Ruang Staff Fungsional">Ruang Staff Fungsional</option>
                            <option value="Ruang Staff">Ruang Staff</option>
                            <option value="Depan Ruang KASI">Depan Ruang KASI</option>
                            <option value="Depan Toilet Wanita">Depan Toilet Wanita</option>
                            <option value="Ruang Pengolahan Data">Ruang Pengolahan Data</option>
                            <option value="Ruang Lemari Asam">Ruang Lemari Asam</option>
                            <option value="Ruang Pengeringan">Ruang Pengeringan</option>
                            <option value="Depang R. Bahan Kimia">Depang R. Bahan Kimia</option>
                            <option value="Ruang Spechtro">Ruang Spechtro</option>
                            <option value="Ruang AAS">Ruang AAS</option>
            
                        </select>
                        @error('lokasi') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Tanggal Pengecekan</label>
                        <input type="date" wire:model="tanggalpengecekan" class="form-control">
                        @error('tanggalpengecekan') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Kondisi Apar (Berat kg)</label>
                        <input type="number" step="0.01" wire:model="berat" class="form-control">
                        @error('berat') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Kondisi Apar (Segel)</label>
                        <input type="text" wire:model="segel" class="form-control">
                        @error('segel') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Kondisi Apar (Selang)</label>
                        <input type="text" wire:model="selang" class="form-control">
                        @error('selang') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Kondisi Apar (Indikator)</label>
                        <input type="text" wire:model="indikator" class="form-control">
                        @error('indikator') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Kondisi Apar (Fisik)</label>
                        <input type="text" wire:model="fisik" class="form-control">
                        @error('fisik') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Keterangan</label>
                        <input type="text" wire:model="keterangan" class="form-control">
                        @error('keterangan') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
 
<!-- Update Student Modal -->
<div wire:ignore.self class="modal fade" id="updateAparModal" tabindex="-1" aria-labelledby="updateAparModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateAparModalLabel">Edit Apar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="updateApar">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Merek/Type</label>
                        <input type="text" wire:model="merek" class="form-control">
                        @error('merek') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Jenis</label>
                        <select wire:model="jenis" class="form-control">
                            <option value=" ">--Pilih Jenis--</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
            
                        </select>
                        @error('jenis') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Lokasi Penempatan</label>
                        <select wire:model="lokasi" class="form-control">
                            <option value=" ">--Pilih Lokasi--</option>
                            <option value="Car Way 1">Car Way 1</option>
                            <option value="Car Way 2">Car Way 2</option>
                            <option value="Car Way 3">Car Way 3</option>
                            <option value="Depan Gudang">Depan Gudang</option>
                            <option value="Depan Rumah Penjaga">Depan Rumah Penjaga</option>
                            <option value="Kantin">Kantin</option>
                            <option value="Gedung Existing Lt.2">Gedung Existing Lt.2</option>
                            <option value="Ruang Pertemuan 1">Ruang Pertemuan 1</option>
                            <option value="Ruang Pertemuan 2">Ruang Pertemuan 2</option>
                            <option value="Depan Mushalla">Depan Mushalla</option>
                            <option value="Depan Toilet Wanita">Depan Toilet Wanita</option>
                            <option value="Depan Ruang Panel">Depan Ruang Panel</option>
                            <option value="Ruang Rapat">Ruang Rapat</option>
                            <option value="Depan Ruang Kepala">Depan Ruang Kepala</option>
                            <option value="Ruang Komputer">Ruang Komputer</option>
                            <option value="Ruang LHU Lt.3">Ruang LHU Lt.3</option>
                            <option value="Ruang Mutu Teknis">Ruang Mutu Teknis</option>
                            <option value="Ruang Staff Fungsional">Ruang Staff Fungsional</option>
                            <option value="Ruang Staff">Ruang Staff</option>
                            <option value="Depan Ruang KASI">Depan Ruang KASI</option>
                            <option value="Depan Toilet Wanita">Depan Toilet Wanita</option>
                            <option value="Ruang Pengolahan Data">Ruang Pengolahan Data</option>
                            <option value="Ruang Lemari Asam">Ruang Lemari Asam</option>
                            <option value="Ruang Pengeringan">Ruang Pengeringan</option>
                            <option value="Depang R. Bahan Kimia">Depang R. Bahan Kimia</option>
                            <option value="Ruang Spechtro">Ruang Spechtro</option>
                            <option value="Ruang AAS">Ruang AAS</option>
            
                        </select>
                        @error('lokasi') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Tanggal Pengecekan</label>
                        <input type="date" wire:model="tanggalpengecekan" class="form-control">
                        @error('tanggalpengecekan') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Kondisi Apar (Berat kg)</label>
                        <input type="number" step="0.01" wire:model="berat" class="form-control">
                        @error('berat') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Kondisi Apar (Segel)</label>
                        <input type="text" wire:model="segel" class="form-control">
                        @error('segel') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Kondisi Apar (Selang)</label>
                        <input type="text" wire:model="selang" class="form-control">
                        @error('selang') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Kondisi Apar (Indikator)</label>
                        <input type="text" wire:model="indikator" class="form-control">
                        @error('indikator') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Kondisi Apar (Fisik)</label>
                        <input type="text" wire:model="fisik" class="form-control">
                        @error('fisik') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Keterangan</label>
                        <input type="text" wire:model="keterangan" class="form-control">
                        @error('keterangan') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
 
 
<!-- Delete Student Modal -->
<div wire:ignore.self class="modal fade" id="deleteAparModal" tabindex="-1" aria-labelledby="deleteAparModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteAparModalLabel">Delete Apar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyApar">
                <div class="modal-body">
                    <h4>apakah ingin menghapus data ini ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Iya Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>