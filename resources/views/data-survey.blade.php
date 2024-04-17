@extends('admin.admin')

@section('content')
<h1>Data Survey</h1>

<div class="card">
    
    <div class="card-header">
        <h4 class="text-center">DATA SURVEY YANG TELAH MASUK</h4>
    </div>
    <div class="card-body">
    <a href="survey/export" class="btn btn-primary btn-lg">Export Data</a>
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
                                <td>Nama PT</td>
                                <td>{{ $s1->nama_pt }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>{{ $s1->nama }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Hari Ini</td>
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
                                <td>Tinggi Badan (cm)</td>
                                <td>{{ $s1->tinggi_badan }}</td>
                            </tr>
                            <tr>
                                <td>Berat Badan (kg)</td>
                                <td>{{ $s1->berat_badan }}</td>
                            </tr>
                            <tr>
                                <td>Posisi/Jabatan</td>
                                <td>{{ $s1->posisi }}</td>
                            </tr>
                            <tr>
                                <td>Lokasi Pekerjaan Utama</td>
                                <td>{{ $s1->lokasi_kerja }}</td>
                            </tr>
                            <tr>
                                <td>Deskripsikan tugas-tugas yang Anda lakukan pada pekerjaan ini dan durasi waktu (untuk tiap shift kerja) yang Anda habiskan untuk melaksanakan setiap tugas </td>
                                <td>{{ $s1->survei1 }}</td>
                            </tr>
                            <tr>
                                <td>Berapa Jam Istirahat yang Berikan Perusahaan Ke pada Karyawan</td>
                                <td>{{ $s1->survei2 }}</td>
                            </tr>
                            <tr>
                                <td>Manakah yang merupakan tangan dominan Anda?</td>
                                <td>{{ $s1->survei3 }}</td>
                            </tr>
                            <tr>
                                <td>Sudah berapa lama Anda bekerja pada posisi/jabatan saat ini?</td>
                                <td>{{ $s1->survei4 }}</td>
                            </tr>
                            <tr>
                                <td>Seberapa sering Anda merasakan kelelahan mental setelah bekerja? </td>
                                <td>{{ $s1->survei5 }}</td>
                            </tr>
                            <tr>
                                <td>Seberapa sering Anda merasakan kelelahan fisik setelah bekerja?</td>
                                <td>{{ $s1->survei6 }}</td>
                            </tr>
                            <tr>
                                <td>Pernahkah Anda mengalami rasa sakit/nyeri atau ketidaknyamanan yang Anda anggap berhubungan dengan pekerjaan dalam satu tahun terakhir? </td>
                                <td>{{ $s1->survei7 }}</td>
                            </tr>
                            <tr>
                                <td>Seberapa sering Anda mengalami masalah pada bagian leher Anda? </td>
                                <td>{{ $s1->survei8 }}</td>
                            </tr>
                            <tr>
                               <td>Seberapa parah masalah yang Anda rasakan pada leher Anda?</td>
                                <td>{{ $s1->survei9 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa sering Anda mengalami masalah pada bagian Bahu kanan Anda?</td>
                                <td>{{ $s1->survei10 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa parah masalah yang Anda rasakan pada Bahu kanan Anda? </td>
                                <td>{{ $s1->survei11 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa sering Anda mengalami masalah pada bagian Bahu kiri Anda?</td>
                                <td>{{ $s1->survei12 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa parah masalah yang Anda rasakan pada Bahu kiri Anda?</td>
                                <td>{{ $s1->survei13 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa sering Anda mengalami masalah pada bagian Siku Kanan Anda?</td>
                                <td>{{ $s1->survei14 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa parah masalah yang Anda rasakan pada Siku Kanan Anda?</td>
                                <td>{{ $s1->survei15 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa sering Anda mengalami masalah pada bagian Siku kiri Anda?</td>
                                <td>{{ $s1->survei16 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa parah masalah yang Anda rasakan pada Siku kiri Anda?</td>
                                <td>{{ $s1->survei17 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa sering Anda mengalami masalah pada bagian Lengan Kanan Anda? </td>
                                <td>{{ $s1->survei18 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa parah masalah yang Anda rasakan pada Lengan Kanan Anda? </td>
                                <td>{{ $s1->survei19 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa sering Anda mengalami masalah pada bagian Lengan kiri Anda?</td>
                                <td>{{ $s1->survei20 }}</td>
                            </tr>
                        @endforeach
                        @foreach ($survei2 as $s2)
                            <tr>
                            <td>Seberapa parah masalah yang Anda rasakan pada Lengan kiri Anda?</td>
                                <td>{{ $s2->survei21 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa sering Anda mengalami masalah pada bagian Tangan Kanan Anda?</td>
                                <td>{{ $s2->survei22 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa parah masalah yang Anda rasakan pada Tangan Kanan Anda? </td>
                                <td>{{ $s2->survei23 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa sering Anda mengalami masalah pada bagian Tangan kiri Anda?</td>
                                <td>{{ $s2->survei24 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa parah masalah yang Anda rasakan pada Tangan kiri Anda?</td>
                                <td>{{ $s2->survei25 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa sering Anda mengalami masalah pada bagian Punggung Atas Anda?</td>
                                <td>{{ $s2->survei26 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa parah masalah yang Anda rasakan pada Punggung Atas Anda?</td>
                                <td>{{ $s2->survei27 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa sering Anda mengalami masalah pada bagian Punggung Bawah Anda? </td>
                                <td>{{ $s2->survei28 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa parah masalah yang Anda rasakan pada Punggung Bawah Anda?</td>
                                <td>{{ $s2->survei29 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa sering Anda mengalami masalah pada bagian Pinggul Kanan Anda?</td>
                                <td>{{ $s2->survei30 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa parah masalah yang Anda rasakan pada Pinggul Kanan Anda? </td>
                                <td>{{ $s2->survei31 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa sering Anda mengalami masalah pada bagian Pinggul kiri Anda?</td>
                                <td>{{ $s2->survei32 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa parah masalah yang Anda rasakan pada Pinggul kiri Anda?</td>
                                <td>{{ $s2->survei33 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa sering Anda mengalami masalah pada bagian Paha Kanan Anda?</td>
                                <td>{{ $s2->survei34 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa parah masalah yang Anda rasakan pada Paha Kanan Anda?</td>
                                <td>{{ $s2->survei35 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa sering Anda mengalami masalah pada bagian Paha kiri Anda?</td>
                                <td>{{ $s2->survei36 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa parah masalah yang Anda rasakan pada Paha kiri Anda?</td>
                                <td>{{ $s2->survei37 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa sering Anda mengalami masalah pada bagian Lutut Kanan Anda?</td>
                                <td>{{ $s2->survei38 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa parah masalah yang Anda rasakan pada Lutut Kanan Anda?</td>
                                <td>{{ $s2->survei39 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa sering Anda mengalami masalah pada bagian Lutut kiri Anda? </td>
                                <td>{{ $s2->survei40 }}</td>
                            </tr>
                        @endforeach
                        @foreach ($survei3 as $s3)
                            <tr>
                            <td>Seberapa parah masalah yang Anda rasakan pada Lutut kiri Anda?</td>
                                <td>{{ $s3->survei41 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa sering Anda mengalami masalah pada bagian Betis Kanan Anda?</td>
                                <td>{{ $s3->survei42 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa parah masalah yang Anda rasakan pada Betis Kanan Anda?</td>
                                <td>{{ $s3->survei43 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa sering Anda mengalami masalah pada bagian Betis kiri Anda? </td>
                                <td>{{ $s3->survei44 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa parah masalah yang Anda rasakan pada Betis kiri Anda? </td>
                                <td>{{ $s3->survei45 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa sering Anda mengalami masalah pada bagian Kaki Kanan Anda?</td>
                                <td>{{ $s3->survei46 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa parah masalah yang Anda rasakan pada Kaki Kanan Anda? </td>
                                <td>{{ $s3->survei47 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa sering Anda mengalami masalah pada bagian Kaki kiri Anda? </td>
                                <td>{{ $s3->survei48 }}</td>
                            </tr>
                            <tr>
                            <td>Seberapa parah masalah yang Anda rasakan pada Kaki kiri Anda?</td>
                                <td>{{ $s3->survei49 }}</td>
                            </tr>
                            <tr>
                            <td>Pernah mengalami cedera pada bagian Leher?</td>
                                <td>{{ $s3->survei50 }}</td>
                            </tr>
                            <tr>
                            <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Leher</td>
                                <td>{{ $s3->survei51 }}</td>
                            </tr>
                            <tr>
                            <td>Pernah mengalami cedera pada bagian Bahu Kanan?</td>
                                <td>{{ $s3->survei52 }}</td>
                            </tr>
                            <tr>
                            <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Bahu Kanan</td>
                                <td>{{ $s3->survei53 }}</td>
                            </tr>
                            <tr>
                            <td>Pernah mengalami cedera pada bagian Bahu Kiri?</td>
                                <td>{{ $s3->survei54 }}</td>
                            </tr>
                            <tr>
                            <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Bahu Kiri</td>
                                <td>{{ $s3->survei55 }}</td>
                            </tr>
                            <tr>
                            <td>Pernah mengalami cedera pada bagian Siku Kanan?</td>
                                <td>{{ $s3->survei56 }}</td>
                            </tr>
                            <tr>
                            <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Siku Kanan</td>
                                <td>{{ $s3->survei57 }}</td>
                            </tr>
                            <tr>
                            <td>Pernah mengalami cedera pada bagian Siku Kiri?</td>
                                <td>{{ $s3->survei58 }}</td>
                            </tr>
                            <tr>
                            <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Siku Kiri</td>
                                <td>{{ $s3->survei59 }}</td>
                            </tr>
                            <tr>
                            <td>Pernah mengalami cedera pada bagian Lengan Kanan?</td>
                                <td>{{ $s3->survei60 }}</td>
                            </tr>
                        @endforeach
                        @foreach ($survei4 as $s4)
                            <tr>
                            <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Lengan Kanan</td>
                                <td>{{ $s4->survei61 }}</td>
                            </tr>
                            <tr>
                            <td>Pernah mengalami cedera pada bagian Lengan Kiri?</td>
                                <td>{{ $s4->survei62 }}</td>
                            </tr>
                            <tr>
                            <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Lengan Kiri</td>
                                <td>{{ $s4->survei63 }}</td>
                            </tr>
                            <tr>
                            <td>Pernah mengalami cedera pada bagian Tangan Kanan?</td>
                                <td>{{ $s4->survei64 }}</td>
                            </tr>
                            <tr>
                            <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Tangan Kanan</td>
                                <td>{{ $s4->survei65 }}</td>
                            </tr>
                            <tr>
                            <td>Pernah mengalami cedera pada bagian Tangan Kiri?</td>
                                <td>{{ $s4->survei66 }}</td>
                            </tr>
                            <tr>
                            <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Tangan Kiri</td>
                                <td>{{ $s4->survei67 }}</td>
                            </tr>
                            <tr>
                            <td>Pernah mengalami cedera pada bagian Punggung Atas?</td>
                                <td>{{ $s4->survei68 }}</td>
                            </tr>
                            <tr>
                            <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Punggung Atas</td>
                                <td>{{ $s4->survei69 }}</td>
                            </tr>
                            <tr>
                            <td>Pernah mengalami cedera pada bagian Punggung Bawah?</td>
                                <td>{{ $s4->survei70 }}</td>
                            </tr>
                            <tr>
                            <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Punggung Bawah</td>
                                <td>{{ $s4->survei71 }}</td>
                            </tr>
                            <tr>
                            <td>Pernah mengalami cedera pada bagian Pinggul Kanan?</td>
                                <td>{{ $s4->survei72 }}</td>
                            </tr>
                            <tr>
                            <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Pinggul Kanan</td>
                                <td>{{ $s4->survei73 }}</td>
                            </tr>
                            <tr>
                            <td>Pernah mengalami cedera pada bagian Pinggul Kiri?</td>
                                <td>{{ $s4->survei74 }}</td>
                            </tr>
                            <tr>
                            <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Pinggul Kiri</td>
                                <td>{{ $s4->survei75 }}</td>
                            </tr>
                            <tr>
                            <td>Pernah mengalami cedera pada bagian Paha Kanan?</td>
                                <td>{{ $s4->survei76 }}</td>
                            </tr>
                            <tr>
                            <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Paha Kanan</td>
                                <td>{{ $s4->survei77 }}</td>
                            </tr>
                            <tr>
                            <td>Pernah mengalami cedera pada bagian Paha Kiri?</td>
                                <td>{{ $s4->survei78 }}</td>
                            </tr>
                            <tr>
                                <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Paha Kiri</td>
                                <td>{{ $s4->survei79 }}</td>
                            </tr>
                            <tr>
                                <td>Pernah mengalami cedera pada bagian Lutut Kiri?</td>
                                <td>{{ $s4->survei80 }}</td>
                            </tr>
                        @endforeach
                        @foreach ($survei5 as $s5)
                            <tr>
                                <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Lutut Kiri</td>
                                <td>{{ $s5->survei81 }}</td>
                            </tr>
                            <tr>
                                <td>Pernah mengalami cedera pada bagian Lutut Kanan?</td>
                                <td>{{ $s5->survei82 }}</td>
                            </tr>
                            <tr>
                                <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Lutut Kanan</td>
                                <td>{{ $s5->survei83 }}</td>
                            </tr>
                            <tr>
                                <td>Pernah mengalami cedera pada bagian Betis Kanan?</td>
                                <td>{{ $s5->survei84 }}</td>
                            </tr>
                            <tr>
                                <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Betis Kanan</td>
                                <td>{{ $s5->survei85 }}</td>
                            </tr>
                            <tr>
                                <td>Pernah mengalami cedera pada bagian Betis Kiri?</td>
                                <td>{{ $s5->survei86 }}</td>
                            </tr>
                            <tr>
                                <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Betis Kiri</td>
                                <td>{{ $s5->survei87 }}</td>
                            </tr>
                            <tr>
                                <td>Pernah mengalami cedera pada bagian Kaki Kanan?</td>
                                <td>{{ $s5->survei88 }}</td>
                            </tr>
                            <tr>
                                <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Kaki Kanan</td>
                                <td>{{ $s5->survei89 }}</td>
                            </tr>
                            <tr>
                                <td>Pernah mengalami cedera pada bagian Kaki Kiri?</td>
                                <td>{{ $s5->survei90 }}</td>
                            </tr>
                            <tr>
                                <td>Kemungkinan pekerjaan yang menyebabkan masalah pada Kaki Kiri</td>
                                <td>{{ $s5->survei91 }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection