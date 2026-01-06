@extends('layouts.app')

@section('content')
<main class="flex-grow font-['Poppins']">
    <!-- Struktur Organisasi Gambar -->
    <div class="container mx-auto px-6 pt-48 pb-12">
        <div class="w-full border-4 rounded-xl p-8 bg-white flex flex-col items-center shadow-lg">
            <h2 class="text-3xl font-bold text-black mb-6 text-center">
                Struktur Organisasi LPMPP
            </h2>
            <div class="flex justify-center">
                <img src="{{ asset('images/struktur-organisasi.png') }}" 
                     alt="Struktur Organisasi LPMPP" 
                     class="w-full max-w-4xl rounded-lg shadow-lg border border-gray-300">
            </div>
        </div>
    </div>

    <!-- Tabel Tim Pengelola -->
    <div class="container mx-auto px-6 pb-12">
        <h2 class="text-3xl font-bold text-black mb-6 text-center">
            Tim Pengelola LPMPP Unpatti
        </h2>

        <div class="overflow-x-auto">
            <table id="myTable" class="min-w-full border border-gray-300">
                <thead>
                    <tr>
                        <th class="text-center px-4 py-3 bg-blue-900 text-white" style="width:5%;">No</th>
                        <th class="text-left px-4 py-3 bg-blue-900 text-white" style="width:30%;">Nama Pengelola</th>
                        <th class="text-center px-4 py-3 bg-blue-900 text-white" style="width:15%;">Foto Profil</th>
                        <th class="text-center px-4 py-3 bg-blue-900 text-white" style="width:30%;">Status Pengelola</th>
                        <th class="text-left px-4 py-3 bg-blue-900 text-white" style="width:20%;">Tugas Pokok</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($strukturs as $index => $struktur)
                    <tr class="{{ $index % 2 == 0 ? 'bg-blue-50' : 'bg-gray-100' }} hover:bg-blue-100">
                        <td class="text-center px-4 py-3 border border-blue-900">{{ $index + 1 }}</td>
                        <td class="text-left px-4 py-3 border border-blue-900 font-bold">
                            {{ $struktur->nama }}<br>
                            <span class="text-sm text-gray-600">NIP: {{ $struktur->nip ?? '-' }}</span>
                        </td>
                        <td class="text-center px-4 py-3 border border-blue-900">
                            @if($struktur->foto)
                                @if(str_starts_with($struktur->foto, 'images/'))
                                    <img src="{{ asset($struktur->foto) }}" 
                                         onerror="this.onerror=null; this.src='{{ asset('images/avatar.jpg') }}';"
                                         alt="{{ $struktur->nama }}" 
                                         class="mx-auto h-20 w-20 rounded-full object-cover border border-gray-300 shadow">
                                @else
                                    <img src="{{ asset('storage/' . $struktur->foto) }}" 
                                         onerror="this.onerror=null; this.src='{{ asset('images/avatar.jpg') }}';"
                                         alt="{{ $struktur->nama }}" 
                                         class="mx-auto h-20 w-20 rounded-full object-cover border border-gray-300 shadow">
                                @endif
                            @else
                                <img src="{{ asset('images/avatar.jpg') }}" 
                                     alt="{{ $struktur->nama }}" 
                                     class="mx-auto h-20 w-20 rounded-full object-cover border border-gray-300 shadow">
                            @endif
                        </td>
                        <td class="text-center px-4 py-3 border border-blue-900">{{ $struktur->jabatan }}</td>
                        <td class="text-left px-4 py-3 border border-blue-900">{{ $struktur->tugas_pokok }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center px-4 py-8 text-gray-500">Belum ada data</td>
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
    const table = document.getElementById("myTable");
    const rows = Array.from(table.querySelectorAll("tbody tr"));
    const rowsPerPage = 5;
    let currentPage = 1;

    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    const pageInfo = document.getElementById("pageInfo");

    function displayRows() {
        const totalPages = Math.ceil(rows.length / rowsPerPage) || 1;
        const start = (currentPage - 1) * rowsPerPage;
        const end = start + rowsPerPage;

        rows.forEach((row, index) => {
            row.style.display = (index >= start && index < end) ? "" : "none";
        });

        pageInfo.textContent = `Halaman ${currentPage} dari ${totalPages}`;
        prevBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage >= totalPages;
    }

    prevBtn.addEventListener("click", () => {
        if (currentPage > 1) {
            currentPage--;
            displayRows();
        }
    });

    nextBtn.addEventListener("click", () => {
        const totalPages = Math.ceil(rows.length / rowsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            displayRows();
        }
    });

    displayRows();
</script>
@endsection
