<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Statistik;
use App\Models\JadwalAsesmen;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 3 berita terbaru
        $latestBerita = Post::where('type', 'berita')
            ->whereNotNull('published_at')
            ->latest('published_at')
            ->take(3)
            ->get();

        // Ambil 3 pengumuman terbaru
        $latestPengumuman = Post::where('type', 'pengumuman')
            ->whereNotNull('published_at')
            ->latest('published_at')
            ->take(3)
            ->get();

        // Jadwal Asesmen (upcoming)
        $jadwalAsesmen = JadwalAsesmen::where('tanggal_mulai', '>=', now())
            ->orderBy('tanggal_mulai')
            ->take(10)
            ->get();

        // Statistik
        $statistik = [
            'total_prodi' => Statistik::getValue('total_prodi', 105),
            'prodi_unggul' => Statistik::getValue('prodi_unggul', 9),
            'prodi_s1' => Statistik::getValue('prodi_s1', 77),
            'prodi_s2' => Statistik::getValue('prodi_s2', 19),
            'prodi_s3' => Statistik::getValue('prodi_s3', 4),
            'prodi_profesi' => Statistik::getValue('prodi_profesi', 3),
            'akred_unggul' => Statistik::getValue('akred_unggul', 5),
            'akred_baik_sekali' => Statistik::getValue('akred_baik_sekali', 27),
            'akred_baik' => Statistik::getValue('akred_baik', 32),
            'akred_a' => Statistik::getValue('akred_a', 1),
            'akred_b' => Statistik::getValue('akred_b', 22),
            'akred_c' => Statistik::getValue('akred_c', 0),
            'akred_belum' => Statistik::getValue('akred_belum', 13),
        ];

        return view('beranda', compact('latestBerita', 'latestPengumuman', 'jadwalAsesmen', 'statistik'));
    }
}
