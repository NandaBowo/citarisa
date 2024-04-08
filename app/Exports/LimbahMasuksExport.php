<?php

namespace App\Exports;

use App\Models\LimbahMasuk;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LimbahMasuksExport implements FromQuery, WithHeadings
{
    public function query()
    {
        return LimbahMasuk::query()
            ->join('master_limbahs', 'limbah_masuks.jenis_limbah_id', '=', 'master_limbahs.id')
            ->select([
                'limbah_masuks.id',
                'master_limbahs.data as jenis_limbah',
                'limbah_masuks.tanggal_masuk_limbah',
                'limbah_masuks.sumber_limbah',
                'limbah_masuks.jumlah_limbah',
                'limbah_masuks.tanggal_exp_limbah',
            ]);
    }

    public function headings(): array
    {
        return [
            'No',
            'Jenis Limbah B3 Masuk',
            'Tanggal Masuk Limbah B3',
            'Sumber Limbah B3',
            'Jumlah Limbah B3 Masuk (KG)',
            'Tanggal Expired Limbah',
        ];
    }
}
