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
                'survey.nama', 'survey.nama_pt', 'survey.tanggal', 'survey.usia', 'survey.jenis_kelamin',
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
            'Nama', 'Nama PT', 'Tanggal', 'Usia', 'Jenis Kelamin',
            'Tinggi Badan', 'Berat Badan', 'Posisi', 'Lokasi Kerja',
            'Survei 1', 'Survei 2', 'Survei 3', 'Survei 4', 'Survei 5',
            'Survei 6', 'Survei 7', 'Survei 8', 'Survei 9', 'Survei 10',
            'Survei 11', 'Survei 12', 'Survei 13', 'Survei 14', 'Survei 15',
            'Survei 16', 'Survei 17', 'Survei 18', 'Survei 19', 'Survei 20',
            'Survei 21', 'Survei 22', 'Survei 23', 'Survei 24', 'Survei 25',
            'Survei 26', 'Survei 27', 'Survei 28', 'Survei 29', 'Survei 30',
            'Survei 31', 'Survei 32', 'Survei 33', 'Survei 34', 'Survei 35',
            'Survei 36', 'Survei 37', 'Survei 38', 'Survei 39', 'Survei 40',
            'Survei 41', 'Survei 42', 'Survei 43', 'Survei 44', 'Survei 45',
            'Survei 46', 'Survei 47', 'Survei 48', 'Survei 49', 'Survei 50',
            'Survei 51', 'Survei 52', 'Survei 53', 'Survei 54', 'Survei 55',
            'Survei 56', 'Survei 57', 'Survei 58', 'Survei 59', 'Survei 60',
            'Survei 61', 'Survei 62', 'Survei 63', 'Survei 64', 'Survei 65',
            'Survei 66', 'Survei 67', 'Survei 68', 'Survei 69', 'Survei 70',
            'Survei 71', 'Survei 72', 'Survei 73', 'Survei 74', 'Survei 75',
            'Survei 76', 'Survei 77', 'Survei 78', 'Survei 79', 'Survei 80',
            'Survei 81', 'Survei 82', 'Survei 83', 'Survei 84', 'Survei 85',
            'Survei 86', 'Survei 87', 'Survei 88', 'Survei 89', 'Survei 90',
            'Survei 91'
        ];
    }
}
