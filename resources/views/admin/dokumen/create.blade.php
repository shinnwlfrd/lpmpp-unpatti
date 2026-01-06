@extends('admin.layouts.app')

@section('title', 'Tambah Dokumen')
@section('page-title', 'Tambah Dokumen Baru')

@section('content')
<div class="bg-white rounded-xl shadow-md p-6 max-w-3xl">
    <form action="{{ route('admin.dokumen.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="space-y-6">
            <div>
                <label class="block text-gray-700 font-medium mb-2">Nama Dokumen <span class="text-red-500">*</span></label>
                <input type="text" name="nama" value="{{ old('nama') }}" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Kategori <span class="text-red-500">*</span></label>
                    <select name="kategori" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                        @foreach($kategoriList as $key => $label)
                            <option value="{{ $key }}" {{ old('kategori') == $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Lembaga</label>
                    <input type="text" name="lembaga" value="{{ old('lembaga') }}" placeholder="BAN-PT, LAMSAMA, dll"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                </div>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Upload File</label>
                <input type="file" name="file" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                <p class="text-gray-500 text-sm mt-1">Format: PDF, DOC, DOCX, XLS, XLSX, PPT, PPTX. Maks: 10MB</p>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Atau Link External (Google Drive, dll)</label>
                <input type="url" name="link_external" value="{{ old('link_external') }}" placeholder="https://drive.google.com/..."
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Deskripsi</label>
                    <textarea name="deskripsi" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">{{ old('deskripsi') }}</textarea>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Tahun</label>
                    <input type="text" name="tahun" value="{{ old('tahun') }}" placeholder="2024"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    <p class="text-gray-500 text-sm mt-1">Untuk dokumen hasil survey</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Urutan</label>
                    <input type="number" name="urutan" value="{{ old('urutan', 0) }}" min="0"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="flex items-center pt-8">
                    <input type="checkbox" name="is_active" id="is_active" class="w-5 h-5 text-blue-600 rounded" checked>
                    <label for="is_active" class="ml-2 text-gray-700">Aktif ditampilkan</label>
                </div>
            </div>
        </div>

        <div class="mt-8 flex space-x-4">
            <button type="submit" class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition font-medium">
                <i class="fas fa-save mr-2"></i> Simpan
            </button>
            <a href="{{ route('admin.dokumen.index') }}" class="bg-gray-300 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-400 transition font-medium">Batal</a>
        </div>
    </form>
</div>
@endsection
