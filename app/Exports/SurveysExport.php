<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class SurveysExport implements FromQuery, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return DB::table('survey')
            ->select(
                'survey.nama_pt', 'survey.nama', 'survey.tanggal', 'survey.usia', 'survey.jenis_kelamin',
                'survey.tinggi_badan', 'survey.berat_badan', 'survey.posisi', 'survey.lokasi_kerja',
                'survey.survei1', 'survey.survei2', 'survey.survei3', 'survey.survei4', 'survey.survei5',
                'survey.survei6', 'survey.survei7', 'survey.survei8', 'survey.survei9', 'survey.survei10',
                'survey.survei11', 'survey.survei12', 'survey.survei13', 'survey.survei14', 'survey.survei15',
                'survey.survei16', 'survey.survei17', 'survey.survei18', 'survey.survei19', 'survey.survei20',
                'survey2.survei21', 'survey2.survei22', 'survey2.survei23', 'survey2.survei24', 'survey2.survei25',
                'survey2.survei26', 'survey2.survei27', 'survey2.survei28', 'survey2.survei29', 'survey2.survei30',
                'survey2.survei31', 'survey2.survei32', 'survey2.survei33', 'survey2.survei34', 'survey2.survei35',
                'survey2.survei36', 'survey2.survei37', 'survey2.survei38', 'survey2.survei39', 'survey2.survei40',
                'survey3.survei41', 'survey3.survei42', 'survey3.survei43', 'survey3.survei44', 'survey3.survei45',
                'survey3.survei46', 'survey3.survei47', 'survey3.survei48', 'survey3.survei49', 'survey3.survei50',
                'survey3.survei51', 'survey3.survei52', 'survey3.survei53', 'survey3.survei54', 'survey3.survei55',
                'survey3.survei56', 'survey3.survei57', 'survey3.survei58', 'survey3.survei59', 'survey3.survei60',
                'survey4.survei61', 'survey4.survei62', 'survey4.survei63', 'survey4.survei64', 'survey4.survei65',
                'survey4.survei66', 'survey4.survei67', 'survey4.survei68', 'survey4.survei69', 'survey4.survei70',
                'survey4.survei71', 'survey4.survei72', 'survey4.survei73', 'survey4.survei74', 'survey4.survei75',
                'survey4.survei76', 'survey4.survei77', 'survey4.survei78', 'survey4.survei79', 'survey4.survei80',
                'survey5.survei81', 'survey5.survei82', 'survey5.survei83', 'survey5.survei84', 'survey5.survei85',
                'survey5.survei86', 'survey5.survei87', 'survey5.survei88', 'survey5.survei89', 'survey5.survei90',
                'survey5.survei91'
            )
            ->leftJoin('survey2', 'survey.id', '=', 'survey2.id')
            ->leftJoin('survey3', 'survey.id', '=', 'survey3.id')
            ->leftJoin('survey4', 'survey.id', '=', 'survey4.id')
            ->leftJoin('survey5', 'survey.id', '=', 'survey5.id')
            ->orderBy('survey.tanggal', 'asc'); // Adding orderBy clause at the end
    }
    


    public function headings(): array
    {
        return [
            'Nama PT', 'Nama', 'Tanggal Hari Ini', 'Usia', 'Jenis Kelamin',
            'Tinggi Badan', 'Berat Badan', 'Posisi/Jabatan', 'Lokasi Kerja',
            'Deskripsikan tugas-tugas', 'Jam Istirahat', 'tangan dominan', 'lama bekerja', 
            'kelelahan mental ','kelelahan fisik', 'Mengalami rasa sakit', 'Masalah leher', 'parah masalah leher', 'Masalah bahu kanan',
            'Parah masalah bahu kanan', 'Masalah bahu kiri', 'Parah masalah bahu kiri', 'Masalah siku kanan', 'Parah masalah siku kanan',
            'Masalah siku kiri', 'Parah masalah siku kiri', 'Masalah lengan kanan', 'Parah masalah lengan kanan', 'masalah lengan kiri',
            'Parah masalah lengan kiri', 'Masalah tangan kanan', 'Parah masalah tangan kanan', 'Masalah tangan kiri', 'Parah masalah tangan kiri',
            'Masalah punggung atas', 'Parah masalah punggung atas', 'Masalah punggung bawah', 'Parah masalah punggung bawah', 'Masalah pinggul kanan',
            'Parah masalah pinggul kanan', 'Masalah pinggul kiri', 'Parah masalah pinggul kiri', 'Masalah paha kanan', 'Parah masalah paha kanan',
            'Masalah paha kiri', 'Parah masalah paha kiri', 'Masalah lutut kanan', 'Parah masalah lutut kanan', 'Masalah lutut kiri',
            'Parah masalah lutut kiri', 'Masalah betis kanan', 'Parah masalah betis kanan', 'Masalah betis kiri', 'Parah masalah betis kiri',
            'Masalah kaki kanan', 'Parah masalah kaki kanan', 'Masalah kaki kiri', 'Parah masalah kaki kiri', 'Cedera leher',
            'Penyebab masalah leher', 'Cedera bahu kanan', 'Penyebab masalah bahu kanan', 'Cedera bahu kiri', 'Penyebab masalah bahu kiri',
            'Cedera siku kanan', 'Penyebab masalah siku kanan', 'Cedera siku kiri', 'Penyebab masalah siku kiri', 'Cedera lengan kanan',
            'Penyebab masalah lengan kanan', 'Cedera lengan kiri', 'Penyebab masalah lengan kiri', 'Cedera tangan kanan', 'Penyebab masalah tangan kanan',
            'Cedera tangan kiri', 'Penyebab masalah tangan kiri', 'Cedera punggung atas', 'Penyebab masalah punggung atas', 'Cedera punggung bawah',
            'Penyebab masalah punggung bawah', 'Cedera pinggul kanan', 'Penyebab masalah pinggul kanan', 'Cedera pinggul kiri', 'Penyebab masalah pinggul kiri',
            'Cedera paha kanan', 'Penyebab masalah paha kanan', 'Cedera paha kiri', 'Penyebab masalah paha kiri', 'Cedera lutut kiri',
            'Penyebab masalah lutut kiri', 'Cedera lutut kanan', 'Penyebab masalah lutut kanan', 'Cedera betis kanan', 'Penyebab masalah betis kanan',
            'Cedera betis kiri', 'Penyebab masalah betis kiri', 'Cedera kaki kanan', 'Penyebab masalah kaki kanan', 'Cedera kaki kiri',
            'Penyebab masalah kaki kiri'
        ];
    }
}
