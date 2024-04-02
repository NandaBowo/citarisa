<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MasterLimbah extends Model
{
    use HasFactory;

    protected $fillable = ["sumber_limbah"];

    public function limbahMasuk() : HasMany {
        return $this->hasMany(LimbahMasuk::class);
    }
}
