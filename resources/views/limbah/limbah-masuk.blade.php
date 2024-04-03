@extends('admin.admin')
 
@section('content')

    <h1>Limbah Masuk</h1>

    <div class="card">
        <div class="card-header">
            <h4 class="text-center">MASUKNYA LIMBAH B 3 KE TPS</h4>
        </div>
        <div class="mx-4 mb-3">
            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data Baru
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
                    <th scope="col">Jenis Limbah B3 Masuk</th>
                    <th scope="col">Tanggal Masuk Limbah B3</th>
                    <th scope="col">Sumber Limbah B3</th>
                    <th scope="col">Jumlah Limbah B3 Masuk (KG)</th>
                    <th scope="col">Tanggal Expired Limbah</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($limbah_masuk as $lb)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $lb->data }}</td>
                            <td>{{ date("d M Y", strtotime($lb->tanggal_masuk_limbah)) }}</td>
                            <td>{{ $lb->sumber_limbah }}</td>
                            <td>{{ $lb->jumlah_limbah }}</td>
                            <td>{{ date("d M Y", strtotime($lb->tanggal_exp_limbah)) }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="/limbah_keluar" class="btn btn-sm btn-warning me-2">Ubah</a>
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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Data Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/limbah_masuk" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="jenis_limbah_id" class="form-label">Jenis Limbah B3 Masuk</label>
                            <select class="form-select" id="jenis_limbah_id" name="jenis_limbah_id" required>
                                <option disabled selected value>Pilih Jenis Limbah</option>
                                @foreach ($master_limbah as $ms)
                                    <option value="{{ $ms->id }}">{{ $ms->data }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_masuk_limbah" class="form-label">Tanggal Masuk Limbah B3</label>
                            <input type="date" class="form-control" id="tanggal_masuk_limbah" name="tanggal_masuk_limbah" required>
                        </div>
                        <div class="mb-3">
                            <label for="sumber_limbah" class="form-label">Sumber Limbah B3 Masuk</label>
                            <input type="text" class="form-control" id="sumber_limbah" name="sumber_limbah" required>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah_limbah" class="form-label">Jumlah Limbah B3 Masuk (KG)</label>
                            <input type="number" step="0.01" class="form-control" id="jumlah_limbah" name="jumlah_limbah" required>
                        </div>
                        <div class="mb-3">
                            <label for="durasi_exp_limbah" class="form-label">Durasi Expired Limbah (Hari)</label>
                            <input type="number" class="form-control" id="durasi_exp_limbah" name="durasi_exp_limbah">
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
