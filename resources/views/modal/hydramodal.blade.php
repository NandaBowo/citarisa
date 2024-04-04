<!-- Insert Modal -->
<div wire:ignore.self class="modal fade" id="hydraModal" tabindex="-1" aria-labelledby="hydraModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hydraModalLabel">Create Hydra</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="saveHydra">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" wire:model="nama" class="form-control">
                        @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="lokasi">Lokasi Penempatan hydrant</label>
                        <select wire:model="lokasi" class="form-control" id="lokasi">
                            <option value="">-- Pilih Lokasi --</option>
                            @foreach(explode(',', $lokasiOptions) as $option)
                                <option value="{{ $option }}">{{ $option }}</option>
                            @endforeach
                        </select>
                        @error('lokasi') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Pastikan posisi kabinet tidak terhalang oleh penempatan material</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="posisi" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="posisi" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('posisi') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Cek kondisi hose</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="kondisihouse" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="kondisihouse" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('kondisihouse') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Cek Valve</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="valve" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="valve" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('valve') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Cek jumlah dan jenis peralatan pada kabinet</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="jumlah" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="jumlah" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('jumlah') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Cek peralatan dari korosi dan kotoran</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="peralatan" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="peralatan" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('peralatan') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Cek kondisi fisik kabinet</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="kondisikabinet" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="kondisikabinet" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('kondisikabinet') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Flow test setiap setahun sekali</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="flow" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="flow" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('flow') <span class="text-danger">{{ $message }}</span> @enderror
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
 
<!-- Update Modal -->
<div wire:ignore.self class="modal fade" id="updateHydraModal" tabindex="-1" aria-labelledby="updateHydraModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateHydraModalLabel">Edit Hydra</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="updateHydra">
                <div class="modal-body">
                <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" wire:model="nama" class="form-control">
                        @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="lokasi">Lokasi Penempatan hydrant</label>
                        <select wire:model="lokasi" class="form-control" id="lokasi">
                            <option value="">-- Pilih Lokasi --</option>
                            @foreach(explode(',', $lokasiOptions) as $option)
                                <option value="{{ $option }}">{{ $option }}</option>
                            @endforeach
                        </select>
                        @error('lokasi') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Pastikan posisi kabinet tidak terhalang oleh penempatan material</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="posisi" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="posisi" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('posisi') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Cek kondisi hose</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="kondisihouse" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="kondisihouse" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('kondisihouse') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Cek Valve</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="valve" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="valve" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('valve') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Cek jumlah dan jenis peralatan pada kabinet</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="jumlah" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="jumlah" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('jumlah') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Cek peralatan dari korosi dan kotoran</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="peralatan" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="peralatan" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('peralatan') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Cek kondisi fisik kabinet</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="kondisikabinet" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="kondisikabinet" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('kondisikabinet') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Flow test setiap setahun sekali</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="flow" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="flow" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('flow') <span class="text-danger">{{ $message }}</span> @enderror
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
 
 
<!-- Delete  Modal -->
<div wire:ignore.self class="modal fade" id="deleteHydraModal" tabindex="-1" aria-labelledby="deleteHydraModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteHydraModalLabel">Delete Hydra</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyHydra">
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