@extends('admin.layouts.app')

@section('title', 'Edit Anggota')
@section('page-title', 'Edit Anggota Struktur Organisasi')

@section('content')
<div class="bg-white rounded-xl shadow-md p-6 max-w-2xl">
    <form action="{{ route('admin.struktur-organisasi.update', $struktur_organisasi) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="space-y-6">
            <div>
                <label class="block text-gray-700 font-medium mb-2">Nama <span class="text-red-500">*</span></label>
                <input type="text" name="nama" value="{{ old('nama', $struktur_organisasi->nama) }}" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Jabatan <span class="text-red-500">*</span></label>
                <input type="text" name="jabatan" value="{{ old('jabatan', $struktur_organisasi->jabatan) }}" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">NIP</label>
                <input type="text" name="nip" value="{{ old('nip', $struktur_organisasi->nip) }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Tugas Pokok</label>
                <textarea name="tugas_pokok" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">{{ old('tugas_pokok', $struktur_organisasi->tugas_pokok) }}</textarea>
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Urutan Tampil</label>
                <input type="number" name="urutan" value="{{ old('urutan', $struktur_organisasi->urutan) }}" min="0"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Foto</label>
                @if($struktur_organisasi->foto)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $struktur_organisasi->foto) }}" class="w-24 h-24 rounded-full object-cover">
                    </div>
                @endif
                <input type="file" name="foto" accept="image/*"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                <p class="text-gray-500 text-sm mt-1">Kosongkan jika tidak ingin mengubah foto</p>
            </div>
            <div class="flex items-center">
                <input type="checkbox" name="is_active" id="is_active" class="w-5 h-5 text-blue-600 rounded" {{ $struktur_organisasi->is_active ? 'checked' : '' }}>
                <label for="is_active" class="ml-2 text-gray-700">Aktif ditampilkan</label>
            </div>
        </div>

        <div class="mt-8 flex space-x-4">
            <button type="submit" class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition font-medium">
                <i class="fas fa-save mr-2"></i> Update
            </button>
            <a href="{{ route('admin.struktur-organisasi.index') }}" class="bg-gray-300 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-400 transition font-medium">Batal</a>
        </div>
    </form>
</div>
@endsection
