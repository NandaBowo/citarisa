<?php

namespace App\Exports;

use App\Models\Apar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AparsExport implements FromQuery, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return Apar::query()->select([
            'merek',
            'jenis',
            'lokasi',
            'id',
            'tanggalpengecekan',
            'berat',
            'segel',
            'selang',
            'indikator',
            'fisik',
            'keterangan',
        ]);
    }
    public function headings(): array
    {
        return [
            
            'Merek/Type',
            'Jenis',
            'Lokasi Penempatan',
            'Nomor Apar',
            'Tanggal Pengecekan',
            'Kondisi Apar (Berat kg)',
            'Kondisi Apar (Segel)',
            'Kondisi Apar (Selang)',
            'Kondisi Apar (Indikator)',
            'Kondisi Apar (Fisik)',
            'Keterangan',
        ];
    }
}
