<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kategori',
        'lembaga',
        'file',
        'link_external',
        'deskripsi',
        'tahun',
        'urutan',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public static function kategoriList()
    {
        return [
            'pedoman_akreditasi' => 'Pedoman Akreditasi',
            'arsip_spmi' => 'Arsip SPMI',
            'arsip_ami' => 'Arsip AMI',
            'arsip_pelatihan' => 'Arsip Pelatihan',
            'arsip_pembelajaran' => 'Arsip Pembelajaran',
            'hasil_survey' => 'Hasil Survey',
            'lainnya' => 'Lainnya',
        ];
    }

    public function getDownloadUrl()
    {
        if ($this->file) {
            return asset('storage/' . $this->file);
        }
        return $this->link_external;
    }
}
