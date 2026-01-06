@extends('admin.layouts.app')

@section('title', 'Tambah Post')
@section('page-title', 'Tambah Post Baru')

@section('content')
<div class="bg-white rounded-xl shadow-md p-6">
    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-gray-700 font-medium mb-2">Judul <span class="text-red-500">*</span></label>
                <input type="text" name="title" value="{{ old('title') }}" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('title') border-red-500 @enderror"
                       placeholder="Masukkan judul post">
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Tipe <span class="text-red-500">*</span></label>
                <select name="type" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option value="berita" {{ old('type') == 'berita' ? 'selected' : '' }}>Berita</option>
                    <option value="pengumuman" {{ old('type') == 'pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                </select>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Penulis</label>
                <input type="text" name="author" value="{{ old('author') }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                       placeholder="Nama penulis">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Gambar</label>
                <input type="file" name="image" accept="image/*"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <p class="text-gray-500 text-sm mt-1">Format: JPG, PNG. Maks: 2MB</p>
            </div>
        </div>

        <div class="mt-6">
            <label class="block text-gray-700 font-medium mb-2">Konten <span class="text-red-500">*</span></label>
            <textarea name="content" rows="10" required
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('content') border-red-500 @enderror"
                      placeholder="Tulis konten post di sini...">{{ old('content') }}</textarea>
            @error('content')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mt-6 flex items-center">
            <input type="checkbox" name="publish" id="publish" class="w-5 h-5 text-blue-600 rounded">
            <label for="publish" class="ml-2 text-gray-700">Publish langsung</label>
        </div>

        <div class="mt-8 flex space-x-4">
            <button type="submit" class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition font-medium">
                <i class="fas fa-save mr-2"></i> Simpan Post
            </button>
            <a href="{{ route('admin.posts.index') }}" class="bg-gray-300 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-400 transition font-medium">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
