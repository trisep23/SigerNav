<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $fillable = [
        'nama',
        'alamat',
        'kategori',
        'latitude',
        'longitude',
        'gambar1',
        'gambar2',
        'gambar3',
        'gambar4',
        'gambar5',
        'gambar6',
        'gambar7',
        'gambar8',
        'gambar9',
        'gambar10',
        'deskripsi',
        'elevasi',
        'status',
    ];

    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
        'status' => 'boolean',
    ];
}