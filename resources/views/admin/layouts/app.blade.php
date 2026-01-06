<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') - LPMPP Unpatti</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .sidebar { transition: all 0.3s ease; }
        .sidebar-link { transition: all 0.2s ease; }
        .sidebar-link:hover { background-color: rgba(255,255,255,0.1); }
        .sidebar-link.active { background-color: rgba(255,255,255,0.2); border-left: 4px solid #FFD700; }
    </style>
    @stack('styles')
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="sidebar w-64 bg-blue-900 text-white fixed h-full z-30">
            <div class="p-4 border-b border-blue-800">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('logo-lpmpp-unpatti.png') }}" alt="Logo" class="w-10 h-10">
                    <div>
                        <h1 class="font-bold text-lg">LPMPP Admin</h1>
                        <p class="text-xs text-blue-200">Universitas Pattimura</p>
                    </div>
                </div>
            </div>
            
            <nav class="mt-4 overflow-y-auto" style="max-height: calc(100vh - 180px);">
                <a href="{{ route('admin.dashboard') }}" 
                   class="sidebar-link flex items-center px-4 py-3 {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt w-6"></i>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('admin.posts.index') }}" 
                   class="sidebar-link flex items-center px-4 py-3 {{ request()->routeIs('admin.posts.*') ? 'active' : '' }}">
                    <i class="fas fa-newspaper w-6"></i>
                    <span>Berita & Pengumuman</span>
                </a>
                <a href="{{ route('admin.akreditasi.index') }}" 
                   class="sidebar-link flex items-center px-4 py-3 {{ request()->routeIs('admin.akreditasi.*') ? 'active' : '' }}">
                    <i class="fas fa-certificate w-6"></i>
                    <span>Data Akreditasi</span>
                </a>
                <a href="{{ route('admin.jadwal-asesmen.index') }}" 
                   class="sidebar-link flex items-center px-4 py-3 {{ request()->routeIs('admin.jadwal-asesmen.*') ? 'active' : '' }}">
                    <i class="fas fa-calendar-alt w-6"></i>
                    <span>Jadwal Asesmen</span>
                </a>
                <a href="{{ route('admin.struktur-organisasi.index') }}" 
                   class="sidebar-link flex items-center px-4 py-3 {{ request()->routeIs('admin.struktur-organisasi.*') ? 'active' : '' }}">
                    <i class="fas fa-sitemap w-6"></i>
                    <span>Struktur Organisasi</span>
                </a>
                <a href="{{ route('admin.dokumen.index') }}" 
                   class="sidebar-link flex items-center px-4 py-3 {{ request()->routeIs('admin.dokumen.*') ? 'active' : '' }}">
                    <i class="fas fa-folder-open w-6"></i>
                    <span>Kelola Dokumen</span>
                </a>
                <a href="{{ route('admin.statistik.index') }}" 
                   class="sidebar-link flex items-center px-4 py-3 {{ request()->routeIs('admin.statistik.*') ? 'active' : '' }}">
                    <i class="fas fa-chart-bar w-6"></i>
                    <span>Statistik</span>
                </a>
                <a href="{{ route('admin.users.index') }}" 
                   class="sidebar-link flex items-center px-4 py-3 {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                    <i class="fas fa-users w-6"></i>
                    <span>Kelola User</span>
                </a>
            </nav>

            <div class="absolute bottom-0 w-full p-4 border-t border-blue-800">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="flex items-center text-red-300 hover:text-white w-full">
                        <i class="fas fa-sign-out-alt w-6"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 ml-64">
            <!-- Top Bar -->
            <header class="bg-white shadow-sm px-6 py-4 flex justify-between items-center">
                <h2 class="text-xl font-semibold text-gray-800">@yield('page-title', 'Dashboard')</h2>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('beranda.lpmpp') }}" target="_blank" 
                       class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition flex items-center">
                        <i class="fas fa-external-link-alt mr-2"></i>
                        Kunjungi Website
                    </a>
                    <span class="text-gray-600">{{ Auth::user()->name }}</span>
                    <div class="w-10 h-10 bg-blue-900 rounded-full flex items-center justify-center text-white font-bold">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-6">
                @if(session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4 rounded">
                        {{ session('error') }}
                    </div>
                @endif
                @yield('content')
            </main>
        </div>
    </div>
    @stack('scripts')
</body>
</html>
