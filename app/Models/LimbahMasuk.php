<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LimbahMasuk extends Model
{
    use HasFactory;

    protected $fillable = ["jenis_limbah_id", "sumber_limbah", "tanggal_masuk_limbah", "jumlah_limbah", "tanggal_exp_limbah"];

    public function masterLimbah() : BelongsTo
    {
        return $this->belongsTo(MasterLimbah::class);
    }
}
