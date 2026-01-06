<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Models\Akreditasi;
use App\Models\JadwalAsesmen;
use App\Models\StrukturOrganisasi;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPosts = Post::count();
        $totalBerita = Post::where('type', 'berita')->count();
        $totalPengumuman = Post::where('type', 'pengumuman')->count();
        $totalUsers = User::count();
        $totalAkreditasi = Akreditasi::count();
        $totalJadwalAsesmen = JadwalAsesmen::count();
        $totalStruktur = StrukturOrganisasi::where('is_active', true)->count();
        
        $recentPosts = Post::latest()->take(5)->get();
        $upcomingAsesmen = JadwalAsesmen::where('status', 'terjadwal')
            ->orderBy('tanggal_mulai')
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalPosts', 'totalBerita', 'totalPengumuman', 'totalUsers',
            'totalAkreditasi', 'totalJadwalAsesmen', 'totalStruktur',
            'recentPosts', 'upcomingAsesmen'
        ));
    }
}
