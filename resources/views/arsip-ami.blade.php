@extends('layouts.app')

@section('content')
<main class="flex-grow font-['Poppins']">
    <div class="container mx-auto px-6 pt-48 pb-12">
        <h2 class="text-3xl font-bold text-black mb-6 text-center">
            ARSIP AMI
        </h2>

        <!-- Search -->
        <div class="mt-4 flex items-center mb-4">
            <svg class="w-5 h-5 text-gray-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M9 17a8 8 0 100-16 8 8 0 000 16z"/>
            </svg>
            <input type="text" id="searchInput" placeholder="Cari dokumen..." class="px-4 py-2 border rounded w-full">
        </div>

        <div class="overflow-x-auto">
            <table id="dokumenTable" class="min-w-full border border-gray-300">
                <thead>
                    <tr>
                        <th class="text-center px-4 py-3 bg-blue-900 text-white w-16">No</th>
                        <th class="text-left px-4 py-3 bg-blue-900 text-white">Nama Dokumen</th>
                        <th class="text-center px-4 py-3 bg-blue-900 text-white w-32">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($dokumens as $index => $doc)
                    <tr class="{{ $index % 2 == 0 ? 'bg-blue-50' : 'bg-gray-100' }} hover:bg-blue-100">
                        <td class="text-center px-4 py-3 border border-blue-900">{{ $index + 1 }}</td>
                        <td class="px-4 py-3 border border-blue-900">{{ $doc->nama }}</td>
                        <td class="text-center px-4 py-3 border border-blue-900">
                            <a href="{{ $doc->getDownloadUrl() }}" target="_blank" 
                               class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 inline-block">
                                Download
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center px-4 py-8 text-gray-500">Belum ada dokumen</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</main>

<script>
document.getElementById('searchInput').addEventListener('keyup', function() {
    const filter = this.value.toLowerCase();
    const rows = document.querySelectorAll('#dokumenTable tbody tr');
    rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(filter) ? '' : 'none';
    });
});
</script>
@endsection
