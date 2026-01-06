<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Pelatihan Pembuatan Buku Ajar',
                'type' => 'berita',
                'content' => 'LPMPP Unpatti mengadakan Pelatihan Pembuatan Buku Ajar bagi Tenaga Dosen pada tanggal 26-27 Agustus 2025. Pelatihan ini bertujuan meningkatkan kompetensi dosen dalam menyusun buku ajar berkualitas. Peserta dibekali teknik penulisan, penyusunan materi, dan strategi publikasi agar mendukung proses pembelajaran yang lebih efektif dan inovatif.',
                'author' => 'Admin LPMPP',
                'published_at' => now(),
            ],
            [
                'title' => 'Sosialisasi Instrumen Akreditasi BAN-PT',
                'type' => 'berita',
                'content' => 'Kegiatan sosialisasi untuk persiapan akreditasi prodi di lingkungan Unpatti telah dilaksanakan pada 25 Mei 2025. Kegiatan ini dihadiri oleh perwakilan dari seluruh program studi untuk mempersiapkan dokumen akreditasi sesuai standar BAN-PT terbaru.',
                'author' => 'Admin LPMPP',
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Workshop Penjaminan Mutu Internal',
                'type' => 'berita',
                'content' => 'Workshop Penjaminan Mutu Internal diselenggarakan untuk meningkatkan pemahaman tentang sistem penjaminan mutu di lingkungan Universitas Pattimura. Peserta mendapatkan materi tentang standar mutu, audit internal, dan penyusunan dokumen mutu.',
                'author' => 'Admin LPMPP',
                'published_at' => now()->subDays(10),
            ],
            [
                'title' => 'Jadwal AMI 2025',
                'type' => 'pengumuman',
                'content' => 'Jadwal Audit Mutu Internal akan dimulai pada bulan Juni 2025. Mohon semua unit mempersiapkan dokumen terkait. Dokumen yang perlu disiapkan meliputi: Laporan Kinerja, Dokumen Evaluasi Diri, dan Rencana Tindak Lanjut.',
                'author' => 'Admin LPMPP',
                'published_at' => now(),
            ],
            [
                'title' => 'Unggah Dokumen Akreditasi',
                'type' => 'pengumuman',
                'content' => 'Seluruh program studi diminta untuk mengunggah dokumen akreditasi melalui sistem paling lambat 10 Juni 2025. Pastikan semua dokumen telah diperiksa sesuai dengan format terbaru yang telah ditetapkan.',
                'author' => 'Admin LPMPP',
                'published_at' => now()->subDays(2),
            ],
        ];

        foreach ($posts as $post) {
            Post::create([
                'title' => $post['title'],
                'slug' => Str::slug($post['title']) . '-' . time() . rand(100, 999),
                'type' => $post['type'],
                'content' => $post['content'],
                'author' => $post['author'],
                'published_at' => $post['published_at'],
            ]);
        }
    }
}
