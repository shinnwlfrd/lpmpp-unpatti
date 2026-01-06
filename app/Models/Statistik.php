<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistik extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kunci',
        'nilai',
        'deskripsi',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public static function getValue($kunci, $default = 0)
    {
        $stat = self::where('kunci', $kunci)->where('is_active', true)->first();
        return $stat ? $stat->nilai : $default;
    }
}
