<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalAsesmen extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_studi',
        'fakultas',
        'jenjang',
        'tanggal_mulai',
        'tanggal_selesai',
        'lembaga_akreditasi',
        'status',
        'keterangan',
    ];

    protected $casts = [
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
    ];
}
