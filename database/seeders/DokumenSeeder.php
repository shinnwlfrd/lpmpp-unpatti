<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dokumen;

class DokumenSeeder extends Seeder
{
    public function run(): void
    {
        $dokumens = [
            // Pedoman Akreditasi
            ['nama' => 'LAMSAMA', 'kategori' => 'pedoman_akreditasi', 'lembaga' => 'LAMSAMA', 'link_external' => 'https://drive.google.com/'],
            ['nama' => 'LAMEMBA', 'kategori' => 'pedoman_akreditasi', 'lembaga' => 'LAMEMBA', 'link_external' => 'https://drive.google.com/'],
            ['nama' => 'LAMINFOKOM', 'kategori' => 'pedoman_akreditasi', 'lembaga' => 'LAMINFOKOM', 'link_external' => 'https://drive.google.com/'],
            ['nama' => 'LAMPTKES', 'kategori' => 'pedoman_akreditasi', 'lembaga' => 'LAMPTKES', 'link_external' => 'https://drive.google.com/'],
            ['nama' => 'LAMDIK', 'kategori' => 'pedoman_akreditasi', 'lembaga' => 'LAMDIK', 'link_external' => 'https://drive.google.com/'],
            ['nama' => 'BAN-PT', 'kategori' => 'pedoman_akreditasi', 'lembaga' => 'BAN-PT', 'link_external' => 'https://drive.google.com/'],
            ['nama' => 'LAM-SPAK', 'kategori' => 'pedoman_akreditasi', 'lembaga' => 'LAM-SPAK', 'link_external' => 'https://drive.google.com/'],
            ['nama' => 'LAM-PTIP', 'kategori' => 'pedoman_akreditasi', 'lembaga' => 'LAM-PTIP', 'link_external' => 'https://drive.google.com/'],
            ['nama' => 'LAM-TEKNIK', 'kategori' => 'pedoman_akreditasi', 'lembaga' => 'LAM-TEKNIK', 'link_external' => 'https://drive.google.com/'],
            
            // Arsip SPMI
            ['nama' => 'SATU SIKLUS SPMI 2025', 'kategori' => 'arsip_spmi', 'link_external' => 'https://drive.google.com/file/d/117rxoGzNFHJDN8JvcacQShKWS2Tpiagj/view'],
            ['nama' => 'KOMITMEN MUTU UNPATTI', 'kategori' => 'arsip_spmi', 'link_external' => 'https://drive.google.com/file/d/1qM7i1S_E0LYMKbpAnHf7VgomUVDYPW2B/view'],
            ['nama' => 'PANDUAN PELAKSANAAN SISTEM PENJAMINAN MUTU INTERNAL UNIVERSITAS PATTIMURA', 'kategori' => 'arsip_spmi', 'link_external' => 'https://drive.google.com/file/d/1BAnscc8rJW4gyZ8xSRClCkwKvpoj5F7B/view'],
            ['nama' => 'FORMULIR BUKU IV SPMI', 'kategori' => 'arsip_spmi', 'link_external' => 'https://drive.google.com/file/d/1WYZnZohi1xSwAAJVjKQSsBr9ux7xIMzw/view'],
            ['nama' => 'BUKU SAKU SPMI UNPATTI', 'kategori' => 'arsip_spmi', 'link_external' => 'https://drive.google.com/file/d/1POLZPwHatfE3EXFcJXhRjLwQ1ZauhR3u/view'],
            ['nama' => 'SK Pembentukan LP3MP', 'kategori' => 'arsip_spmi', 'link_external' => 'https://drive.google.com/file/d/1rRVdu098VRK1jjR9jT2DTyvpEk9_PzgH/view'],
            ['nama' => 'Benchmarking LP3MP UNPATTI LP3M-UNJ Tahun 2023', 'kategori' => 'arsip_spmi', 'link_external' => 'https://drive.google.com/file/d/1CXThA53scLSMD-vUcPHo6KiUk88SgnrX/view'],
            ['nama' => 'KEBIJAKAN MUTU TAHUN 2023', 'kategori' => 'arsip_spmi', 'link_external' => 'https://drive.google.com/file/d/15ptLNwG1efXyztULPsyai3o3KjfA6Hgn/view'],
            ['nama' => 'MANUAL MUTU TAHUN 2023', 'kategori' => 'arsip_spmi', 'link_external' => 'https://drive.google.com/file/d/1O5DzrkoFrFa1fd7WlQVo1bykmkTJ2mxx/view'],
            ['nama' => 'STANDAR MUTU TAHUN 2023', 'kategori' => 'arsip_spmi', 'link_external' => 'https://drive.google.com/file/d/10naVKW8XzRYjplscSH_yBlOrj5hlA0Rb/view'],
            ['nama' => 'LAPORAN STUDI BANDING UNM TAHUN 2021', 'kategori' => 'arsip_spmi', 'link_external' => 'https://drive.google.com/file/d/1xDQlsvRwqahU9EoDo-7P1S0_yq5VsX9R/view'],

            // Arsip AMI
            ['nama' => 'LAPORAN-UMUM-AMI-TAHUN-2023', 'kategori' => 'arsip_ami', 'link_external' => 'https://drive.google.com/file/d/1gVFW3YMfgTEyiHc8-HW6LA4PVg6LezHi/view'],
            ['nama' => 'LAPORAN-UMUM-AMI-TAHUN-2022', 'kategori' => 'arsip_ami', 'link_external' => 'https://drive.google.com/'],
            ['nama' => 'LAPORAN-UMUM-AMI-TAHUN-2021', 'kategori' => 'arsip_ami', 'link_external' => 'https://drive.google.com/'],

            // Arsip Pelatihan
            ['nama' => 'Laporan Pelatihan PEKERTI 2024', 'kategori' => 'arsip_pelatihan', 'link_external' => 'https://drive.google.com/'],
            ['nama' => 'Laporan Pelatihan AA 2024', 'kategori' => 'arsip_pelatihan', 'link_external' => 'https://drive.google.com/'],
            ['nama' => 'Laporan Pelatihan PEKERTI 2023', 'kategori' => 'arsip_pelatihan', 'link_external' => 'https://drive.google.com/'],
            ['nama' => 'Laporan Pelatihan AA 2023', 'kategori' => 'arsip_pelatihan', 'link_external' => 'https://drive.google.com/'],

            // Arsip Pembelajaran
            ['nama' => 'Panduan Kurikulum OBE 2024', 'kategori' => 'arsip_pembelajaran', 'link_external' => 'https://drive.google.com/'],
            ['nama' => 'Template RPS Berbasis OBE', 'kategori' => 'arsip_pembelajaran', 'link_external' => 'https://drive.google.com/'],
            ['nama' => 'Panduan Penyusunan Bahan Ajar', 'kategori' => 'arsip_pembelajaran', 'link_external' => 'https://drive.google.com/'],

            // Hasil Survey
            ['nama' => 'Hasil Survey Kepuasan Mahasiswa', 'kategori' => 'hasil_survey', 'tahun' => '2024', 'link_external' => 'https://drive.google.com/file/d/1DAJQIQopBg5XFE5SkPTDdaj_-pJtxPts/view'],
            ['nama' => 'Hasil Survey Kepuasan Dosen dan Tendik', 'kategori' => 'hasil_survey', 'tahun' => '2024', 'link_external' => 'https://drive.google.com/file/d/13YcKQQTJu5NkXFwE7F-n2zVlv7dGmtve/view'],
            ['nama' => 'Hasil Survey Kepuasan Mahasiswa', 'kategori' => 'hasil_survey', 'tahun' => '2023', 'link_external' => 'https://drive.google.com/file/d/1z83RpWRZwmLNwinG8J50_DQZg9gxEyQf/view'],
            ['nama' => 'Hasil Survey Kepuasan Mahasiswa', 'kategori' => 'hasil_survey', 'tahun' => '2022', 'link_external' => 'https://drive.google.com/file/d/1Jz3Ld05FlcAAkzWTE8kJQAgoXBK9aZQP/view'],
            ['nama' => 'Hasil Survey Kepuasan Mahasiswa', 'kategori' => 'hasil_survey', 'tahun' => '2021-2022', 'link_external' => 'https://drive.google.com/file/d/13rcUj1SHaN_8NtV6SDQdIg6v0btnNvqb/view'],
        ];

        foreach ($dokumens as $index => $doc) {
            Dokumen::create([
                'nama' => $doc['nama'],
                'kategori' => $doc['kategori'],
                'lembaga' => $doc['lembaga'] ?? null,
                'link_external' => $doc['link_external'],
                'tahun' => $doc['tahun'] ?? null,
                'urutan' => $index + 1,
                'is_active' => true,
            ]);
        }
    }
}
