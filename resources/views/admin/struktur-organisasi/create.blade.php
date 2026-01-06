@extends('admin.layouts.app')

@section('title', 'Tambah Anggota')
@section('page-title', 'Tambah Anggota Struktur Organisasi')

@section('content')
<div class="bg-white rounded-xl shadow-md p-6 max-w-2xl">
    <form action="{{ route('admin.struktur-organisasi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="space-y-6">
            <div>
                <label class="block text-gray-700 font-medium mb-2">Nama <span class="text-red-500">*</span></label>
                <input type="text" name="nama" value="{{ old('nama') }}" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Jabatan <span class="text-red-500">*</span></label>
                <input type="text" name="jabatan" value="{{ old('jabatan') }}" required placeholder="Kepala LPMPP, Sekretaris, dll"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">NIP</label>
                <input type="text" name="nip" value="{{ old('nip') }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Tugas Pokok</label>
                <textarea name="tugas_pokok" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">{{ old('tugas_pokok') }}</textarea>
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Urutan Tampil</label>
                <input type="number" name="urutan" value="{{ old('urutan', 0) }}" min="0"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                <p class="text-gray-500 text-sm mt-1">Angka lebih kecil akan ditampilkan lebih dulu</p>
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Foto</label>
                <input type="file" name="foto" accept="image/*"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="flex items-center">
                <input type="checkbox" name="is_active" id="is_active" class="w-5 h-5 text-blue-600 rounded" checked>
                <label for="is_active" class="ml-2 text-gray-700">Aktif ditampilkan</label>
            </div>
        </div>

        <div class="mt-8 flex space-x-4">
            <button type="submit" class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition font-medium">
                <i class="fas fa-save mr-2"></i> Simpan
            </button>
            <a href="{{ route('admin.struktur-organisasi.index') }}" class="bg-gray-300 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-400 transition font-medium">Batal</a>
        </div>
    </form>
</div>
@endsection
