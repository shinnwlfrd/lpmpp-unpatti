@extends('admin.layouts.app')

@section('title', 'Edit Post')
@section('page-title', 'Edit Post')

@section('content')
<div class="bg-white rounded-xl shadow-md p-6">
    <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-gray-700 font-medium mb-2">Judul <span class="text-red-500">*</span></label>
                <input type="text" name="title" value="{{ old('title', $post->title) }}" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('title') border-red-500 @enderror">
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Tipe <span class="text-red-500">*</span></label>
                <select name="type" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option value="berita" {{ old('type', $post->type) == 'berita' ? 'selected' : '' }}>Berita</option>
                    <option value="pengumuman" {{ old('type', $post->type) == 'pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                </select>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Penulis</label>
                <input type="text" name="author" value="{{ old('author', $post->author) }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Gambar</label>
                @if($post->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $post->image) }}" class="w-32 h-24 object-cover rounded">
                    </div>
                @endif
                <input type="file" name="image" accept="image/*"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <p class="text-gray-500 text-sm mt-1">Kosongkan jika tidak ingin mengubah gambar</p>
            </div>
        </div>

        <div class="mt-6">
            <label class="block text-gray-700 font-medium mb-2">Konten <span class="text-red-500">*</span></label>
            <textarea name="content" rows="10" required
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('content') border-red-500 @enderror">{{ old('content', $post->content) }}</textarea>
            @error('content')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mt-6 flex items-center">
            @if(!$post->published_at)
                <input type="checkbox" name="publish" id="publish" class="w-5 h-5 text-blue-600 rounded">
                <label for="publish" class="ml-2 text-gray-700">Publish sekarang</label>
            @else
                <span class="text-green-600"><i class="fas fa-check-circle mr-1"></i> Sudah dipublish pada {{ $post->published_at->format('d M Y H:i') }}</span>
            @endif
        </div>

        <div class="mt-8 flex space-x-4">
            <button type="submit" class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition font-medium">
                <i class="fas fa-save mr-2"></i> Update Post
            </button>
            <a href="{{ route('admin.posts.index') }}" class="bg-gray-300 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-400 transition font-medium">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
