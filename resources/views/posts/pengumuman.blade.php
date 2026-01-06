<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold mb-6">Pengumuman Terbaru</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($posts as $post)
                <div class="bg-white shadow-md rounded p-4 hover:shadow-lg transition">
                    <h2 class="text-xl font-semibold mb-2">
                        <a href="{{ route('posts.show', $post->slug) }}" class="text-blue-600 hover:underline">
                            {{ $post->title }}
                        </a>
                    </h2>
                    <p class="text-gray-500 text-sm mb-2">{{ $post->published_at->format('d M Y') }}</p>
                    <p class="text-gray-700">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
