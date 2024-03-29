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
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="">Tambah Data</button> 
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
                        <tr>
                            <td>Graiden</td>
                            <td>apartemen</td>
                            <td>setuju</td>
                            <td>tidak setuju</td>
                            <td>a</td>
                            <td>ad</td>
                            <td>ada</td>
                            <td>gakta</td>
                            <td>
                                <button type="button" data-bs-toggle="modal" data-bs-target="" wire:click="" class="btn btn-warning btn-sm ">Ubah</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="" wire:click="" class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                            
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>