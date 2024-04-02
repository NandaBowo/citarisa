<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LimbahMasuk extends Model
{
    use HasFactory;

    protected $fillable = ["jenis_limbah", "tanggal_masuk_limbah", "sumber_limbah", "jumlah_limbah", "maksimal_penyimpanan_limbah"];
}
