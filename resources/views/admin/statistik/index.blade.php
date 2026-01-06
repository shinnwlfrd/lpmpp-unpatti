@extends('admin.layouts.app')

@section('title', 'Kelola Statistik')
@section('page-title', 'Kelola Statistik')

@section('content')
<div class="bg-white rounded-xl shadow-md p-6">
    <div class="flex justify-between items-center mb-6">
        <h3 class="text-lg font-semibold text-gray-700">Daftar Statistik</h3>
        <a href="{{ route('admin.statistik.create') }}" class="bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition">
            <i class="fas fa-plus mr-2"></i> Tambah Statistik
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-gray-600">Nama</th>
                    <th class="px-4 py-3 text-left text-gray-600">Kunci</th>
                    <th class="px-4 py-3 text-left text-gray-600">Nilai</th>
                    <th class="px-4 py-3 text-center text-gray-600">Status</th>
                    <th class="px-4 py-3 text-center text-gray-600">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @forelse($statistiks as $stat)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">{{ $stat->nama }}</td>
                    <td class="px-4 py-3"><code class="bg-gray-100 px-2 py-1 rounded">{{ $stat->kunci }}</code></td>
                    <td class="px-4 py-3 font-bold text-blue-900">{{ $stat->nilai }}</td>
                    <td class="px-4 py-3 text-center">
                        <span class="px-2 py-1 rounded text-xs {{ $stat->is_active ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                            {{ $stat->is_active ? 'Aktif' : 'Nonaktif' }}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <a href="{{ route('admin.statistik.edit', $stat) }}" class="text-blue-600 hover:text-blue-800 mr-3">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.statistik.destroy', $stat) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="px-4 py-8 text-center text-gray-500">Belum ada data</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-4">{{ $statistiks->links() }}</div>
</div>
@endsection
