@extends('admin.admin')
 
@section('content')

    <h1>Master Data</h1>

    <div class="card">
        <div class="card-header">
            <h4 class="text-center">MASTER DATA</h4>
        </div>
        <div class="mx-4 mb-3">
            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Master Data
            </button>
            <a href="/limbah_keluar" class="btn btn-success ms-2">Export Data Excel</a>
        </div>
        @session('status')
            <div class="mx-4 mt-4 mb-3">
                <p class="fw-bold text-light bg-success w-50 text-center rounded">{{ session('status') }}</p>
            </div>
        @endsession
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No. </th>
                    <th scope="col">Data</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Kuantitas</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($master_limbah as $ms)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $ms->data }}</td>
                            <td>{{ $ms->kategori }}</td>
                            <td>{{ $ms->kuantitas }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="/master_limbah" class="btn btn-sm btn-warning me-2" data-bs-toggle="modal" data-bs-target="#updateModal{{ $ms->id }}">Ubah</a>
                                    <form action="/master_limbah/delete/{{ $ms->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" type="submit" class="btn btn-sm btn-danger ms-2">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Add -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Master Data Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/master_limbah" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="data" class="form-label">Data Master</label>
                            <input type="text" class="form-control" id="data" name="data" required>
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select class="form-select" id="kategori" name="kategori" required>
                                <option disabled selected value>Pilih Kategori</option>
                                <option value="Limbah">Limbah</option>
                                <option value="Lokasi">Lokasi</option>
                            </select>
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
    @foreach ($master_limbah as $ms)
        <div class="modal fade" id="updateModal{{ $ms->id }}" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="updateModalLabel">Form Update Master Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/master_limbah/edit/{{ $ms->id }}" method="post">
                        @csrf
                        @method('put')
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="data" class="form-label">Data Master</label>
                                <input type="text" class="form-control" id="data" name="data" value="{{ $ms->data }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select class="form-select" id="kategori" name="kategori" required>
                                    <option disabled selected value>Pilih Kategori</option>
                                    <option value="Limbah">Limbah</option>
                                    <option value="Lokasi">Lokasi</option>
                                </select>
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
    @endforeach
 
@endsection
