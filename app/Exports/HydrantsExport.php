<?php

namespace App\Exports;

use App\Models\Hydra;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HydrantsExport implements FromQuery, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return Hydra::query()->select([
            'nama',
            'lokasi',
            'posisi',
            'kondisihouse',
            'valve',
            'jumlah',
            'peralatan',
            'kondisikabinet',
            'flow',
        ]);
    }
    public function headings(): array
    {
        return [
            
        'Nama',
        'Lokasi Penempatan hydrant',
        'Pastikan posisi kabinet tidak terhalang oleh penempatan material',
        'Cek kondisi hose',
        'Cek Valve',
        'Cek jumlah dan jenis peralatan pada kabinet',
        'Cek peralatan dari korosi dan kotoran',
        'Cek kondisi fisik kabinet',
        'Flow test setiap setahun sekali',
        ];
    }
}
