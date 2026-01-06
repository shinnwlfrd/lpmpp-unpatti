@extends('admin.layouts.app')

@section('title', 'Edit Jadwal Asesmen')
@section('page-title', 'Edit Jadwal Asesmen Lapangan')

@section('content')
<div class="bg-white rounded-xl shadow-md p-6">
    <form action="{{ route('admin.jadwal-asesmen.update', $jadwal_asesmen) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-gray-700 font-medium mb-2">Program Studi <span class="text-red-500">*</span></label>
                <input type="text" name="program_studi" value="{{ old('program_studi', $jadwal_asesmen->program_studi) }}" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Fakultas <span class="text-red-500">*</span></label>
                <input type="text" name="fakultas" value="{{ old('fakultas', $jadwal_asesmen->fakultas) }}" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Jenjang</label>
                <select name="jenjang" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    <option value="">-- Pilih Jenjang --</option>
                    @foreach(['D3', 'S1', 'S2', 'S3', 'Profesi'] as $j)
                        <option value="{{ $j }}" {{ $jadwal_asesmen->jenjang == $j ? 'selected' : '' }}>{{ $j }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Lembaga Akreditasi</label>
                <input type="text" name="lembaga_akreditasi" value="{{ old('lembaga_akreditasi', $jadwal_asesmen->lembaga_akreditasi) }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Tanggal Mulai <span class="text-red-500">*</span></label>
                <input type="date" name="tanggal_mulai" value="{{ old('tanggal_mulai', $jadwal_asesmen->tanggal_mulai->format('Y-m-d')) }}" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Tanggal Selesai <span class="text-red-500">*</span></label>
                <input type="date" name="tanggal_selesai" value="{{ old('tanggal_selesai', $jadwal_asesmen->tanggal_selesai->format('Y-m-d')) }}" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Status <span class="text-red-500">*</span></label>
                <select name="status" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    @foreach(['terjadwal', 'berlangsung', 'selesai'] as $s)
                        <option value="{{ $s }}" {{ $jadwal_asesmen->status == $s ? 'selected' : '' }}>{{ ucfirst($s) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="md:col-span-2">
                <label class="block text-gray-700 font-medium mb-2">Keterangan</label>
                <textarea name="keterangan" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">{{ old('keterangan', $jadwal_asesmen->keterangan) }}</textarea>
            </div>
        </div>

        <div class="mt-8 flex space-x-4">
            <button type="submit" class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition font-medium">
                <i class="fas fa-save mr-2"></i> Update
            </button>
            <a href="{{ route('admin.jadwal-asesmen.index') }}" class="bg-gray-300 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-400 transition font-medium">Batal</a>
        </div>
    </form>
</div>
@endsection
