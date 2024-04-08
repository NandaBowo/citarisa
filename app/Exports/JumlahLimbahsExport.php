<?php

namespace App\Exports;

use App\Models\JumlahLimbah;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;


class JumlahLimbahsExport implements FromQuery, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return JumlahLimbah::query()
        ->join('master_limbahs', 'master_limbahs.id', '=', 'jumlah_limbahs.jenis_limbah_id')
        ->select([
            'jumlah_limbahs.id',
            'master_limbahs.data as jenis_limbah',
            'jumlah_limbahs.jumlah_limbah'
              
         
              
        ]);
    }
    public function headings(): array
    {
        return [
            'No',
            'Jenis Limbah B3 Masuk',
            'Jumlah Limbah B3 Masuk (KG)',
            
        ];
    }
}
