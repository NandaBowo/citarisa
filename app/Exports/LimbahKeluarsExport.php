<?php

namespace App\Exports;

use App\Models\LimbahKeluar;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LimbahKeluarsExport implements FromQuery, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return LimbahKeluar::query()
        ->join('master_limbahs', 'limbah_keluars.jenis_limbah_id', '=', 'master_limbahs.id')
        ->select([
            'limbah_keluars.id',
            'master_limbahs.data as jenis_limbah',
            'limbah_keluars.tanggal_keluar_limbah',
            'limbah_keluars.jumlah_limbah_keluar',
            'limbah_keluars.tujuan_penyerahan',
            'limbah_keluars.bukti_nomor_dokumen',
              
         
              
        ]);
    }
    public function headings(): array
    {
        return [
            'No',
            'Jenis Limbah ',
            'Tanggal Keluar Limbah',
            'Jumlah  Limbah B3 Keluar (KG)',
            'Tujuan Penyerahan',
            'Bukti Nomor Dokumen',
        ];
    }
}
