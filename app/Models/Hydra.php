<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hydra extends Model
{
    use HasFactory;
    protected $table = 'hydra';
 
    protected $fillable = [
        'lokasi',
        'posisi',
        'kondisihouse',
        'jumlah',
        'peralatan',
        'kondisikabinet',
        'flow',
    ];
}
