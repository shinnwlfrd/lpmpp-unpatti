<?php

namespace Database\Seeders;

use App\Models\Akreditasi;
use Illuminate\Database\Seeder;

class AkreditasiSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data lama
        Akreditasi::truncate();

        $data = [
            // FAKULTAS EKONOMI DAN BISNIS (6 prodi)
            ['program_studi' => 'Manajemen', 'fakultas' => 'Ekonomi dan Bisnis', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-EMBA', 'peringkat' => 'B', 'tanggal_kadaluarsa' => '2026-06-18'],
            ['program_studi' => 'Ekonomi Pembangunan', 'fakultas' => 'Ekonomi dan Bisnis', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-EMBA', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2028-08-02'],
            ['program_studi' => 'Akuntansi', 'fakultas' => 'Ekonomi dan Bisnis', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-EMBA', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-03-08'],
            ['program_studi' => 'Manajemen', 'fakultas' => 'Ekonomi dan Bisnis', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'LAM-EMBA', 'peringkat' => 'BAIK', 'tanggal_kadaluarsa' => '2027-12-06'],
            ['program_studi' => 'Akuntansi', 'fakultas' => 'Ekonomi dan Bisnis', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'LAM-EMBA', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2030-02-14'],
            ['program_studi' => 'Ilmu Ekonomi', 'fakultas' => 'Ekonomi dan Bisnis', 'jenjang' => 'S3', 'lembaga_akreditasi' => 'LAM-EMBA', 'peringkat' => 'BAIK', 'tanggal_kadaluarsa' => '2028-05-20'],

            // FAKULTAS HUKUM (3 prodi)
            ['program_studi' => 'Ilmu Hukum', 'fakultas' => 'Hukum', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'BAN-PT', 'peringkat' => 'UNGGUL', 'tanggal_kadaluarsa' => '2027-06-27'],
            ['program_studi' => 'Ilmu Hukum', 'fakultas' => 'Hukum', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'BAN-PT', 'peringkat' => 'BAIK', 'tanggal_kadaluarsa' => '2029-09-17'],
            ['program_studi' => 'Ilmu Hukum', 'fakultas' => 'Hukum', 'jenjang' => 'S3', 'lembaga_akreditasi' => 'BAN-PT', 'peringkat' => 'B', 'tanggal_kadaluarsa' => '2028-10-11'],

            // FAKULTAS ILMU SOSIAL DAN POLITIK (6 prodi)
            ['program_studi' => 'Ilmu Administrasi Negara', 'fakultas' => 'Ilmu Sosial dan Politik', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-SPAK', 'peringkat' => 'BAIK', 'tanggal_kadaluarsa' => '2025-09-03'],
            ['program_studi' => 'Ilmu Komunikasi', 'fakultas' => 'Ilmu Sosial dan Politik', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-SPAK', 'peringkat' => 'BAIK', 'tanggal_kadaluarsa' => '2028-04-04'],
            ['program_studi' => 'Sosiologi', 'fakultas' => 'Ilmu Sosial dan Politik', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-SPAK', 'peringkat' => 'B', 'tanggal_kadaluarsa' => '2028-12-05'],
            ['program_studi' => 'Ilmu Pemerintahan', 'fakultas' => 'Ilmu Sosial dan Politik', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-SPAK', 'peringkat' => 'B', 'tanggal_kadaluarsa' => '2029-10-23'],
            ['program_studi' => 'Sosiologi', 'fakultas' => 'Ilmu Sosial dan Politik', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'LAM-SPAK', 'peringkat' => 'BAIK', 'tanggal_kadaluarsa' => '2029-03-13'],
            ['program_studi' => 'Administrasi Publik', 'fakultas' => 'Ilmu Sosial dan Politik', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'LAM-SPAK', 'peringkat' => 'B', 'tanggal_kadaluarsa' => '2029-04-10'],

            // FAKULTAS KEDOKTERAN (4 prodi)
            ['program_studi' => 'Pendidikan Dokter', 'fakultas' => 'Kedokteran', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMPT-KES', 'peringkat' => 'BAIK', 'tanggal_kadaluarsa' => '2027-08-11'],
            ['program_studi' => 'Profesi Dokter', 'fakultas' => 'Kedokteran', 'jenjang' => 'Profesi', 'lembaga_akreditasi' => 'LAMPT-KES', 'peringkat' => 'BAIK', 'tanggal_kadaluarsa' => '2027-08-11'],
            ['program_studi' => 'Kedokteran Gigi', 'fakultas' => 'Kedokteran', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMPT-KES', 'peringkat' => 'TIDAK TERAKREDITASI', 'tanggal_kadaluarsa' => null],
            ['program_studi' => 'Profesi Dokter Gigi', 'fakultas' => 'Kedokteran', 'jenjang' => 'Profesi', 'lembaga_akreditasi' => 'LAMPT-KES', 'peringkat' => 'TIDAK TERAKREDITASI', 'tanggal_kadaluarsa' => null],

            // FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN (25 prodi)
            ['program_studi' => 'Pendidikan Jasmani, Kesehatan Dan Rekreasi', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'B', 'tanggal_kadaluarsa' => '2025-03-29'],
            ['program_studi' => 'Pendidikan Sejarah', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'B', 'tanggal_kadaluarsa' => '2025-11-01'],
            ['program_studi' => 'Pendidikan Bahasa Jerman', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'B', 'tanggal_kadaluarsa' => '2025-11-15'],
            ['program_studi' => 'Pendidikan Biologi', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'B', 'tanggal_kadaluarsa' => '2025-11-15'],
            ['program_studi' => 'Pendidikan Bahasa dan Sastra Indonesia', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2027-08-15'],
            ['program_studi' => 'Pendidikan Profesi Guru', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'Profesi', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2027-09-11'],
            ['program_studi' => 'Bimbingan dan Konseling', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2028-04-03'],
            ['program_studi' => 'Pendidikan Bahasa Inggris', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2028-06-26'],
            ['program_studi' => 'Pendidikan Kimia', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2028-06-26'],
            ['program_studi' => 'Pendidikan Matematika', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Pendidikan Fisika', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Pendidikan Ekonomi', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Pendidikan Pancasila dan Kewarganegaraan', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Pendidikan Guru Sekolah Dasar', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Pendidikan Guru PAUD', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Pendidikan Luar Sekolah', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Pendidikan Seni Rupa', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Pendidikan Musik', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Teknologi Pendidikan', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Pendidikan Geografi', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Pendidikan Agama Kristen', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Pendidikan Bahasa Inggris', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Pendidikan Bahasa Indonesia', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Pendidikan Dasar', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Manajemen Pendidikan', 'fakultas' => 'Keguruan dan Ilmu Pendidikan', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'LAMDIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],

            // FAKULTAS MATEMATIKA DAN ILMU PENGETAHUAN ALAM (12 prodi)
            ['program_studi' => 'Matematika', 'fakultas' => 'Matematika dan Ilmu Pengetahuan Alam', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-SAINTEK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Fisika', 'fakultas' => 'Matematika dan Ilmu Pengetahuan Alam', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-SAINTEK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Kimia', 'fakultas' => 'Matematika dan Ilmu Pengetahuan Alam', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-SAINTEK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Biologi', 'fakultas' => 'Matematika dan Ilmu Pengetahuan Alam', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-SAINTEK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Statistika', 'fakultas' => 'Matematika dan Ilmu Pengetahuan Alam', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-SAINTEK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Ilmu Komputer', 'fakultas' => 'Matematika dan Ilmu Pengetahuan Alam', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-SAINTEK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Sistem Informasi', 'fakultas' => 'Matematika dan Ilmu Pengetahuan Alam', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-SAINTEK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Geofisika', 'fakultas' => 'Matematika dan Ilmu Pengetahuan Alam', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-SAINTEK', 'peringkat' => 'BAIK', 'tanggal_kadaluarsa' => '2028-05-15'],
            ['program_studi' => 'Matematika', 'fakultas' => 'Matematika dan Ilmu Pengetahuan Alam', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'LAM-SAINTEK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Fisika', 'fakultas' => 'Matematika dan Ilmu Pengetahuan Alam', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'LAM-SAINTEK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Kimia', 'fakultas' => 'Matematika dan Ilmu Pengetahuan Alam', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'LAM-SAINTEK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Biologi', 'fakultas' => 'Matematika dan Ilmu Pengetahuan Alam', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'LAM-SAINTEK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],

            // FAKULTAS TEKNIK (12 prodi)
            ['program_studi' => 'Teknik Mesin', 'fakultas' => 'Teknik', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-TEKNIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Teknik Elektro', 'fakultas' => 'Teknik', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-TEKNIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Teknik Sipil', 'fakultas' => 'Teknik', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-TEKNIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Teknik Industri', 'fakultas' => 'Teknik', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-TEKNIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Teknik Perkapalan', 'fakultas' => 'Teknik', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-TEKNIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Teknik Informatika', 'fakultas' => 'Teknik', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-TEKNIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Arsitektur', 'fakultas' => 'Teknik', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-TEKNIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Perencanaan Wilayah dan Kota', 'fakultas' => 'Teknik', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-TEKNIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Teknik Lingkungan', 'fakultas' => 'Teknik', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-TEKNIK', 'peringkat' => 'BAIK', 'tanggal_kadaluarsa' => '2028-06-20'],
            ['program_studi' => 'Teknik Sistem Perkapalan', 'fakultas' => 'Teknik', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-TEKNIK', 'peringkat' => 'BAIK', 'tanggal_kadaluarsa' => '2028-07-15'],
            ['program_studi' => 'Teknik Mesin', 'fakultas' => 'Teknik', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'LAM-TEKNIK', 'peringkat' => 'BAIK', 'tanggal_kadaluarsa' => '2028-08-10'],
            ['program_studi' => 'Teknik Sipil', 'fakultas' => 'Teknik', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'LAM-TEKNIK', 'peringkat' => 'BAIK', 'tanggal_kadaluarsa' => '2028-09-05'],

            // FAKULTAS PERTANIAN (9 prodi)
            ['program_studi' => 'Agroteknologi', 'fakultas' => 'Pertanian', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-PTIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Agribisnis', 'fakultas' => 'Pertanian', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-PTIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Teknologi Hasil Pertanian', 'fakultas' => 'Pertanian', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-PTIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Kehutanan', 'fakultas' => 'Pertanian', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-PTIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Ilmu Tanah', 'fakultas' => 'Pertanian', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-PTIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Proteksi Tanaman', 'fakultas' => 'Pertanian', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-PTIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Penyuluhan Pertanian', 'fakultas' => 'Pertanian', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-PTIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Agronomi', 'fakultas' => 'Pertanian', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'LAM-PTIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Ilmu Pertanian', 'fakultas' => 'Pertanian', 'jenjang' => 'S3', 'lembaga_akreditasi' => 'LAM-PTIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],

            // FAKULTAS PERIKANAN DAN ILMU KELAUTAN (9 prodi)
            ['program_studi' => 'Manajemen Sumberdaya Perairan', 'fakultas' => 'Perikanan dan Ilmu Kelautan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-PTIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Budidaya Perairan', 'fakultas' => 'Perikanan dan Ilmu Kelautan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-PTIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Pemanfaatan Sumberdaya Perikanan', 'fakultas' => 'Perikanan dan Ilmu Kelautan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-PTIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Teknologi Hasil Perikanan', 'fakultas' => 'Perikanan dan Ilmu Kelautan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-PTIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Ilmu Kelautan', 'fakultas' => 'Perikanan dan Ilmu Kelautan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-PTIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Sosial Ekonomi Perikanan', 'fakultas' => 'Perikanan dan Ilmu Kelautan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAM-PTIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Ilmu Kelautan', 'fakultas' => 'Perikanan dan Ilmu Kelautan', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'LAM-PTIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Ilmu Perikanan', 'fakultas' => 'Perikanan dan Ilmu Kelautan', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'LAM-PTIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Ilmu Kelautan', 'fakultas' => 'Perikanan dan Ilmu Kelautan', 'jenjang' => 'S3', 'lembaga_akreditasi' => 'LAM-PTIK', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],

            // FAKULTAS SASTRA DAN BUDAYA (5 prodi)
            ['program_studi' => 'Sastra Indonesia', 'fakultas' => 'Sastra dan Budaya', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'BAN-PT', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Sastra Inggris', 'fakultas' => 'Sastra dan Budaya', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'BAN-PT', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Sejarah', 'fakultas' => 'Sastra dan Budaya', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'BAN-PT', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Antropologi', 'fakultas' => 'Sastra dan Budaya', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'BAN-PT', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Ilmu Perpustakaan', 'fakultas' => 'Sastra dan Budaya', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'BAN-PT', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],

            // FAKULTAS KESEHATAN MASYARAKAT (5 prodi)
            ['program_studi' => 'Kesehatan Masyarakat', 'fakultas' => 'Kesehatan Masyarakat', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMPT-KES', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Ilmu Gizi', 'fakultas' => 'Kesehatan Masyarakat', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMPT-KES', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Kesehatan Lingkungan', 'fakultas' => 'Kesehatan Masyarakat', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMPT-KES', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Keselamatan dan Kesehatan Kerja', 'fakultas' => 'Kesehatan Masyarakat', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMPT-KES', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Kesehatan Masyarakat', 'fakultas' => 'Kesehatan Masyarakat', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'LAMPT-KES', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],

            // FAKULTAS KEPERAWATAN (6 prodi)
            ['program_studi' => 'Ilmu Keperawatan', 'fakultas' => 'Keperawatan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMPT-KES', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Profesi Ners', 'fakultas' => 'Keperawatan', 'jenjang' => 'Profesi', 'lembaga_akreditasi' => 'LAMPT-KES', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Kebidanan', 'fakultas' => 'Keperawatan', 'jenjang' => 'D3', 'lembaga_akreditasi' => 'LAMPT-KES', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Kebidanan', 'fakultas' => 'Keperawatan', 'jenjang' => 'S1', 'lembaga_akreditasi' => 'LAMPT-KES', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Profesi Bidan', 'fakultas' => 'Keperawatan', 'jenjang' => 'Profesi', 'lembaga_akreditasi' => 'LAMPT-KES', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Keperawatan', 'fakultas' => 'Keperawatan', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'LAMPT-KES', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],

            // PASCASARJANA (3 prodi tambahan)
            ['program_studi' => 'Ilmu Lingkungan', 'fakultas' => 'Pascasarjana', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'BAN-PT', 'peringkat' => 'BAIK SEKALI', 'tanggal_kadaluarsa' => '2029-01-26'],
            ['program_studi' => 'Ilmu Lingkungan', 'fakultas' => 'Pascasarjana', 'jenjang' => 'S3', 'lembaga_akreditasi' => 'BAN-PT', 'peringkat' => 'BAIK', 'tanggal_kadaluarsa' => '2028-10-15'],
            ['program_studi' => 'Studi Pembangunan', 'fakultas' => 'Pascasarjana', 'jenjang' => 'S2', 'lembaga_akreditasi' => 'BAN-PT', 'peringkat' => 'BAIK', 'tanggal_kadaluarsa' => '2028-11-20'],
        ];

        foreach ($data as $item) {
            Akreditasi::create($item);
        }
    }
}
