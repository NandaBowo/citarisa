<div class="page-heading">

    @include('modal.usermodal')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data User</h3>
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
                    Data User
                </h5>
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#sadminModal">Tambah Data</button> 
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="">Export Data</button> 
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>email</th>
                            <th>password</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sadmin as $sadmins)
                            <tr>
                                <td>{{ $sadmins->name }}</td>
                                <td>{{ $sadmins->email }}</td>
                                <td>{{ $sadmins->password }}</td>
                                
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#updateSadminModal" wire:click="editSadmin({{$sadmins->id}})" class="btn btn-warning btn-sm ">Ubah</button>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#deleteSadminModal" wire:click="deleteSadmin({{$sadmins->id}})" class="btn btn-danger btn-sm">Hapus</button>
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
                    {{ $sadmin->links() }}
                </div>
            </div>
        </div>
    </section>
    
</div>




    


