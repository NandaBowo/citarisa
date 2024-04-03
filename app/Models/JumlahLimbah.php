<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JumlahLimbah extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function masterLimbah() : BelongsTo
    {
        return $this->belongsTo(MasterLimbah::class);
    }
}
