@extends('admin.layouts.app')

@section('title', 'Tambah Statistik')
@section('page-title', 'Tambah Statistik Baru')

@section('content')
<div class="bg-white rounded-xl shadow-md p-6 max-w-2xl">
    <form action="{{ route('admin.statistik.store') }}" method="POST">
        @csrf
        <div class="space-y-6">
            <div>
                <label class="block text-gray-700 font-medium mb-2">Nama <span class="text-red-500">*</span></label>
                <input type="text" name="nama" value="{{ old('nama') }}" required placeholder="Jumlah Program Studi"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Kunci <span class="text-red-500">*</span></label>
                <input type="text" name="kunci" value="{{ old('kunci') }}" required placeholder="total_prodi"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                <p class="text-gray-500 text-sm mt-1">Kunci unik untuk mengakses nilai (tanpa spasi)</p>
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Nilai <span class="text-red-500">*</span></label>
                <input type="text" name="nilai" value="{{ old('nilai') }}" required placeholder="105"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Deskripsi</label>
                <textarea name="deskripsi" rows="2" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">{{ old('deskripsi') }}</textarea>
            </div>
            <div class="flex items-center">
                <input type="checkbox" name="is_active" id="is_active" class="w-5 h-5 text-blue-600 rounded" checked>
                <label for="is_active" class="ml-2 text-gray-700">Aktif</label>
            </div>
        </div>
        <div class="mt-8 flex space-x-4">
            <button type="submit" class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition font-medium">
                <i class="fas fa-save mr-2"></i> Simpan
            </button>
            <a href="{{ route('admin.statistik.index') }}" class="bg-gray-300 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-400 transition font-medium">Batal</a>
        </div>
    </form>
</div>
@endsection
