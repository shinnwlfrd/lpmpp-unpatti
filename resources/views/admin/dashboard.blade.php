@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Posts -->
    <div class="bg-white rounded-xl shadow-md p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Total Post</p>
                <h3 class="text-3xl font-bold text-blue-900">{{ $totalPosts }}</h3>
            </div>
            <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center">
                <i class="fas fa-file-alt text-2xl text-blue-900"></i>
            </div>
        </div>
    </div>

    <!-- Total Berita -->
    <div class="bg-white rounded-xl shadow-md p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Total Berita</p>
                <h3 class="text-3xl font-bold text-green-600">{{ $totalBerita }}</h3>
            </div>
            <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center">
                <i class="fas fa-newspaper text-2xl text-green-600"></i>
            </div>
        </div>
    </div>

    <!-- Total Pengumuman -->
    <div class="bg-white rounded-xl shadow-md p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Total Pengumuman</p>
                <h3 class="text-3xl font-bold text-yellow-600">{{ $totalPengumuman }}</h3>
            </div>
            <div class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center">
                <i class="fas fa-bullhorn text-2xl text-yellow-600"></i>
            </div>
        </div>
    </div>

    <!-- Total Akreditasi -->
    <div class="bg-white rounded-xl shadow-md p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Data Akreditasi</p>
                <h3 class="text-3xl font-bold text-purple-600">{{ $totalAkreditasi }}</h3>
            </div>
            <div class="w-14 h-14 bg-purple-100 rounded-full flex items-center justify-center">
                <i class="fas fa-certificate text-2xl text-purple-600"></i>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <!-- Jadwal Asesmen -->
    <div class="bg-white rounded-xl shadow-md p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Jadwal Asesmen</p>
                <h3 class="text-3xl font-bold text-indigo-600">{{ $totalJadwalAsesmen }}</h3>
            </div>
            <div class="w-14 h-14 bg-indigo-100 rounded-full flex items-center justify-center">
                <i class="fas fa-calendar-alt text-2xl text-indigo-600"></i>
            </div>
        </div>
    </div>

    <!-- Struktur Organisasi -->
    <div class="bg-white rounded-xl shadow-md p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Anggota Aktif</p>
                <h3 class="text-3xl font-bold text-teal-600">{{ $totalStruktur }}</h3>
            </div>
            <div class="w-14 h-14 bg-teal-100 rounded-full flex items-center justify-center">
                <i class="fas fa-sitemap text-2xl text-teal-600"></i>
            </div>
        </div>
    </div>

    <!-- Total Users -->
    <div class="bg-white rounded-xl shadow-md p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Total User</p>
                <h3 class="text-3xl font-bold text-red-600">{{ $totalUsers }}</h3>
            </div>
            <div class="w-14 h-14 bg-red-100 rounded-full flex items-center justify-center">
                <i class="fas fa-users text-2xl text-red-600"></i>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Recent Posts -->
    <div class="bg-white rounded-xl shadow-md p-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Post Terbaru</h3>
            <a href="{{ route('admin.posts.index') }}" class="text-blue-600 hover:underline text-sm">Lihat Semua</a>
        </div>
        <div class="space-y-3">
            @forelse($recentPosts as $post)
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div>
                    <p class="font-medium text-gray-800">{{ Str::limit($post->title, 35) }}</p>
                    <p class="text-sm text-gray-500">{{ $post->created_at->format('d M Y') }}</p>
                </div>
                <span class="px-2 py-1 text-xs rounded-full {{ $post->type == 'berita' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                    {{ ucfirst($post->type) }}
                </span>
            </div>
            @empty
            <p class="text-gray-500 text-center py-4">Belum ada post</p>
            @endforelse
        </div>
    </div>

    <!-- Upcoming Asesmen -->
    <div class="bg-white rounded-xl shadow-md p-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Jadwal Asesmen Mendatang</h3>
            <a href="{{ route('admin.jadwal-asesmen.index') }}" class="text-blue-600 hover:underline text-sm">Lihat Semua</a>
        </div>
        <div class="space-y-3">
            @forelse($upcomingAsesmen as $jadwal)
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div>
                    <p class="font-medium text-gray-800">{{ $jadwal->program_studi }}</p>
                    <p class="text-sm text-gray-500">{{ $jadwal->tanggal_mulai->format('d M') }} - {{ $jadwal->tanggal_selesai->format('d M Y') }}</p>
                </div>
                <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-700">
                    Terjadwal
                </span>
            </div>
            @empty
            <p class="text-gray-500 text-center py-4">Tidak ada jadwal mendatang</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
