@extends('admin.admin')

@section('content')
<h1>Data Survey</h1>

<div class="card">
    <div class="card-header">
        <h4 class="text-center">DATA SURVEY YANG TELAH MASUK</h4>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No. </th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($survei1 as $s1)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $s1->nama }}</td>
                    <td>{{ $s1->tanggal }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#viewModal{{ $s1->id }}">Detail</a>
                            <form action="/survey/delete/{{ $s1->id }}" method="post">
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

<!-- Modal View -->
@foreach($survei1 as $s1)
<div class="modal fade" id="viewModal{{ $s1->id }}" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="viewModalLabel">Detail Data Survey</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tbody>
                        @foreach ($survei1 as $s1)
                            <tr>
                                <td>Nama</td>
                                <td>{{ $s1->nama }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>{{ $s1->tanggal }}</td>
                            </tr>
                            <tr>
                                <td>Usia</td>
                                <td>{{ $s1->usia }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>{{ $s1->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <td>Tinggi Badan</td>
                                <td>{{ $s1->tinggi_badan }}</td>
                            </tr>
                            <tr>
                                <td>Berat Badan</td>
                                <td>{{ $s1->berat_badan }}</td>
                            </tr>
                            <tr>
                                <td>Posisi/Jabatan</td>
                                <td>{{ $s1->posisi }}</td>
                            </tr>
                            <tr>
                                <td>Lokasi Kerja</td>
                                <td>{{ $s1->lokasi_kerja }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s1->survei1 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s1->survei2 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s1->survei3 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s1->survei4 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s1->survei5 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s1->survei6 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s1->survei7 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s1->survei8 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s1->survei9 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s1->survei10 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s1->survei11 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s1->survei12 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s1->survei13 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s1->survei14 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s1->survei15 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s1->survei16 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s1->survei17 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s1->survei18 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s1->survei19 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s1->survei20 }}</td>
                            </tr>
                        @endforeach
                        @foreach ($survei2 as $s2)
                            <tr>
                                <td>{{ $s2->survei21 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s2->survei22 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s2->survei23 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s2->survei24 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s2->survei25 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s2->survei26 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s2->survei27 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s2->survei28 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s2->survei29 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s2->survei30 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s2->survei31 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s2->survei32 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s2->survei33 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s2->survei34 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s2->survei35 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s2->survei36 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s2->survei37 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s2->survei38 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s2->survei39 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s2->survei40 }}</td>
                            </tr>
                        @endforeach
                        @foreach ($survei3 as $s3)
                            <tr>
                                <td>{{ $s3->survei41 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s3->survei42 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s3->survei43 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s3->survei44 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s3->survei45 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s3->survei46 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s3->survei47 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s3->survei48 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s3->survei49 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s3->survei50 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s3->survei51 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s3->survei52 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s3->survei53 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s3->survei54 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s3->survei55 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s3->survei56 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s3->survei57 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s3->survei58 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s3->survei59 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s3->survei60 }}</td>
                            </tr>
                        @endforeach
                        @foreach ($survei4 as $s4)
                            <tr>
                                <td>{{ $s4->survei61 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s4->survei62 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s4->survei63 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s4->survei64 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s4->survei65 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s4->survei66 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s4->survei67 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s4->survei68 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s4->survei69 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s4->survei70 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s4->survei71 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s4->survei72 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s4->survei73 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s4->survei74 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s4->survei75 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s4->survei76 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s4->survei77 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s4->survei78 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s4->survei79 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s4->survei80 }}</td>
                            </tr>
                        @endforeach
                        @foreach ($survei5 as $s5)
                            <tr>
                                <td>{{ $s5->survei81 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s5->survei82 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s5->survei83 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s5->survei84 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s5->survei85 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s5->survei86 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s5->survei87 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s5->survei88 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s5->survei89 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s5->survei90 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $s5->survei91 }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection