<!-- Insert Modal -->
<div wire:ignore.self class="modal fade" id="detectorModal" tabindex="-1" aria-labelledby="detectorModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detectorModalLabel">Create Detector</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="saveDetector">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" wire:model="nama" class="form-control">
                        @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Lokasi Fire Alarm</label>
                        <input type="text" wire:model="lokasi" class="form-control">
                        @error('lokasi') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Signal tidak trouble</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="signal" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="signal" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('signal') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Kondisi baterai bagus</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="kondisi" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="kondisi" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('kondisi') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Cek push button alarm</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="alarm" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="alarm" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('alarm') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Cek kondisi fisik fire detector</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="fisik" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="fisik" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('fisik') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Melakukan pengetesan pada fire detector secara menyeluruh setiap 6 bulan sekali</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="pengetesan" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="pengetesan" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('pengetesan') <span class="text-danger">{{ $message }}</span> @enderror
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
<div wire:ignore.self class="modal fade" id="updateDetectorModal" tabindex="-1" aria-labelledby="updateDetectorModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateDetectorModalLabel">Edit Detector</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="updateDetector">
                <div class="modal-body">
                <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" wire:model="nama" class="form-control">
                        @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Lokasi Fire Alarm</label>
                        <input type="text" wire:model="lokasi" class="form-control">
                        @error('lokasi') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Signal tidak trouble</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="signal" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="signal" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('signal') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Kondisi baterai bagus</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="kondisi" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="kondisi" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('kondisi') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Cek push button alarm</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="alarm" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="alarm" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('alarm') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Cek kondisi fisik fire detector</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="fisik" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="fisik" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('fisik') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Melakukan pengetesan pada fire detector secara menyeluruh setiap 6 bulan sekali</label>
                        <div>
                            <label>
                                <input type="radio" wire:model="pengetesan" value="Sesuai"> Sesuai
                            </label>
                            <label>
                                <input type="radio" wire:model="pengetesan" value="Tidak Sesuai"> Tidak Sesuai
                            </label>
                        </div>
                        @error('pengetesan') <span class="text-danger">{{ $message }}</span> @enderror
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
<div wire:ignore.self class="modal fade" id="deleteDetectorModal" tabindex="-1" aria-labelledby="deleteDetectorModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteDetectorModalLabel">Delete Detector</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyDetector">
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