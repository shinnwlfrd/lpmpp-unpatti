<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StrukturOrganisasi;

class StrukturOrganisasiSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Dr. James Abrahamsz, M.Si',
                'nip' => '196906022001121001',
                'jabatan' => 'Kepala LPMPP',
                'tugas_pokok' => 'Melaksanakan koordinasi, pelaksanaan, pemantauan, dan evaluasi kegiatan penjaminan mutu dan pengembangan pembelajaran',
                'foto' => 'images/kepalaLPMPP.jpg',
            ],
            [
                'nama' => 'Dr. Djufri Rays Pattilouw, SE, M.Si',
                'nip' => '197408092001121002',
                'jabatan' => 'Sekretaris LPMPP',
                'tugas_pokok' => 'Membantu Kepala LPMPP dalam melaksanakan koordinasi, pelaksanaan, pemantauan, serta evaluasi kegiatan penjaminan mutu dan pengembangan pembelajaran',
                'foto' => 'images/SekretarisLPMPP.jpeg',
            ],
            [
                'nama' => 'Ema Lisaholet, SE, M.Si',
                'nip' => '197902122001122004',
                'jabatan' => 'Sub Koordinator Umum LPMPP',
                'tugas_pokok' => 'Pengadministrasian Umum',
                'foto' => 'images/ema lisaholet.jpg',
            ],
            [
                'nama' => 'Anthoneta Matakupan, S.Sos',
                'nip' => '197509092002122012',
                'jabatan' => 'Sub Koordinator Data dan Informasi',
                'tugas_pokok' => 'Pengarsipan data dan informasi',
                'foto' => 'images/anthoneta.jpg',
            ],
            [
                'nama' => 'Mannix V Siahaya, SE',
                'nip' => '-',
                'jabatan' => 'Tenaga Administrasi',
                'tugas_pokok' => 'Dokumentasi dan publikasi',
                'foto' => 'images/mannix.jpg',
            ],
            [
                'nama' => 'Caroline van Room, SH',
                'nip' => '-',
                'jabatan' => 'Tenaga Administrasi',
                'tugas_pokok' => 'Data dan Informasi',
                'foto' => null,
            ],
            [
                'nama' => 'Jeannethe Leence Sahertian, S.Pd',
                'nip' => '-',
                'jabatan' => 'Staf bagian umum',
                'tugas_pokok' => 'Tata Kelola Persuratan',
                'foto' => 'images/jean.jpeg',
            ],
            [
                'nama' => 'Marsintya de Rooy',
                'nip' => '-',
                'jabatan' => 'Staff Bagian Data dan Informasi',
                'tugas_pokok' => 'Operator BKD',
                'foto' => 'images/marsintya.jpeg',
            ],
            [
                'nama' => 'Margaretha Carolina Bonara, S.Sos',
                'nip' => '-',
                'jabatan' => 'Staff bagian Umum',
                'tugas_pokok' => 'Administrasi Persuratan',
                'foto' => 'images/margaretha.jpeg',
            ],
            [
                'nama' => 'Valiant Carol Leihitu, S.Si',
                'nip' => '-',
                'jabatan' => 'Operator Komputer',
                'tugas_pokok' => 'Pengelola BKD Sister dan BMN',
                'foto' => 'images/valiant.jpg',
            ],
            [
                'nama' => 'Rivaldo Patawala, S.SI',
                'nip' => '-',
                'jabatan' => 'Operator Komputer',
                'tugas_pokok' => 'Pengelola Website LPMPP dan Aplikasi SIAGA',
                'foto' => 'images/valdo.jpg',
            ],
            [
                'nama' => 'Corinus Sahusilawane',
                'nip' => '-',
                'jabatan' => 'Teknis',
                'tugas_pokok' => 'Teknis',
                'foto' => 'images/corinus.jpg',
            ],
            [
                'nama' => 'Tince Zandra Parera',
                'nip' => '-',
                'jabatan' => 'Staf bagian umum',
                'tugas_pokok' => 'Cleaning Service',
                'foto' => 'images/tince.jpg',
            ],
        ];

        foreach ($data as $index => $item) {
            StrukturOrganisasi::create([
                'nama' => $item['nama'],
                'nip' => $item['nip'],
                'jabatan' => $item['jabatan'],
                'tugas_pokok' => $item['tugas_pokok'],
                'foto' => $item['foto'],
                'urutan' => $index + 1,
                'is_active' => true,
            ]);
        }
    }
}
