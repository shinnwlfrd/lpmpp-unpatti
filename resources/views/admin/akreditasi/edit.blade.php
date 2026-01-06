@extends('admin.layouts.app')

@section('title', 'Edit Akreditasi')
@section('page-title', 'Edit Data Akreditasi')

@section('content')
<div class="bg-white rounded-xl shadow-md p-6">
    <form action="{{ route('admin.akreditasi.update', $akreditasi) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-gray-700 font-medium mb-2">Program Studi <span class="text-red-500">*</span></label>
                <input type="text" name="program_studi" value="{{ old('program_studi', $akreditasi->program_studi) }}" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Fakultas <span class="text-red-500">*</span></label>
                <input type="text" name="fakultas" value="{{ old('fakultas', $akreditasi->fakultas) }}" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Jenjang <span class="text-red-500">*</span></label>
                <select name="jenjang" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    @foreach(['D3', 'S1', 'S2', 'S3', 'Profesi'] as $j)
                        <option value="{{ $j }}" {{ $akreditasi->jenjang == $j ? 'selected' : '' }}>{{ $j }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Peringkat</label>
                <select name="peringkat" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    <option value="">-- Pilih Peringkat --</option>
                    @foreach(['Unggul', 'Baik Sekali', 'Baik', 'A', 'B', 'C'] as $p)
                        <option value="{{ $p }}" {{ $akreditasi->peringkat == $p ? 'selected' : '' }}>{{ $p }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Nomor SK</label>
                <input type="text" name="nomor_sk" value="{{ old('nomor_sk', $akreditasi->nomor_sk) }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Lembaga Akreditasi</label>
                <input type="text" name="lembaga_akreditasi" value="{{ old('lembaga_akreditasi', $akreditasi->lembaga_akreditasi) }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Tanggal SK</label>
                <input type="date" name="tanggal_sk" value="{{ old('tanggal_sk', $akreditasi->tanggal_sk?->format('Y-m-d')) }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Tanggal Kadaluarsa</label>
                <input type="date" name="tanggal_kadaluarsa" value="{{ old('tanggal_kadaluarsa', $akreditasi->tanggal_kadaluarsa?->format('Y-m-d')) }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="md:col-span-2">
                <label class="block text-gray-700 font-medium mb-2">Upload Sertifikat (PDF)</label>
                @if($akreditasi->sertifikat)
                    <p class="text-sm text-gray-500 mb-2">File saat ini: <a href="{{ asset('storage/' . $akreditasi->sertifikat) }}" target="_blank" class="text-blue-600 hover:underline">Lihat Sertifikat</a></p>
                @endif
                <input type="file" name="sertifikat" accept=".pdf"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
        </div>

        <div class="mt-8 flex space-x-4">
            <button type="submit" class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition font-medium">
                <i class="fas fa-save mr-2"></i> Update
            </button>
            <a href="{{ route('admin.akreditasi.index') }}" class="bg-gray-300 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-400 transition font-medium">Batal</a>
        </div>
    </form>
</div>
@endsection
