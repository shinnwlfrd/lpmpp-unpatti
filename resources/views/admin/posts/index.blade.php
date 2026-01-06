@extends('admin.layouts.app')

@section('title', 'Kelola Berita')
@section('page-title', 'Kelola Berita & Pengumuman')

@section('content')
<div class="bg-white rounded-xl shadow-md">
    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
        <h3 class="text-lg font-semibold text-gray-800">Daftar Post</h3>
        <a href="{{ route('admin.posts.create') }}" 
           class="bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition flex items-center">
            <i class="fas fa-plus mr-2"></i> Tambah Post
        </a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">No</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Judul</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Tipe</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Penulis</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Status</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Tanggal</th>
                    <th class="px-6 py-3 text-center text-sm font-semibold text-gray-600">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($posts as $index => $post)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-gray-600">{{ $posts->firstItem() + $index }}</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            @if($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" class="w-12 h-12 rounded object-cover mr-3">
                            @else
                                <div class="w-12 h-12 bg-gray-200 rounded flex items-center justify-center mr-3">
                                    <i class="fas fa-image text-gray-400"></i>
                                </div>
                            @endif
                            <span class="text-gray-800 font-medium">{{ Str::limit($post->title, 35) }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 text-xs rounded-full {{ $post->type == 'berita' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                            {{ ucfirst($post->type) }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-gray-600">{{ $post->author ?? '-' }}</td>
                    <td class="px-6 py-4">
                        @if($post->published_at)
                            <span class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-700">Published</span>
                        @else
                            <span class="px-3 py-1 text-xs rounded-full bg-gray-100 text-gray-700">Draft</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-gray-600 text-sm">{{ $post->created_at->format('d M Y') }}</td>
                    <td class="px-6 py-4">
                        <div class="flex justify-center space-x-2">
                            <a href="{{ route('admin.posts.edit', $post) }}" 
                               class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" 
                                  onsubmit="return confirm('Yakin ingin menghapus post ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-6 py-12 text-center text-gray-500">
                        <i class="fas fa-inbox text-4xl mb-3 block"></i>
                        Belum ada post. <a href="{{ route('admin.posts.create') }}" class="text-blue-600 hover:underline">Buat post pertama</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($posts->hasPages())
    <div class="p-6 border-t border-gray-200">
        {{ $posts->links() }}
    </div>
    @endif
</div>
@endsection
