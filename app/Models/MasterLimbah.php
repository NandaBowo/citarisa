<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MasterLimbah extends Model
{
    use HasFactory;

    protected $fillable = ["data", "kategori"];

    public function limbahMasuk() : HasMany {
        return $this->hasMany(LimbahMasuk::class);
    }

    public function limbahKeluar() : HasMany {
        return $this->hasMany(LimbahKeluar::class);
    }

    public function jumlahLimbah() : HasOne {
        return $this->hasOne(JumlahLimbah::class);
    }
}
