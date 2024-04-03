<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LimbahKeluar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function masterLimbah() : BelongsTo
    {
        return $this->belongsTo(MasterLimbah::class);
    }
}
