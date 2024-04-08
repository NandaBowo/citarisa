@extends('admin.admin')
@section('title','Data Survey')
@section('content')
<div class="page-heading">

    
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Survey</h3>
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
                    Data Survey
                </h5>
            </div>
            <div class="card-body">
                
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Usia</th>
                            <th>Kelamin</th>
                            <th>Tinggi Badan</th>
                            <th>Berat Badan</th>
                            <th>Posisi/jabatan</th>
                            <th>Deskripsi</th>
                            <th>Jam Istirahat</th>
                            <th>Tangan Dominan</th>
                            <th>Lama bekerja</th>
                            <th>Kelelahan mental</th>
                            <th>Kelelahan fisik</th>
                            <th>Mengalami rasa sakit</th>
                            <th>Masalah leher</th>
                            <th>Masalah bahu kanan</th>
                            <th>Parah masalah bahu kanan</th>
                            <th>Masalah bahu kiri</th>
                            <th>Parah masalah bahu kiri</th>
                            <th>Masalah siku kanan</th>
                            <th>Parah masalah siku kanan</th>
                            <th>Masalah siku kiri</th>
                            <th>Parah masalah siku kiri</th>
                            <th>Masalah lengan kanan</th>
                            <th>Parah masalah lengan kanan</th>
                            <th>masalah lengan kiri</th>
                            <th>Parah masalah lengan kiri</th>
                            <th>Masalah tangan kanan</th>
                            <th>Parah masalah tangan kanan</th>
                            <th>Masalah tangan kiri</th>
                            <th>Parah masalah tangan kiri</th>
                            <th>Masalah punggung atas</th>
                            <th>Parah masalah punggung atas</th>
                            <th>Masalah punggung bawah</th>
                            <th>Parah masalah punggung bawah</th>
                            <th>Masalah pinggul kanan</th>
                            <th>Parah masalah pinggul kanan</th>
                            <th>Masalah pinggul kiri</th>
                            <th>Parah masalah pinggul kiri</th>
                            <th>Masalah paha kanan</th>
                            <th>Parah masalah paha kanan</th>
                            <th>Masalah paha kiri</th>
                            <th>Parah masalah paha kiri</th>
                            <th>Masalah lutut kanan</th>
                            <th>Parah masalah lutut kanan</th>
                            <th>Masalah lutut kiri</th>
                            <th>Parah masalah lutut kiri</th>
                            <th>Masalah betis kanan</th>
                            <th>Parah masalah betis kanan</th>
                            <th>Masalah betis kiri</th>
                            <th>Parah masalah betis kiri</th>
                            <th>Masalah kaki kanan</th>
                            <th>Parah masalah kaki kanan</th>
                            <th>Masalah kaki kiri</th>
                            <th>Parah masalah kaki kiri</th>
                            <th>Cedera leher</th>
                            <th>Penyebab masalah leher</th>
                            <th>Cedera bahu kanan</th>
                            <th>Penyebab masalah bahu kanan</th>
                            <th>Cedera bahu kiri</th>
                            <th>Penyebab masalah bahu kiri</th>
                            <th>Cedera siku kanan</th>
                            <th>Penyebab masalah siku kanan</th>
                            <th>Cedera siku kiri</th>
                            <th>Penyebab masalah siku kiri</th>
                            <th>Cedera lengan kanan</th>
                            <th>Penyebab masalah lengan kanan</th>
                            <th>Cedera lengan kiri</th>
                            <th>Penyebab masalah lengan kiri</th>
                            <th>Cedera tangan kanan</th>
                            <th>Penyebab masalah tangan kanan</th>
                            <th>Cedera tangan kiri</th>
                            <th>Penyebab masalah tangan kiri</th>
                            <th>Cedera punggung atas</th>
                            <th>Penyebab masalah punggung atas</th>
                            <th>Cedera punggung bawah</th>
                            <th>Penyebab masalah punggung bawah</th>
                            <th>Cedera pinggul kanan</th>
                            <th>Penyebab masalah pinggul kanan</th>
                            <th>Cedera pinggul kiri</th>
                            <th>Penyebab masalah pinggul kiri</th>
                            <th>Cedera paha kanan</th>
                            <th>Penyebab masalah paha kanan</th>
                            <th>Cedera paha kiri</th>
                            <th>Penyebab masalah paha kiri</th>
                            <th>Cedera lutut kiri</th>
                            <th>Penyebab masalah lutut kiri</th>
                            <th>Cedera lutut kanan</th>
                            <th>Penyebab masalah lutut kanan</th>
                            <th>Cedera betis kanan</th>
                            <th>Penyebab masalah betis kanan</th>
                            <th>Cedera betis kiri</th>
                            <th>Penyebab masalah betis kiri</th>
                            <th>Cedera kaki kanan</th>
                            <th>Penyebab masalah kaki kanan</th>
                            <th>Cedera kaki kiri</th>
                            <th>Penyebab masalah kaki kiri</th>
                            

                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="" wire:click="" class="btn btn-warning btn-sm ">Lihat</button>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="" wire:click="" class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                      
                    </tbody>
                </table>
               
            </div>
        </div>
    </section>
   
</div>
@endsection