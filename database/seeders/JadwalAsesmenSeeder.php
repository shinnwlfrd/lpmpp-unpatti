<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JadwalAsesmen;

class JadwalAsesmenSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'program_studi' => 'Manajemen',
                'fakultas' => 'Ekonomi dan Bisnis',
                'jenjang' => 'S1',
                'tanggal_mulai' => '2025-09-26',
                'tanggal_selesai' => '2025-09-28',
                'lembaga_akreditasi' => 'LAM-EMBA',
                'status' => 'terjadwal',
                'keterangan' => 'Tolong dipersiapkan semua dokumen pendukung',
            ],
            [
                'program_studi' => 'Akuntansi',
                'fakultas' => 'Ekonomi dan Bisnis',
                'jenjang' => 'S1',
                'tanggal_mulai' => '2025-09-28',
                'tanggal_selesai' => '2025-09-30',
                'lembaga_akreditasi' => 'LAM-EMBA',
                'status' => 'terjadwal',
                'keterangan' => 'Segera koordinasikan dengan tim akreditasi',
            ],
            [
                'program_studi' => 'Teknik Informatika',
                'fakultas' => 'Teknik',
                'jenjang' => 'S1',
                'tanggal_mulai' => '2025-09-30',
                'tanggal_selesai' => '2025-10-02',
                'lembaga_akreditasi' => 'LAM-INFOKOM',
                'status' => 'terjadwal',
                'keterangan' => 'Pastikan server siap untuk demonstrasi',
            ],
            [
                'program_studi' => 'Ilmu Hukum',
                'fakultas' => 'Hukum',
                'jenjang' => 'S1',
                'tanggal_mulai' => '2025-10-05',
                'tanggal_selesai' => '2025-10-07',
                'lembaga_akreditasi' => 'BAN-PT',
                'status' => 'terjadwal',
                'keterangan' => 'Konfirmasi ulang penguji',
            ],
            [
                'program_studi' => 'Pendidikan Dokter',
                'fakultas' => 'Kedokteran',
                'jenjang' => 'S1',
                'tanggal_mulai' => '2025-10-10',
                'tanggal_selesai' => '2025-10-12',
                'lembaga_akreditasi' => 'LAMPT-KES',
                'status' => 'terjadwal',
                'keterangan' => 'Siapkan bukti-bukti tracer alumni',
            ],
            [
                'program_studi' => 'Pendidikan Guru Sekolah Dasar',
                'fakultas' => 'Keguruan dan Ilmu Pendidikan',
                'jenjang' => 'S1',
                'tanggal_mulai' => '2025-10-12',
                'tanggal_selesai' => '2025-10-14',
                'lembaga_akreditasi' => 'LAMDIK',
                'status' => 'terjadwal',
                'keterangan' => 'Pastikan dokumen pembelajaran lengkap',
            ],
        ];

        foreach ($data as $item) {
            JadwalAsesmen::create($item);
        }
    }
}
