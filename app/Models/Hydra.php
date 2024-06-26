<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hydra extends Model
{
    use HasFactory;
    protected $table = 'hydra';
 
    protected $fillable = [
        'nama',
        'lokasi',
        'posisi',
        'kondisihouse',
        'valve',
        'jumlah',
        'peralatan',
        'kondisikabinet',
        'flow',
    ];
}
