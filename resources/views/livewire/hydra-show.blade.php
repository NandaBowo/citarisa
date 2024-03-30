<div class="page-heading">
@include('livewire.hydramodal')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Hydra</h3>
                <!-- <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks to simple-datatables.</p> -->
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                    </ol>
                </nav>
            </div>
            <br>
            @if (session()->has('message'))
                <h5 class="alert alert-success">{{ session('message') }}</h5>
            @endif
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Data Hydra
                </h5>
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#hydraModal">Tambah Data</button> 
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="">Export Data</button> 
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Lokasi Hydra</th>
                            <th>posisi kabinet </th>
                            <th>kondisi hose</th>
                            <th>jumlah peralatan</th>
                            <th>peralatan korosi kotoran</th>
                            <th>kondisi  kabinet</th>
                            <th>flow test </th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($hydra as $hydras)
                            <tr>
                                <td>{{ $hydras->nama }}</td>
                                <td>{{ $hydras->lokasi }}</td>
                                <td>{{ $hydras->posisi }}</td>
                                <td>{{ $hydras->kondisihouse }}</td>
                                <td>{{ $hydras->jumlah }}</td>
                                <td>{{ $hydras->peralatan }}</td>
                                <td>{{ $hydras->kondisikabinet }}</td>
                                <td>{{ $hydras->flow }}</td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="updateHydraModal" wire:click="editHydra({{$hydras->id}})" class="btn btn-warning btn-sm ">Ubah</button>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="deleteHydraModal" wire:click="deleteHydra({{$hydras->id}})" class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8">No Record Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div>
                    {{ $hydra->links() }}
                </div>
            </div>
        </div>
    </section>
</div>
</div>
    


