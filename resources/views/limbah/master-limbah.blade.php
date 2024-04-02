@extends('layout.hydra')
 
@section('content')

    <h1>Master Data Sumber Limbah</h1>

    <div class="card">
        <div class="card-header">
            <h4 class="text-center">SUMBER LIMBAH B 3</h4>
        </div>
        <div class="mx-4 mb-3">
            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Sumber Limbah
            </button>
            <a href="/limbah_keluar" class="btn btn-success ms-2">Export Data Excel</a>
        </div>
        @session('status')
            <div class="mx-4 mt-4 mb-3">
                <p class="fw-bold text-light bg-success w-25 text-center rounded">{{ session('status') }}</p>
            </div>
        @endsession
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No. </th>
                    <th scope="col">Sumber Limbah B3</th>
                    <th scope="col">Kuantitas</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($master_limbah as $ms)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $ms->sumber_limbah }}</td>
                            <td>{{ $ms->kuantitas }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="/master_limbah" class="btn btn-sm btn-warning me-2" data-bs-toggle="modal" data-bs-target="#updateModal">Ubah</a>
                                    <a href="/limbah_keluar" class="btn btn-sm btn-danger ms-2">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Sumber Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/master_limbah" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="sumber_limbah" class="form-label">Sumber Limbah</label>
                            <input type="text" class="form-control" id="sumber_limbah" name="sumber_limbah" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Update -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateModalLabel">Form Update Sumber Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/master_limbah/edit/" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="sumber_limbah" class="form-label">Sumber Limbah</label>
                            <input type="text" class="form-control" id="sumber_limbah" name="sumber_limbah" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
@endsection
