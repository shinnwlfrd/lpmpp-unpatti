@extends('layouts.app')

@section('content')
<div class="pt-40">
<main class="flex-grow font-['Poppins'] bg-gray-50 pb-24">
    <div class="container mx-auto px-6 pt-10 max-w-4xl">

        <!-- Breadcrumb -->
        <nav class="mb-6 text-sm">
            <a href="{{ route('beranda.lpmpp') }}" class="text-blue-600 hover:underline">Beranda</a>
            <span class="mx-2 text-gray-400">/</span>
            <a href="{{ route('berita.lpmpp') }}" class="text-blue-600 hover:underline">Berita</a>
            <span class="mx-2 text-gray-400">/</span>
            <span class="text-gray-600">{{ Str::limit($post->title, 30) }}</span>
        </nav>

        <!-- Article -->
        <article class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- Gambar -->
            @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-80 object-cover">
            @endif

            <div class="p-8">
                <!-- Badge Tipe -->
                <span class="px-3 py-1 text-sm rounded-full {{ $post->type == 'berita' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                    {{ ucfirst($post->type) }}
                </span>

                <!-- Judul -->
                <h1 class="text-3xl md:text-4xl font-bold text-blue-900 mt-4 mb-4">
                    {{ $post->title }}
                </h1>

                <!-- Meta Info -->
                <div class="flex flex-wrap items-center gap-4 text-gray-500 text-sm mb-8 pb-6 border-b border-gray-200">
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10m-11 8h12a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>{{ $post->published_at ? $post->published_at->format('d F Y') : $post->created_at->format('d F Y') }}</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span>{{ $post->author ?? 'Admin LPMPP' }}</span>
                    </div>
                </div>

                <!-- Konten -->
                <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                    {!! nl2br(e($post->content)) !!}
                </div>

                <!-- Share Buttons -->
                <div class="mt-10 pt-6 border-t border-gray-200">
                    <p class="text-gray-600 font-semibold mb-3">Bagikan:</p>
                    <div class="flex space-x-3">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank"
                           class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                            Facebook
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post->title) }}" target="_blank"
                           class="bg-sky-500 text-white px-4 py-2 rounded-lg hover:bg-sky-600 transition">
                            Twitter
                        </a>
                        <a href="https://wa.me/?text={{ urlencode($post->title . ' ' . request()->url()) }}" target="_blank"
                           class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </article>

        <!-- Related Posts -->
        @if($relatedPosts->count() > 0)
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-blue-900 mb-6">Berita Terkait</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($relatedPosts as $related)
                <a href="{{ route('posts.show', $related->slug) }}" class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    @if($related->image)
                        <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->title }}" class="w-full h-40 object-cover">
                    @else
                        <div class="w-full h-40 bg-gray-200 flex items-center justify-center">
                            <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    @endif
                    <div class="p-4">
                        <h3 class="font-semibold text-blue-800 hover:text-blue-600">{{ Str::limit($related->title, 50) }}</h3>
                        <p class="text-gray-500 text-sm mt-2">{{ $related->published_at ? $related->published_at->format('d M Y') : '' }}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Back Button -->
        <div class="mt-8">
            <a href="{{ route('berita.lpmpp') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Kembali ke Daftar Berita
            </a>
        </div>
    </div>
</main>
</div>
@endsection
