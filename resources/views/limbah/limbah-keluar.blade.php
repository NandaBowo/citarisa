@extends('layout.hydra')
 
@section('content')

    <h1>Limbah Keluar</h1>

    <div class="card">
        <div class="card-header">
            <h4 class="text-center">KELUARNYA LIMBAH B 3 DARI TPS</h4>
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
                    <th scope="col">Jenis Limbah</th>
                    <th scope="col">Tanggal Keluar Limbah</th>
                    <th scope="col">Jumlah Limbah B3 Keluar (KG)</th>
                    <th scope="col">Tujuan Penyerahan</th>
                    <th scope="col">Bukti Nomor Dokumen</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($limbah_keluar as $lk)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $lk->jenis_limbah }}</td>
                            <td>{{ date("d M Y", strtotime($lk->tanggal_keluar_limbah)) }}</td>
                            <td>{{ $lk->jumlah_limbah_keluar }}</td>
                            <td>{{ $lk->tujuan_penyerahan }}</td>
                            <td>{{ $lk->bukti_nomor_dokumen }}</td>
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
                <form action="/limbah_keluar" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="jenis_limbah" class="form-label">Jenis Limbah B3 Masuk</label>
                            <select class="form-select" id="jenis_limbah" name="jenis_limbah" required>
                                <option disabled selected value>Pilih Jenis Limbah</option>
                                <option value="Laboratorium">Laboratorium</option>
                                <option value="Limbah Terkontaminasi">Limbah Terkontaminasi</option>
                                <option value="Limbah Sludge Analisis">Limbah Sludge Analisis</option>
                                <option value="Limbah Bahan Kimia Kadaluarsa">Limbah Bahan Kimia Kadaluarsa</option>
                                <option value="Limbah Baterai/Elektronik">Limbah Baterai/Elektronik</option>
                                <option value="Limbah Wadah Kimia Terkontaminasi">Limbah Wadah Kimia Terkontaminasi</option>
                                <option value="Limbah Infeksius">Limbah Infeksius</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_keluar_limbah" class="form-label">Tanggal Keluar Limbah B3</label>
                            <input type="date" class="form-control" id="tanggal_keluar_limbah" name="tanggal_keluar_limbah" required>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah_limbah" class="form-label">Jumlah Limbah B3 Keluar (KG)</label>
                            <input type="number" step="0.01" class="form-control" id="jumlah_limbah" name="jumlah_limbah" required>
                        </div>
                        <div class="mb-3">
                            <label for="tujuan_penyerahan" class="form-label">Tujuan Penyerahan</label>
                            <input type="text" class="form-control" id="tujuan_penyerahan" name="tujuan_penyerahan">
                        </div>
                        <div class="mb-3">
                            <label for="bukti_nomor_dokumen" class="form-label">Bukti Nomor Dokumen</label>
                            <input type="text" class="form-control" id="bukti_nomor_dokumen" name="bukti_nomor_dokumen">
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
