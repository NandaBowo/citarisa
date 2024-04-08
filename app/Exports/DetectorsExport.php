<?php

namespace App\Exports;

use App\Models\Detector;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DetectorsExport implements FromQuery, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return Detector::query()->select([
            'nama',
            'lokasi',
            'signal',
            'kondisi',
            'alarm',
            'fisik',
            'pengetesan',
        ]);
    }
    public function headings(): array
    {
        return [
            
            'Nama',
            'Lokasi Fire Alarm',
            'Signal tidak trouble',
            'Kondisi baterai bagus',
            'Cek push button alarm',
            'Cek kondisi fisik fire detector',
            'Melakukan pengetesan pada fire detector secara menyeluruh setiap 6 bulan sekali',
        ];
    }
}
