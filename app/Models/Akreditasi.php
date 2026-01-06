<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akreditasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_studi',
        'fakultas',
        'jenjang',
        'peringkat',
        'nomor_sk',
        'tanggal_sk',
        'tanggal_kadaluarsa',
        'lembaga_akreditasi',
        'sertifikat',
    ];

    protected $casts = [
        'tanggal_sk' => 'date',
        'tanggal_kadaluarsa' => 'date',
    ];
}
