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
                        <label>Student Email</label>
                        <input type="text" wire:model="lokasi" class="form-control">
                        @error('lokasi') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Student Course</label>
                        <input type="text" wire:model="posisi" class="form-control">
                        @error('posisi') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Student Course</label>
                        <input type="text" wire:model="kondisihouse" class="form-control">
                        @error('kondisihouse') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Student Course</label>
                        <input type="text" wire:model="jumlah" class="form-control">
                        @error('jumlah') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Student Course</label>
                        <input type="text" wire:model="peralatan" class="form-control">
                        @error('peralatan') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Student Course</label>
                        <input type="text" wire:model="kondisikabinet" class="form-control">
                        @error('kondisikabinet') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Student Course</label>
                        <input type="text" wire:model="flow" class="form-control">
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
 
<!-- Update Student Modal -->
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
                        <label>Student Email</label>
                        <input type="text" wire:model="lokasi" class="form-control">
                        @error('lokasi') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Student Course</label>
                        <input type="text" wire:model="posisi" class="form-control">
                        @error('posisi') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Student Course</label>
                        <input type="text" wire:model="kondisihouse" class="form-control">
                        @error('kondisihouse') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Student Course</label>
                        <input type="text" wire:model="jumlah" class="form-control">
                        @error('jumlah') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Student Course</label>
                        <input type="text" wire:model="peralatan" class="form-control">
                        @error('peralatan') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Student Course</label>
                        <input type="text" wire:model="kondisikabinet" class="form-control">
                        @error('kondisikabinet') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Student Course</label>
                        <input type="text" wire:model="flow" class="form-control">
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
 
 
<!-- Delete Student Modal -->
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
                    <h4>Are you sure you want to delete this data ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yes! Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>