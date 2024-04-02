<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apar extends Model
{
    use HasFactory;
    protected $table = 'apar';
 
    protected $fillable = [
        'merek',
        'jenis',
        'lokasi',
        'tanggalpengecekan',
        'berat',
        'segel',
        'selang',
        'indikator',
        'fisik',
        'keterangan',
    ];
}
