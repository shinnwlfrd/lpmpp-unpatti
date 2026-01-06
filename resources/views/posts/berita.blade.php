@extends('layouts.app')

@section('content')
<!-- BACKGROUND -->
<div class="pt-40 flex justify-center">
<main id="berita-section" class="flex-grow font-['Poppins'] bg-gray-50 pb-24">
    <div class="container mx-auto px-6 pt-10">

        <!-- Judul Berita -->
        <h1 class="text-4xl md:text-3xl font-extrabold text-blue-900 mb-14 text-center tracking-wide animate-fadeInDown">
        ARSIP BERITA LPMPP
        </h1>

        <!-- Grid Berita -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @forelse($posts as $post)
            <!-- Card Berita Dinamis -->
            <a href="{{ route('posts.show', $post->slug) }}" 
               class="bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-2xl animate-zoomIn block">
                        
                <!-- Gambar Berita -->
                @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-60 object-cover">
                @else
                    <div class="w-full h-60 bg-gray-200 flex items-center justify-center">
                        <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                @endif

                <div class="p-6">
                    <!-- Judul Berita -->
                    <h2 class="text-2xl font-bold text-blue-800 mb-3 hover:text-blue-600 transition-colors duration-300">
                        {{ $post->title }}
                    </h2>

                    <!-- Deskripsi Singkat -->
                    <p class="text-gray-700 text-justify leading-relaxed">
                        {{ Str::limit(strip_tags($post->content), 150) }}
                    </p>

                    <!-- Tanggal Posting & Admin -->
                    <div class="mt-5 flex items-center justify-between text-gray-500 text-sm">
                        <!-- Tanggal Posting -->
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10m-11 8h12a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>{{ $post->published_at ? $post->published_at->format('d F Y') : $post->created_at->format('d F Y') }}</span>
                        </div>

                        <!-- Nama Admin -->
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 17.804A9 9 0 1112 21a9 9 0 01-6.879-3.196z" />
                            </svg>
                            <span>{{ $post->author ?? 'Admin LPMPP' }}</span>
                        </div>
                    </div>
                </div>
            </a>
            @empty
            <div class="col-span-3 text-center py-20">
                <svg class="w-20 h-20 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
                <p class="text-gray-500 text-xl">Belum ada berita yang dipublikasikan</p>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($posts->hasPages())
        <div class="mt-12 flex justify-center">
            {{ $posts->links() }}
        </div>
        @endif
    </div>
</main>
</div>

<!-- Animasi -->
<style>
  @keyframes fadeInDown {
    from { opacity: 0; transform: translateY(-30px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @keyframes zoomIn {
    0% { opacity: 0; transform: scale(0.9); }
    100% { opacity: 1; transform: scale(1); }
  }

  .animate-fadeInDown {
    animation: fadeInDown 1s ease-out forwards;
  }

  .animate-zoomIn {
    animation: zoomIn 1s ease-out forwards;
  }
</style>
@endsection
