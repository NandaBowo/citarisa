<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detector extends Model
{
    use HasFactory;
    protected $table = 'detector';
 
    protected $fillable = [
        'nama',
        'lokasi',
        'signal',
        'kondisi',
        'alarm',
        'fisik',
        'pengetesan',
        
    ];
}
