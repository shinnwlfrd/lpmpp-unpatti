<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Statistik;

class StatistikSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama' => 'Jumlah Program Studi', 'kunci' => 'total_prodi', 'nilai' => '105'],
            ['nama' => 'Program Studi Terakreditasi Unggul/A', 'kunci' => 'prodi_unggul', 'nilai' => '9'],
            ['nama' => 'Program Studi Sarjana (S1)', 'kunci' => 'prodi_s1', 'nilai' => '77'],
            ['nama' => 'Program Studi Magister (S2)', 'kunci' => 'prodi_s2', 'nilai' => '19'],
            ['nama' => 'Program Studi Doktor (S3)', 'kunci' => 'prodi_s3', 'nilai' => '4'],
            ['nama' => 'Program Studi Profesi', 'kunci' => 'prodi_profesi', 'nilai' => '3'],
            ['nama' => 'Akreditasi Unggul', 'kunci' => 'akred_unggul', 'nilai' => '5'],
            ['nama' => 'Akreditasi Baik Sekali', 'kunci' => 'akred_baik_sekali', 'nilai' => '27'],
            ['nama' => 'Akreditasi Baik', 'kunci' => 'akred_baik', 'nilai' => '32'],
            ['nama' => 'Akreditasi A', 'kunci' => 'akred_a', 'nilai' => '1'],
            ['nama' => 'Akreditasi B', 'kunci' => 'akred_b', 'nilai' => '22'],
            ['nama' => 'Akreditasi C', 'kunci' => 'akred_c', 'nilai' => '0'],
            ['nama' => 'Belum Terakreditasi', 'kunci' => 'akred_belum', 'nilai' => '13'],
        ];

        foreach ($data as $item) {
            Statistik::create([
                'nama' => $item['nama'],
                'kunci' => $item['kunci'],
                'nilai' => $item['nilai'],
                'is_active' => true,
            ]);
        }
    }
}
