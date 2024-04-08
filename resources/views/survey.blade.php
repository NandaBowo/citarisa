<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sitarisa | Survey</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Sitarisa</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="btn btn-sm btn-outline-primary" aria-current="page" href="/login">Login</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="text-center">
        <img src="{{ asset('assets/img/sni.jpg') }}" alt="SNI" class="text-center">
    </div>

    <h1 class="text-center my-5">Survei Keluhan Gangguan Otot Rangka</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/" method="POST">
                @csrf
                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Nama <span class="text-danger">*</span></h5>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Tanggal Hari Ini <span class="text-danger">*</span></h5>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Hari Ini" required>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Usia <span class="text-danger">*</span></h5>
                        <input type="number" class="form-control" id="usia" name="usia" placeholder="Masukkan Usia" required>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Jenis Kelamin <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki-Laki" checked>
                            <label class="form-check-label" for="jenis_kelamin1">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan">
                            <label class="form-check-label" for="jenis_kelamin2">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Tinggi Badan (cm) <span class="text-danger">*</span></h5>
                        <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan" placeholder="Masukkan Tinggi Badan" required>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Berat Badan (kg) <span class="text-danger">*</span></h5>
                        <input type="number" class="form-control" id="berat_badan" name="berat_badan" placeholder="Masukkan Berat Badan" required>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Posisi/Jabatan <span class="text-danger">*</span></h5>
                        <input type="text" class="form-control" id="posisi" name="posisi" placeholder="Masukkan Posisi/Jabatan" required>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Lokasi Pekerjaan Utama <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="lokasi_kerja" id="lokasi_kerja1" value="Kantor" checked>
                            <label class="form-check-label" for="lokasi_kerja1">
                                Kantor
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="lokasi_kerja" id="lokasi_kerja2" value="Pabrik">
                            <label class="form-check-label" for="lokasi_kerja2">
                                Pabrik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="lokasi_kerja" id="lokasi_kerja3" value="Operator">
                            <label class="form-check-label" for="lokasi_kerja3">
                                Operator
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="lokasi_kerja" id="lokasi_kerja4" value="Mekanik/Instrument/Elektrik">
                            <label class="form-check-label" for="lokasi_kerja4">
                                Mekanik/Instrument/Elektrik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="lokasi_kerja" id="lokasi_kerja5" value="Pengelas">
                            <label class="form-check-label" for="lokasi_kerja5">
                                Pengelas
                            </label>
                        </div>
                        <div class="input-group">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" aria-label="Radio button for following text input" name="lokasi_kerja" id="lokasi_kerja6_radio">
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with radio button" placeholder="Masukkan lokasi kerja" id="lokasi_kerja6_input">
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Deskripsikan tugas-tugas yang Anda lakukan pada pekerjaan ini dan durasi waktu (untuk tiap shift kerja) yang Anda habiskan untuk melaksanakan setiap tugas <span class="text-danger">*</span></h5>
                        <p class="card-text">Contoh: 1. Tugas A - membuat RAB - 30 menit</p>
                        <p class="card-text">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2. Tugas B - Mengelas - 30 menit</p>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Jawaban anda" id="survei1" name="survei1" style="height: 100px" required></textarea>
                            <label for="survei1">Jawaban anda</label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Berapa Jam Istirahat yang  Berikan Perusahaan Ke pada Karyawan <span class="text-danger">*</span></h5>
                        <input type="text" class="form-control" id="survei2" name="survei2" placeholder="Jawaban anda" required>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Manakah yang merupakan tangan dominan Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei3" id="survei31" value="Kanan" checked>
                            <label class="form-check-label" for="survei31">
                                Kanan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei3" id="survei32" value="Kiri">
                            <label class="form-check-label" for="survei32">
                                Kiri
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei3" id="survei33" value="Kedua Tangan">
                            <label class="form-check-label" for="survei33">
                                Kedua Tangan
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Sudah berapa lama Anda bekerja pada posisi/jabatan saat ini? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei4" id="survei41" value="Kurang dari 3 bulan" checked>
                            <label class="form-check-label" for="survei41">
                                Kurang dari 3 bulan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei4" id="survei42" value="3 bulan - 1 tahun">
                            <label class="form-check-label" for="survei42">
                                3 bulan - 1 tahun
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei4" id="survei43" value="1 - 5 tahun">
                            <label class="form-check-label" for="survei43">
                                1 - 5 tahun
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei4" id="survei44" value="5 - 10 tahun">
                            <label class="form-check-label" for="survei44">
                                5 - 10 tahun
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei4" id="survei45" value="Lebih dari 10 tahun">
                            <label class="form-check-label" for="survei45">
                                Lebih dari 10 tahun
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda merasakan kelelahan mental setelah bekerja? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei5" id="survei51" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei51">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei5" id="survei52" value="Kadang">
                            <label class="form-check-label" for="survei52">
                                Kadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei5" id="survei53" value="Sering">
                            <label class="form-check-label" for="survei53">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei5" id="survei54" value="Selalu">
                            <label class="form-check-label" for="survei54">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda merasakan kelelahan fisik setelah bekerja? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei6" id="survei61" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei61">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei6" id="survei62" value="Kadang">
                            <label class="form-check-label" for="survei62">
                                Kadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei6" id="survei63" value="Sering">
                            <label class="form-check-label" for="survei63">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei6" id="survei64" value="Selalu">
                            <label class="form-check-label" for="survei64">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernahkah Anda mengalami rasa sakit/nyeri atau ketidaknyamanan yang Anda anggap berhubungan dengan pekerjaan dalam satu tahun terakhir? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei7" id="survei71" value="Ya" checked>
                            <label class="form-check-label" for="survei71">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei7" id="survei72" value="Tidak">
                            <label class="form-check-label" for="survei72">
                                Tidak
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Penilaian keluhan GOTRAK</h5>
                        <p>Berikut merupakan KRITERIA PENILAIAN pada beberapa pertanyaan yang akan ditanyakan</p>
                        <p><strong>Tingkat Keparahan</strong></p>
                        <ul>
                            <li>Tidak ada masalah : tidak ada keluhan dan tidak mengganggu pekerjaan</li>
                            <li>Tidak nyaman : ada keluhan dan mulai/cenderung mengganggu pekerjaan</li>
                            <li>Sakit : nyeri yang mengganggu pekerjaan</li>
                            <li>Sakit parah : sangat nyeri sehingga tidak dapat melakukan pekerjaan</li>
                        </ul>
                        <p><strong>Tingkat Frekuensi</strong></p>
                        <ul>
                            <li>Tidak pernah : tidak pernah terjadi</li>
                            <li>Terkadang : bisa terjadi 1-3 kali dalam setahun</li>
                            <li>Sering : bisa terjadi 1-3 kali dalam 1 bulan</li>
                            <li>Selalu : terjadi hampir setiap hari</li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-3">
                    <img src="{{ asset('assets/img/leher.jpg') }}" class="card-img-top" alt="Leher">
                    <div class="card-body">
                        <p class="card-text">Apakah Anda pernah mengalami permasalahan pada <strong>Leher</strong></p>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>leher</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei8" id="survei81" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei81">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei8" id="survei82" value="Kadang">
                            <label class="form-check-label" for="survei82">
                                Kadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei8" id="survei83" value="Sering">
                            <label class="form-check-label" for="survei83">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei8" id="survei84" value="Selalu">
                            <label class="form-check-label" for="survei84">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>leher</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei9" id="survei91" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei91">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei9" id="survei92" value="Tidak nyaman">
                            <label class="form-check-label" for="survei92">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei9" id="survei93" value="Sakit">
                            <label class="form-check-label" for="survei93">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei9" id="survei94" value="Sakit parah">
                            <label class="form-check-label" for="survei94">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <img src="{{ asset('assets/img/bahu.jpg') }}" class="card-img-top" alt="Bahu">
                    <div class="card-body">
                        <p class="card-text">Apakah Anda pernah mengalami permasalahan pada <strong>Bahu</strong></p>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>Bahu kanan</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei10" id="survei101" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei101">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei10" id="survei102" value="Terkadang">
                            <label class="form-check-label" for="survei102">
                                Terkadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei10" id="survei103" value="Sering">
                            <label class="form-check-label" for="survei103">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei10" id="survei104" value="Selalu">
                            <label class="form-check-label" for="survei104">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>Bahu kanan</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei11" id="survei111" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei111">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei11" id="survei112" value="Tidak nyaman">
                            <label class="form-check-label" for="survei112">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei11" id="survei113" value="Sakit">
                            <label class="form-check-label" for="survei113">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei11" id="survei114" value="Sakit parah">
                            <label class="form-check-label" for="survei114">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>Bahu kiri</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei12" id="survei121" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei121">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei12" id="survei122" value="Terkadang">
                            <label class="form-check-label" for="survei122">
                                Terkadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei12" id="survei123" value="Sering">
                            <label class="form-check-label" for="survei123">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei12" id="survei124" value="Selalu">
                            <label class="form-check-label" for="survei124">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>Bahu kiri</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei13" id="survei131" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei131">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei13" id="survei132" value="Tidak nyaman">
                            <label class="form-check-label" for="survei132">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei13" id="survei133" value="Sakit">
                            <label class="form-check-label" for="survei133">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei13" id="survei134" value="Sakit parah">
                            <label class="form-check-label" for="survei134">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <img src="{{ asset('assets/img/siku.jpg') }}" class="card-img-top" alt="Siku">
                    <div class="card-body">
                        <p class="card-text">Apakah Anda pernah mengalami permasalahan pada <strong>Siku</strong></p>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>Siku Kanan</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei14" id="survei141" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei141">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei14" id="survei142" value="Terkadang">
                            <label class="form-check-label" for="survei142">
                                Terkadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei14" id="survei143" value="Sering">
                            <label class="form-check-label" for="survei143">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei14" id="survei144" value="Selalu">
                            <label class="form-check-label" for="survei144">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>Siku Kanan</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei15" id="survei151" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei151">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei15" id="survei152" value="Tidak nyaman">
                            <label class="form-check-label" for="survei152">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei15" id="survei153" value="Sakit">
                            <label class="form-check-label" for="survei153">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei15" id="survei154" value="Sakit parah">
                            <label class="form-check-label" for="survei154">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>Siku kiri</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei16" id="survei161" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei161">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei16" id="survei162" value="Terkadang">
                            <label class="form-check-label" for="survei162">
                                Terkadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei16" id="survei163" value="Sering">
                            <label class="form-check-label" for="survei163">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei16" id="survei164" value="Selalu">
                            <label class="form-check-label" for="survei164">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>Siku kiri</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei17" id="survei171" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei171">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei17" id="survei172" value="Tidak nyaman">
                            <label class="form-check-label" for="survei172">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei17" id="survei173" value="Sakit">
                            <label class="form-check-label" for="survei173">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei17" id="survei174" value="Sakit parah">
                            <label class="form-check-label" for="survei174">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <img src="{{ asset('assets/img/lengan.jpg') }}" class="card-img-top" alt="lengan">
                    <div class="card-body">
                        <p class="card-text">Apakah Anda pernah mengalami permasalahan pada <strong>Lengan</strong></p>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>Lengan Kanan</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei18" id="survei181" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei181">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei18" id="survei182" value="Terkadang">
                            <label class="form-check-label" for="survei182">
                                Terkadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei18" id="survei183" value="Sering">
                            <label class="form-check-label" for="survei183">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei18" id="survei184" value="Selalu">
                            <label class="form-check-label" for="survei184">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>Lengan Kanan</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei19" id="survei191" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei191">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei19" id="survei192" value="Tidak nyaman">
                            <label class="form-check-label" for="survei192">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei19" id="survei193" value="Sakit">
                            <label class="form-check-label" for="survei193">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei19" id="survei194" value="Sakit parah">
                            <label class="form-check-label" for="survei194">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>Lengan kiri</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei20" id="survei201" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei201">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei20" id="survei202" value="Terkadang">
                            <label class="form-check-label" for="survei202">
                                Terkadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei20" id="survei203" value="Sering">
                            <label class="form-check-label" for="survei203">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei20" id="survei204" value="Selalu">
                            <label class="form-check-label" for="survei204">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>Lengan kiri</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei21" id="survei211" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei211">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei21" id="survei212" value="Tidak nyaman">
                            <label class="form-check-label" for="survei212">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei21" id="survei213" value="Sakit">
                            <label class="form-check-label" for="survei213">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei21" id="survei214" value="Sakit parah">
                            <label class="form-check-label" for="survei214">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <img src="{{ asset('assets/img/tangan.jpg') }}" class="card-img-top" alt="tangan">
                    <div class="card-body">
                        <p class="card-text">Apakah Anda pernah mengalami permasalahan pada <strong>Tangan</strong></p>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>Tangan Kanan</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei22" id="survei221" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei221">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei22" id="survei222" value="Terkadang">
                            <label class="form-check-label" for="survei222">
                                Terkadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei22" id="survei223" value="Sering">
                            <label class="form-check-label" for="survei223">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei22" id="survei224" value="Selalu">
                            <label class="form-check-label" for="survei224">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>Tangan Kanan</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei23" id="survei231" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei231">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei23" id="survei232" value="Tidak nyaman">
                            <label class="form-check-label" for="survei232">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei23" id="survei233" value="Sakit">
                            <label class="form-check-label" for="survei233">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei23" id="survei234" value="Sakit parah">
                            <label class="form-check-label" for="survei234">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>Tangan kiri</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei24" id="survei241" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei241">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei24" id="survei242" value="Terkadang">
                            <label class="form-check-label" for="survei242">
                                Terkadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei24" id="survei243" value="Sering">
                            <label class="form-check-label" for="survei243">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei24" id="survei244" value="Selalu">
                            <label class="form-check-label" for="survei244">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>Tangan kiri</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei25" id="survei251" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei251">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei25" id="survei252" value="Tidak nyaman">
                            <label class="form-check-label" for="survei252">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei25" id="survei253" value="Sakit">
                            <label class="form-check-label" for="survei253">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei25" id="survei254" value="Sakit parah">
                            <label class="form-check-label" for="survei254">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <img src="{{ asset('assets/img/punggung_atas.jpg') }}" class="card-img-top" alt="punggung_atas">
                    <div class="card-body">
                        <p class="card-text">Apakah Anda pernah mengalami permasalahan pada <strong>Punggung Atas</strong></p>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>Punggung Atas</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei26" id="survei261" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei261">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei26" id="survei262" value="Terkadang">
                            <label class="form-check-label" for="survei262">
                                Terkadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei26" id="survei263" value="Sering">
                            <label class="form-check-label" for="survei263">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei26" id="survei264" value="Selalu">
                            <label class="form-check-label" for="survei264">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>Punggung Atas</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei27" id="survei271" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei271">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei27" id="survei272" value="Tidak nyaman">
                            <label class="form-check-label" for="survei272">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei27" id="survei273" value="Sakit">
                            <label class="form-check-label" for="survei273">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei27" id="survei274" value="Sakit parah">
                            <label class="form-check-label" for="survei274">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <img src="{{ asset('assets/img/punggung_bawah.jpg') }}" class="card-img-top" alt="punggung_bawah">
                    <div class="card-body">
                        <p class="card-text">Apakah Anda pernah mengalami permasalahan pada <strong>Punggung Bawah</strong></p>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>Punggung Bawah</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei28" id="survei281" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei281">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei28" id="survei282" value="Terkadang">
                            <label class="form-check-label" for="survei282">
                                Terkadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei28" id="survei283" value="Sering">
                            <label class="form-check-label" for="survei283">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei28" id="survei284" value="Selalu">
                            <label class="form-check-label" for="survei284">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>Punggung Bawah</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei29" id="survei291" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei291">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei29" id="survei292" value="Tidak nyaman">
                            <label class="form-check-label" for="survei292">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei29" id="survei293" value="Sakit">
                            <label class="form-check-label" for="survei293">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei29" id="survei294" value="Sakit parah">
                            <label class="form-check-label" for="survei294">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <img src="{{ asset('assets/img/pinggul.jpg') }}" class="card-img-top" alt="pinggul">
                    <div class="card-body">
                        <p class="card-text">Apakah Anda pernah mengalami permasalahan pada <strong>Pinggul</strong></p>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>Pinggul Kanan</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei30" id="survei301" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei301">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei30" id="survei302" value="Terkadang">
                            <label class="form-check-label" for="survei302">
                                Terkadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei30" id="survei303" value="Sering">
                            <label class="form-check-label" for="survei303">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei30" id="survei304" value="Selalu">
                            <label class="form-check-label" for="survei304">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>Pinggul Kanan</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei31" id="survei311" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei311">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei31" id="survei312" value="Tidak nyaman">
                            <label class="form-check-label" for="survei312">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei31" id="survei313" value="Sakit">
                            <label class="form-check-label" for="survei313">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei31" id="survei314" value="Sakit parah">
                            <label class="form-check-label" for="survei314">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>Pinggul kiri</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei32" id="survei321" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei321">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei32" id="survei322" value="Terkadang">
                            <label class="form-check-label" for="survei322">
                                Terkadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei32" id="survei323" value="Sering">
                            <label class="form-check-label" for="survei323">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei32" id="survei324" value="Selalu">
                            <label class="form-check-label" for="survei324">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>Pinggul kiri</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei33" id="survei331" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei331">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei33" id="survei332" value="Tidak nyaman">
                            <label class="form-check-label" for="survei332">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei33" id="survei333" value="Sakit">
                            <label class="form-check-label" for="survei333">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei33" id="survei334" value="Sakit parah">
                            <label class="form-check-label" for="survei334">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <img src="{{ asset('assets/img/paha.jpg') }}" class="card-img-top" alt="paha">
                    <div class="card-body">
                        <p class="card-text">Apakah Anda pernah mengalami permasalahan pada <strong>Paha</strong></p>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>Paha Kanan</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei34" id="survei341" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei341">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei34" id="survei342" value="Terkadang">
                            <label class="form-check-label" for="survei342">
                                Terkadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei34" id="survei343" value="Sering">
                            <label class="form-check-label" for="survei343">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei34" id="survei344" value="Selalu">
                            <label class="form-check-label" for="survei344">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>Paha Kanan</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei35" id="survei351" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei351">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei35" id="survei352" value="Tidak nyaman">
                            <label class="form-check-label" for="survei352">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei35" id="survei353" value="Sakit">
                            <label class="form-check-label" for="survei353">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei35" id="survei354" value="Sakit parah">
                            <label class="form-check-label" for="survei354">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>Paha kiri</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei36" id="survei361" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei361">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei36" id="survei362" value="Terkadang">
                            <label class="form-check-label" for="survei362">
                                Terkadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei36" id="survei363" value="Sering">
                            <label class="form-check-label" for="survei363">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei36" id="survei364" value="Selalu">
                            <label class="form-check-label" for="survei364">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>Paha kiri</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei37" id="survei371" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei371">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei37" id="survei372" value="Tidak nyaman">
                            <label class="form-check-label" for="survei372">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei37" id="survei373" value="Sakit">
                            <label class="form-check-label" for="survei373">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei37" id="survei374" value="Sakit parah">
                            <label class="form-check-label" for="survei374">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <img src="{{ asset('assets/img/lutut.jpg') }}" class="card-img-top" alt="lutut">
                    <div class="card-body">
                        <p class="card-text">Apakah Anda pernah mengalami permasalahan pada <strong>Lutut</strong></p>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>Lutut Kanan</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei38" id="survei381" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei381">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei38" id="survei382" value="Terkadang">
                            <label class="form-check-label" for="survei382">
                                Terkadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei38" id="survei383" value="Sering">
                            <label class="form-check-label" for="survei383">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei38" id="survei384" value="Selalu">
                            <label class="form-check-label" for="survei384">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>Lutut Kanan</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei39" id="survei391" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei391">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei39" id="survei392" value="Tidak nyaman">
                            <label class="form-check-label" for="survei392">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei39" id="survei393" value="Sakit">
                            <label class="form-check-label" for="survei393">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei39" id="survei394" value="Sakit parah">
                            <label class="form-check-label" for="survei394">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>Lutut kiri</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei40" id="survei401" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei401">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei40" id="survei402" value="Terkadang">
                            <label class="form-check-label" for="survei402">
                                Terkadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei40" id="survei403" value="Sering">
                            <label class="form-check-label" for="survei403">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei40" id="survei404" value="Selalu">
                            <label class="form-check-label" for="survei404">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>Lutut kiri</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei41" id="survei411" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei411">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei41" id="survei412" value="Tidak nyaman">
                            <label class="form-check-label" for="survei412">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei41" id="survei413" value="Sakit">
                            <label class="form-check-label" for="survei413">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei41" id="survei414" value="Sakit parah">
                            <label class="form-check-label" for="survei414">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <img src="{{ asset('assets/img/betis.jpg') }}" class="card-img-top" alt="betis">
                    <div class="card-body">
                        <p class="card-text">Apakah Anda pernah mengalami permasalahan pada <strong>Betis</strong></p>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>Betis Kanan</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei42" id="survei421" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei421">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei42" id="survei422" value="Terkadang">
                            <label class="form-check-label" for="survei422">
                                Terkadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei42" id="survei423" value="Sering">
                            <label class="form-check-label" for="survei423">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei42" id="survei424" value="Selalu">
                            <label class="form-check-label" for="survei424">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>Betis Kanan</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei43" id="survei431" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei431">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei43" id="survei432" value="Tidak nyaman">
                            <label class="form-check-label" for="survei432">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei43" id="survei433" value="Sakit">
                            <label class="form-check-label" for="survei433">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei43" id="survei434" value="Sakit parah">
                            <label class="form-check-label" for="survei434">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>Betis kiri</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei44" id="survei441" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei441">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei44" id="survei442" value="Terkadang">
                            <label class="form-check-label" for="survei442">
                                Terkadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei44" id="survei443" value="Sering">
                            <label class="form-check-label" for="survei443">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei44" id="survei444" value="Selalu">
                            <label class="form-check-label" for="survei444">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>Betis kiri</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei45" id="survei451" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei451">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei45" id="survei452" value="Tidak nyaman">
                            <label class="form-check-label" for="survei452">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei45" id="survei453" value="Sakit">
                            <label class="form-check-label" for="survei453">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei45" id="survei454" value="Sakit parah">
                            <label class="form-check-label" for="survei454">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <img src="{{ asset('assets/img/kaki.jpg') }}" class="card-img-top" alt="kaki">
                    <div class="card-body">
                        <p class="card-text">Apakah Anda pernah mengalami permasalahan pada <strong>Kaki</strong></p>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>Kaki Kanan</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei46" id="survei461" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei461">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei46" id="survei462" value="Terkadang">
                            <label class="form-check-label" for="survei462">
                                Terkadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei46" id="survei463" value="Sering">
                            <label class="form-check-label" for="survei463">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei46" id="survei464" value="Selalu">
                            <label class="form-check-label" for="survei464">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>Kaki Kanan</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei47" id="survei471" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei471">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei47" id="survei472" value="Tidak nyaman">
                            <label class="form-check-label" for="survei472">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei47" id="survei473" value="Sakit">
                            <label class="form-check-label" for="survei473">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei47" id="survei474" value="Sakit parah">
                            <label class="form-check-label" for="survei474">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa sering Anda mengalami masalah pada bagian <strong>Kaki kiri</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei48" id="survei481" value="Tidak pernah" checked>
                            <label class="form-check-label" for="survei481">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei48" id="survei482" value="Terkadang">
                            <label class="form-check-label" for="survei482">
                                Terkadang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei48" id="survei483" value="Sering">
                            <label class="form-check-label" for="survei483">
                                Sering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei48" id="survei484" value="Selalu">
                            <label class="form-check-label" for="survei484">
                                Selalu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Seberapa parah masalah yang Anda rasakan pada <strong>Kaki kiri</strong> Anda? <span class="text-danger">*</span></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei49" id="survei491" value="Tidak ada masalah" checked>
                            <label class="form-check-label" for="survei491">
                                Tidak ada masalah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei49" id="survei492" value="Tidak nyaman">
                            <label class="form-check-label" for="survei492">
                                Tidak nyaman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei49" id="survei493" value="Sakit">
                            <label class="form-check-label" for="survei493">
                                Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei49" id="survei494" value="Sakit parah">
                            <label class="form-check-label" for="survei494">
                                Sakit parah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Harap isi beberapa pertanyaan berikut, hanya pada bagian tubuh yang terasa "sakit", "sakit parah" atau bagian tubuh yang "selalu" terasa "tidak nyaman"</h5>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Leher</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei50" id="survei501" value="Ya">
                            <label class="form-check-label" for="survei501">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei50" id="survei502" value="Tidak">
                            <label class="form-check-label" for="survei502">
                                Tidak
                            </label>
                        </div>
                        <input class="form-check-input" type="radio" name="survei50" id="survei503" value="" checked>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Leher</strong></h5>
                        <input type="text" class="form-control" id="survei51" name="survei51" placeholder="Jawaban anda">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Bahu Kanan</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei52" id="survei521" value="Ya">
                            <label class="form-check-label" for="survei521">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei52" id="survei522" value="Tidak">
                            <label class="form-check-label" for="survei522">
                                Tidak
                            </label>
                        </div>
                        <input class="form-check-input" type="radio" name="survei52" id="survei523" value="" checked>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Bahu Kanan</strong></h5>
                        <input type="text" class="form-control" id="survei53" name="survei53" placeholder="Jawaban anda">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Bahu Kiri</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei54" id="survei541" value="Ya">
                            <label class="form-check-label" for="survei541">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei54" id="survei542" value="Tidak">
                            <label class="form-check-label" for="survei542">
                                Tidak
                            </label>
                        </div>
                        <input class="form-check-input" type="radio" name="survei54" id="survei543" value="" checked>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Bahu Kiri</strong></h5>
                        <input type="text" class="form-control" id="survei55" name="survei55" placeholder="Jawaban anda">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Siku Kanan</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei56" id="survei561" value="Ya">
                            <label class="form-check-label" for="survei561">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei56" id="survei562" value="Tidak">
                            <label class="form-check-label" for="survei562">
                                Tidak
                            </label>
                        </div>
                        <input class="form-check-input" type="radio" name="survei56" id="survei563" value="" checked>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Siku Kanan</strong></h5>
                        <input type="text" class="form-control" id="survei57" name="survei57" placeholder="Jawaban anda">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Siku Kiri</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei58" id="survei581" value="Ya">
                            <label class="form-check-label" for="survei581">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei58" id="survei582" value="Tidak">
                            <label class="form-check-label" for="survei582">
                                Tidak
                            </label>
                        </div>
                        <input class="form-check-input" type="radio" name="survei58" id="survei583" value="" checked>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Siku Kiri</strong></h5>
                        <input type="text" class="form-control" id="survei59" name="survei59" placeholder="Jawaban anda">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Lengan Kanan</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei60" id="survei601" value="Ya">
                            <label class="form-check-label" for="survei601">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei60" id="survei602" value="Tidak">
                            <label class="form-check-label" for="survei602">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <input class="form-check-input" type="radio" name="survei60" id="survei603" value="" checked>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Lengan Kanan</strong></h5>
                        <input type="text" class="form-control" id="survei61" name="survei61" placeholder="Jawaban anda">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Lengan Kiri</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei62" id="survei621" value="Ya">
                            <label class="form-check-label" for="survei621">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei62" id="survei622" value="Tidak">
                            <label class="form-check-label" for="survei622">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <input class="form-check-input" type="radio" name="survei62" id="survei623" value="" checked>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Lengan Kiri</strong></h5>
                        <input type="text" class="form-control" id="survei63" name="survei63" placeholder="Jawaban anda">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Tangan Kanan</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei64" id="survei641" value="Ya">
                            <label class="form-check-label" for="survei641">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei64" id="survei642" value="Tidak">
                            <label class="form-check-label" for="survei642">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <input class="form-check-input" type="radio" name="survei64" id="survei643" value="" checked>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Tangan Kanan</strong></h5>
                        <input type="text" class="form-control" id="survei65" name="survei65" placeholder="Jawaban anda">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Tangan Kiri</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei66" id="survei661" value="Ya">
                            <label class="form-check-label" for="survei661">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei66" id="survei662" value="Tidak">
                            <label class="form-check-label" for="survei662">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <input class="form-check-input" type="radio" name="survei66" id="survei663" value="" checked>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Tangan Kiri</strong></h5>
                        <input type="text" class="form-control" id="survei67" name="survei67" placeholder="Jawaban anda">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Punggung Atas</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei68" id="survei681" value="Ya">
                            <label class="form-check-label" for="survei681">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei68" id="survei682" value="Tidak">
                            <label class="form-check-label" for="survei682">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <input class="form-check-input" type="radio" name="survei68" id="survei683" value="" checked>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Punggung Atas</strong></h5>
                        <input type="text" class="form-control" id="survei69" name="survei69" placeholder="Jawaban anda">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Punggung Bawah</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei70" id="survei701" value="Ya">
                            <label class="form-check-label" for="survei701">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei70" id="survei702" value="Tidak">
                            <label class="form-check-label" for="survei702">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <input class="form-check-input" type="radio" name="survei70" id="survei703" value="" checked>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Punggung Bawah</strong></h5>
                        <input type="text" class="form-control" id="survei71" name="survei71" placeholder="Jawaban anda">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Pinggul Kanan</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei72" id="survei721" value="Ya">
                            <label class="form-check-label" for="survei721">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei72" id="survei722" value="Tidak">
                            <label class="form-check-label" for="survei722">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <input class="form-check-input" type="radio" name="survei72" id="survei723" value="" checked>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Pinggul Kanan</strong></h5>
                        <input type="text" class="form-control" id="survei73" name="survei73" placeholder="Jawaban anda">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Pinggul Kiri</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei74" id="survei741" value="Ya">
                            <label class="form-check-label" for="survei741">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei74" id="survei742" value="Tidak">
                            <label class="form-check-label" for="survei742">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <input class="form-check-input" type="radio" name="survei74" id="survei743" value="" checked>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Pinggul Kiri</strong></h5>
                        <input type="text" class="form-control" id="survei75" name="survei75" placeholder="Jawaban anda">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Paha Kanan</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei76" id="survei761" value="Ya">
                            <label class="form-check-label" for="survei761">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei76" id="survei762" value="Tidak">
                            <label class="form-check-label" for="survei762">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <input class="form-check-input" type="radio" name="survei76" id="survei763" value="" checked>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Paha Kanan</strong></h5>
                        <input type="text" class="form-control" id="survei77" name="survei77" placeholder="Jawaban anda">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Paha Kiri</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei78" id="survei781" value="Ya">
                            <label class="form-check-label" for="survei781">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei78" id="survei782" value="Tidak">
                            <label class="form-check-label" for="survei782">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <input class="form-check-input" type="radio" name="survei78" id="survei783" value="" checked>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Paha Kiri</strong></h5>
                        <input type="text" class="form-control" id="survei79" name="survei79" placeholder="Jawaban anda">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Lutut Kiri</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei80" id="survei801" value="Ya">
                            <label class="form-check-label" for="survei801">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei80" id="survei802" value="Tidak">
                            <label class="form-check-label" for="survei802">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <input class="form-check-input" type="radio" name="survei80" id="survei803" value="" checked>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Lutut Kiri</strong></h5>
                        <input type="text" class="form-control" id="survei81" name="survei81" placeholder="Jawaban anda">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Lutut Kanan</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei82" id="survei821" value="Ya">
                            <label class="form-check-label" for="survei821">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei82" id="survei822" value="Tidak">
                            <label class="form-check-label" for="survei822">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <input class="form-check-input" type="radio" name="survei82" id="survei823" value="" checked>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Lutut Kanan</strong></h5>
                        <input type="text" class="form-control" id="survei83" name="survei83" placeholder="Jawaban anda">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Betis Kanan</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei84" id="survei841" value="Ya">
                            <label class="form-check-label" for="survei841">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei84" id="survei842" value="Tidak">
                            <label class="form-check-label" for="survei842">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <input class="form-check-input" type="radio" name="survei84" id="survei843" value="" checked>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Betis Kanan</strong></h5>
                        <input type="text" class="form-control" id="survei85" name="survei85" placeholder="Jawaban anda">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Betis Kiri</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei86" id="survei861" value="Ya">
                            <label class="form-check-label" for="survei861">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei86" id="survei862" value="Tidak">
                            <label class="form-check-label" for="survei862">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <input class="form-check-input" type="radio" name="survei86" id="survei863" value="" checked>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Betis Kiri</strong></h5>
                        <input type="text" class="form-control" id="survei87" name="survei87" placeholder="Jawaban anda">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Kaki Kanan</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei88" id="survei881" value="Ya">
                            <label class="form-check-label" for="survei881">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei88" id="survei882" value="Tidak">
                            <label class="form-check-label" for="survei882">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <input class="form-check-input" type="radio" name="survei88" id="survei883" value="" checked>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Kaki Kanan</strong></h5>
                        <input type="text" class="form-control" id="survei89" name="survei89" placeholder="Jawaban anda">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Pernah mengalami cedera pada bagian <strong>Kaki Kiri</strong>?</h5>
                        <p class="card-text">Silahkan mengosongkan jawaban jika bagian tubuh ini tidak terasa "sakit", "sakit parah" atau tidak "selalu" terasa "tidak nyaman"</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei90" id="survei901" value="Ya">
                            <label class="form-check-label" for="survei901">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="survei90" id="survei902" value="Tidak">
                            <label class="form-check-label" for="survei902">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <input class="form-check-input" type="radio" name="survei90" id="survei903" value="" checked>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Kemungkinan pekerjaan yang menyebabkan masalah pada <strong>Kaki Kiri</strong></h5>
                        <input type="text" class="form-control" id="survei91" name="survei91" placeholder="Jawaban anda">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100 mb-5">Kirim Survey</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
        const lokasi_kerja_radio = document.getElementById('lokasi_kerja6_radio');
        const lokasi_kerja_input = document.getElementById('lokasi_kerja6_input');

        lokasi_kerja_input.addEventListener('input', function() {
            lokasi_kerja_radio.value = lokasi_kerja_input.value
        });
    </script>
</body>
</html>