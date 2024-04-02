<div class="page-heading">

    @include('livewire.aparmodal')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Apar</h3>
                <!-- <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks to simple-datatables.</p> -->
            </div>
            <!-- <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                    </ol>
                </nav>
            </div> -->
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
                    Data Apar
                </h5>
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#aparModal">Tambah Data</button> 
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="">Export Data</button> 
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Merek</th>
                            <th>Jenis</th>
                            <th>Lokasi</th>
                            <th>Nomor Apar</th>
                            <th>Pengecekan</th>
                            <th>Berat</th>
                            <th>Segel</th>
                            <th>Selang</th>
                            <th>Indikator</th>
                            <th>Fisik</th>
                            <th>Keterangan</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($apar as $apars)
                            <tr>
                                <td>{{ $apars->merek }}</td>
                                <td>{{ $apars->jenis }}</td>
                                <td>{{ $apars->lokasi }}</td>
                                <td>{{ $apars->id }}</td>
                                <td>{{ $apars->tanggalpengecekan }}</td>
                                <td>{{ $apars->berat }}</td>
                                <td>{{ $apars->segel }}</td>
                                <td>{{ $apars->selang }}</td>
                                <td>{{ $apars->indikator }}</td>
                                <td>{{ $apars->fisik }}</td>
                                <td>{{ $apars->keterangan }}</td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#updateAparModal" wire:click="editApar({{$apars->id}})" class="btn btn-warning btn-sm ">Ubah</button>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#deleteAparModal" wire:click="deleteApar({{$apars->id}})" class="btn btn-danger btn-sm">Hapus</button>
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
                    {{ $apar->links() }}
                </div>
            </div>
        </div>
    </section>
   
</div>




    


