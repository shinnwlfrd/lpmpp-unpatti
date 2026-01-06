@extends('layouts.app')

@section('content')
<main class="flex-grow font-['Poppins']">
    <div class="container mx-auto px-6 pt-48 pb-12">
        <h2 class="text-3xl font-bold text-black mb-6 text-center">
            DATA AKREDITASI PROGRAM STUDI
        </h2>

        <!-- Search -->
        <div class="mt-4 flex items-center mb-4">
            <svg class="w-5 h-5 text-gray-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M9 17a8 8 0 100-16 8 8 0 000 16z"/>
            </svg>
            <input type="text" id="searchInput" placeholder="Cari program studi..." class="px-4 py-2 border rounded w-full">
        </div>

        <div class="overflow-x-auto">
            <table id="dokumenTable" class="min-w-full border border-gray-300">
                <thead>
                    <tr>
                        <th class="text-center px-4 py-3 bg-blue-900 text-white w-12">No</th>
                        <th class="text-left px-4 py-3 bg-blue-900 text-white">Program</th>
                        <th class="text-left px-4 py-3 bg-blue-900 text-white">Program Studi</th>
                        <th class="text-left px-4 py-3 bg-blue-900 text-white">Fakultas</th>
                        <th class="text-left px-4 py-3 bg-blue-900 text-white">Lembaga Akreditasi</th>
                        <th class="text-center px-4 py-3 bg-blue-900 text-white">Peringkat</th>
                        <th class="text-center px-4 py-3 bg-blue-900 text-white">Kadaluarsa</th>
                        <th class="text-center px-4 py-3 bg-blue-900 text-white w-32">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($akreditasis as $index => $akred)
                    <tr class="{{ $index % 2 == 0 ? 'bg-blue-50' : 'bg-gray-100' }} hover:bg-blue-100">
                        <td class="text-center px-4 py-3 border border-blue-900">{{ $index + 1 }}</td>
                        <td class="px-4 py-3 border border-blue-900">{{ $akred->jenjang }}</td>
                        <td class="px-4 py-3 border border-blue-900 font-medium">{{ $akred->program_studi }}</td>
                        <td class="px-4 py-3 border border-blue-900">{{ $akred->fakultas }}</td>
                        <td class="px-4 py-3 border border-blue-900">{{ $akred->lembaga_akreditasi }}</td>
                        <td class="text-center px-4 py-3 border border-blue-900">
                            <span class="px-2 py-1 rounded text-sm font-bold
                                @if(in_array($akred->peringkat, ['UNGGUL', 'A'])) bg-green-100 text-green-800
                                @elseif(in_array($akred->peringkat, ['BAIK SEKALI'])) bg-blue-100 text-blue-800
                                @elseif(in_array($akred->peringkat, ['BAIK', 'B'])) bg-yellow-100 text-yellow-800
                                @elseif($akred->peringkat == 'C') bg-orange-100 text-orange-800
                                @else bg-red-100 text-red-800
                                @endif">
                                {{ $akred->peringkat }}
                            </span>
                        </td>
                        <td class="text-center px-4 py-3 border border-blue-900">
                            {{ $akred->tanggal_kadaluarsa ? $akred->tanggal_kadaluarsa->format('d-m-Y') : '-' }}
                        </td>
                        <td class="text-center px-4 py-3 border border-blue-900">
                            @if($akred->sertifikat)
                            <a href="{{ asset('storage/' . $akred->sertifikat) }}" target="_blank" 
                               class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 text-sm">
                                Download
                            </a>
                            @else
                            <span class="text-gray-400 text-sm">-</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center px-4 py-8 text-gray-500">Belum ada data akreditasi</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center items-center mt-4 space-x-4 mb-10">
            <button id="prevBtn" class="px-4 py-2 bg-blue-500 text-white rounded disabled:opacity-50">Previous</button>
            <span id="pageInfo" class="text-black"></span>
            <button id="nextBtn" class="px-4 py-2 bg-blue-500 text-white rounded">Next</button>
        </div>
    </div>
</main>

<script>
const table = document.getElementById("dokumenTable");
const rows = Array.from(table.querySelectorAll("tbody tr"));
const rowsPerPage = 20;
let currentPage = 1;

const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const pageInfo = document.getElementById("pageInfo");
const searchInput = document.getElementById("searchInput");

function displayRows() {
    const filter = searchInput.value.toLowerCase();
    const filteredRows = rows.filter(row => row.textContent.toLowerCase().includes(filter));
    const totalPages = Math.ceil(filteredRows.length / rowsPerPage) || 1;

    rows.forEach(row => row.style.display = "none");

    const start = (currentPage - 1) * rowsPerPage;
    const end = start + rowsPerPage;
    filteredRows.slice(start, end).forEach(row => row.style.display = "");

    pageInfo.textContent = `Halaman ${currentPage} dari ${totalPages}`;
    prevBtn.disabled = currentPage === 1;
    nextBtn.disabled = currentPage >= totalPages;
}

prevBtn.addEventListener("click", () => {
    if (currentPage > 1) { currentPage--; displayRows(); }
});

nextBtn.addEventListener("click", () => {
    const filter = searchInput.value.toLowerCase();
    const filteredRows = rows.filter(row => row.textContent.toLowerCase().includes(filter));
    const totalPages = Math.ceil(filteredRows.length / rowsPerPage);
    if (currentPage < totalPages) { currentPage++; displayRows(); }
});

searchInput.addEventListener("keyup", () => { currentPage = 1; displayRows(); });

displayRows();
</script>
@endsection
