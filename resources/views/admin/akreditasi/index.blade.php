@extends('admin.layouts.app')

@section('title', 'Data Akreditasi')
@section('page-title', 'Data Akreditasi Program Studi')

@section('content')
<div class="bg-white rounded-xl shadow-md">
    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
        <h3 class="text-lg font-semibold text-gray-800">Daftar Akreditasi</h3>
        <a href="{{ route('admin.akreditasi.create') }}" class="bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition flex items-center">
            <i class="fas fa-plus mr-2"></i> Tambah Data
        </a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">No</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">Program Studi</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">Fakultas</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">Jenjang</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">Peringkat</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">Kadaluarsa</th>
                    <th class="px-4 py-3 text-center text-sm font-semibold text-gray-600">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($akreditasis as $index => $item)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 text-gray-600">{{ $akreditasis->firstItem() + $index }}</td>
                    <td class="px-4 py-3 text-gray-800 font-medium">{{ $item->program_studi }}</td>
                    <td class="px-4 py-3 text-gray-600">{{ $item->fakultas }}</td>
                    <td class="px-4 py-3 text-gray-600">{{ $item->jenjang }}</td>
                    <td class="px-4 py-3">
                        <span class="px-2 py-1 text-xs rounded-full 
                            @if(in_array($item->peringkat, ['Unggul', 'A'])) bg-green-100 text-green-700
                            @elseif(in_array($item->peringkat, ['Baik Sekali', 'B'])) bg-blue-100 text-blue-700
                            @else bg-yellow-100 text-yellow-700 @endif">
                            {{ $item->peringkat ?? '-' }}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-gray-600 text-sm">{{ $item->tanggal_kadaluarsa ? $item->tanggal_kadaluarsa->format('d M Y') : '-' }}</td>
                    <td class="px-4 py-3">
                        <div class="flex justify-center space-x-2">
                            <a href="{{ route('admin.akreditasi.edit', $item) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.akreditasi.destroy', $item) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-4 py-12 text-center text-gray-500">
                        <i class="fas fa-certificate text-4xl mb-3 block"></i>
                        Belum ada data akreditasi
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($akreditasis->hasPages())
    <div class="p-6 border-t border-gray-200">{{ $akreditasis->links() }}</div>
    @endif
</div>
@endsection
