@extends('layout.hydra')
 
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
                    <th scope="col">Maksimal Penyimpanan s/d tanggal</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($limbah_masuk as $lb)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $lb->jenis_limbah }}</td>
                            <td>{{ date('d M Y', strtotime($lb->tanggal_masuk_limbah)) }}</td>
                            <td>{{ $lb->sumber_limbah }}</td>
                            <td>{{ $lb->jumlah_limbah }}</td>
                            <td>{{ date('d M Y', strtotime($lb->maksimal_penyimpanan_limbah)) }}</td>
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
                            <label for="jenis_limbah" class="form-label">Jenis Limbah B3 Masuk</label>
                            <select class="form-select" id="jenis_limbah" name="jenis_limbah" required>
                                <option disabled selected value>Pilih Jenis Limbah</option>
                                <option value="Residu sampel (filter) Januari">Residu sampel (filter) Januari</option>
                                <option value="Residu sampel (filter) Februari">Residu sampel (filter) Februari</option>
                                <option value="Residu sampel (filter) Maret">Residu sampel (filter) Maret</option>
                                <option value="Residu sampel (filter) April">Residu sampel (filter) April</option>
                                <option value="Residu sampel (filter) Mei">Residu sampel (filter) Mei</option>
                                <option value="Residu sampel (filter) Juni">Residu sampel (filter) Juni</option>
                                <option value="Residu sampel (filter) Juli">Residu sampel (filter) Juli</option>
                                <option value="Residu sampel (filter) Agustus">Residu sampel (filter) Agustus</option>
                                <option value="Residu sampel (filter) September">Residu sampel (filter) September</option>
                                <option value="Residu sampel (filter) Oktober">Residu sampel (filter) Oktober</option>
                                <option value="Residu sampel (filter) November">Residu sampel (filter) November</option>
                                <option value="Residu sampel (filter) Desember">Residu sampel (filter) Desember</option>
                                <option value="Botol Bekas Bahan Kimia">Botol Bekas Bahan Kimia</option>
                                <option value="Bahan Kimia Kadaluarsa">Bahan Kimia Kadaluarsa</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_masuk_limbah" class="form-label">Tanggal Masuk Limbah B3</label>
                            <input type="date" class="form-control" id="tanggal_masuk_limbah" name="tanggal_masuk_limbah" required>
                        </div>
                        <div class="mb-3">
                            <label for="sumber_limbah" class="form-label">Jenis Limbah B3 Masuk</label>
                            <select class="form-select" id="sumber_limbah" name="sumber_limbah" required>
                                <option disabled selected value>Pilih Sumber Limbah</option>
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
                            <label for="jumlah_limbah" class="form-label">Jumlah Limbah B3 Masuk (KG)</label>
                            <input type="number" step="0.01" class="form-control" id="jumlah_limbah" name="jumlah_limbah" required>
                        </div>
                        <div class="mb-3">
                            <label for="maksimal_penyimpanan" class="form-label">Maksimal Penyimpanan s/d Tanggal</label>
                            <input type="date" class="form-control" id="maksimal_penyimpanan" name="maksimal_penyimpanan">
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
