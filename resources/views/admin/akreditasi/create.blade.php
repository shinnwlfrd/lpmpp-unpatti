@extends('admin.layouts.app')

@section('title', 'Tambah Akreditasi')
@section('page-title', 'Tambah Data Akreditasi')

@section('content')
<div class="bg-white rounded-xl shadow-md p-6">
    <form action="{{ route('admin.akreditasi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-gray-700 font-medium mb-2">Program Studi <span class="text-red-500">*</span></label>
                <input type="text" name="program_studi" value="{{ old('program_studi') }}" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Fakultas <span class="text-red-500">*</span></label>
                <input type="text" name="fakultas" value="{{ old('fakultas') }}" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Jenjang <span class="text-red-500">*</span></label>
                <select name="jenjang" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    <option value="D3">D3</option>
                    <option value="S1" selected>S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                    <option value="Profesi">Profesi</option>
                </select>
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Peringkat</label>
                <select name="peringkat" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    <option value="">-- Pilih Peringkat --</option>
                    <option value="Unggul">Unggul</option>
                    <option value="Baik Sekali">Baik Sekali</option>
                    <option value="Baik">Baik</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Nomor SK</label>
                <input type="text" name="nomor_sk" value="{{ old('nomor_sk') }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Lembaga Akreditasi</label>
                <input type="text" name="lembaga_akreditasi" value="{{ old('lembaga_akreditasi') }}" placeholder="BAN-PT, LAM, dll"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Tanggal SK</label>
                <input type="date" name="tanggal_sk" value="{{ old('tanggal_sk') }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Tanggal Kadaluarsa</label>
                <input type="date" name="tanggal_kadaluarsa" value="{{ old('tanggal_kadaluarsa') }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="md:col-span-2">
                <label class="block text-gray-700 font-medium mb-2">Upload Sertifikat (PDF)</label>
                <input type="file" name="sertifikat" accept=".pdf"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
        </div>

        <div class="mt-8 flex space-x-4">
            <button type="submit" class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition font-medium">
                <i class="fas fa-save mr-2"></i> Simpan
            </button>
            <a href="{{ route('admin.akreditasi.index') }}" class="bg-gray-300 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-400 transition font-medium">Batal</a>
        </div>
    </form>
</div>
@endsection
