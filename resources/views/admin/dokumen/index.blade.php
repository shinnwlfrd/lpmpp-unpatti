@extends('admin.layouts.app')

@section('title', 'Kelola Dokumen')
@section('page-title', 'Kelola Dokumen')

@section('content')
<div class="bg-white rounded-xl shadow-md">
    <div class="p-6 border-b border-gray-200 flex flex-wrap justify-between items-center gap-4">
        <div class="flex items-center gap-4">
            <h3 class="text-lg font-semibold text-gray-800">Daftar Dokumen</h3>
            <select onchange="window.location.href='?kategori='+this.value" class="px-3 py-2 border border-gray-300 rounded-lg text-sm">
                <option value="">Semua Kategori</option>
                @foreach($kategoriList as $key => $label)
                    <option value="{{ $key }}" {{ request('kategori') == $key ? 'selected' : '' }}>{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <a href="{{ route('admin.dokumen.create') }}" class="bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition flex items-center">
            <i class="fas fa-plus mr-2"></i> Tambah Dokumen
        </a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">No</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">Nama Dokumen</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">Kategori</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">Lembaga</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">Status</th>
                    <th class="px-4 py-3 text-center text-sm font-semibold text-gray-600">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($dokumens as $index => $item)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 text-gray-600">{{ $dokumens->firstItem() + $index }}</td>
                    <td class="px-4 py-3">
                        <div>
                            <p class="text-gray-800 font-medium">{{ Str::limit($item->nama, 50) }}</p>
                            @if($item->file || $item->link_external)
                                <a href="{{ $item->getDownloadUrl() }}" target="_blank" class="text-blue-600 text-sm hover:underline">
                                    <i class="fas fa-download mr-1"></i> Download
                                </a>
                            @endif
                        </div>
                    </td>
                    <td class="px-4 py-3">
                        <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-700">
                            {{ $kategoriList[$item->kategori] ?? $item->kategori }}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-gray-600">{{ $item->lembaga ?? '-' }}</td>
                    <td class="px-4 py-3">
                        <span class="px-2 py-1 text-xs rounded-full {{ $item->is_active ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-700' }}">
                            {{ $item->is_active ? 'Aktif' : 'Nonaktif' }}
                        </span>
                    </td>
                    <td class="px-4 py-3">
                        <div class="flex justify-center space-x-2">
                            <a href="{{ route('admin.dokumen.edit', $item) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.dokumen.destroy', $item) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
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
                    <td colspan="6" class="px-4 py-12 text-center text-gray-500">
                        <i class="fas fa-folder-open text-4xl mb-3 block"></i>
                        Belum ada dokumen
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($dokumens->hasPages())
    <div class="p-6 border-t border-gray-200">{{ $dokumens->links() }}</div>
    @endif
</div>
@endsection
