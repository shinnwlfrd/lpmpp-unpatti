@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-6 text-blue-900">Tambah Berita</h1>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow p-6 rounded">
        @csrf

        <div class="mb-4">
            <label class="block font-semibold mb-1">Judul Berita</label>
            <input type="text" name="title" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Konten Berita</label>
            <textarea name="content" class="w-full border rounded px-3 py-2" rows="6" required></textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Gambar (opsional)</label>
            <input type="file" name="image" class="w-full">
            <p class="text-sm text-gray-500 mt-1">Ukuran gambar akan otomatis diubah menjadi 400x300 px.</p>
        </div>

        <button type="submit" class="bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan Berita</button>
    </form>
</div>
@endsection
