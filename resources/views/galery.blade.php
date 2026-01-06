<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>LPMPP Universitas Pattimura</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;800&family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      width: 100%;
      overflow-x: hidden;
    }
    body {
      font-family: 'Poppins', sans-serif;
    }
    .judul-elegan {
      font-family: 'Playfair Display', serif;
    }
    .group:hover .group-hover\:block {
      display: block;
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans flex flex-col min-h-screen">


<!-- HEADER + NAVBAR STABIL -->
<div class="w-full z-50 bg-white fixed top-0 left-0 right-0">
  <!-- Header -->
  <header class="bg-blue-900 text-white py-4 shadow w-full">
    <div class="container mx-auto px-4 flex items-center space-x-6">
      <img src="logo-lpmpp-unpatti.png" alt="Logo Unpatti" style="width: 50px; height: 50px;">
      <div>
        <h1 class="text-3xl font-bold leading-tight">LPMPP UNPATTI</h1>
        <p class="text-x leading-tight">Lembaga Penjaminan Mutu dan Pengembangan Pembelajaran Universitas Pattimura</p>
      </div>
    </div>
  </header>

  <!-- Navbar -->
  <nav class="bg-blue-100 text-blue-900">
    <div class="container mx-auto px-5 py-7 max-w-[1000px]">
      <div class="flex justify-between items-center w-full text-x font-bold space-x-6">


        <!-- BERANDA -->
        <a href="{{ route('beranda.lpmpp') }}"
          class="transition-colors duration-300 {{ request()->routeIs('beranda.lpmpp') ? 'text-blue-900 font-bold' : 'text-blue hover:underline' }}">
          Beranda
        </a>

        <!-- TENTANG -->
        <div class="relative group">
          <button class="hover:underline font-bold">Tentang</button>
          <div class="absolute left-0 top-full mt-0 w-64 bg-white text-blue-900 rounded shadow-lg hidden group-hover:block z-50 text-base font-bold text-x">
            <a href="{{ route('profil.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('profil.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Profil LPMPP Unpatti</a>
            <a href="{{ route('berita.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('berita.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Berita</a>
            <a href="{{ route('visi-misi-tujuan.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('visi-misi-tujuan.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Visi, Misi dan Tujuan</a>
            <a href="{{ route('sambutan.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('sambutan.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Sambutan Kepala LPMPP</a>
            <a href="{{ route('sejarah.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('sejarah.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Sejarah LPMPP</a>
            <a href="{{ route('struktur-organisasi.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('struktur-organisasi.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Struktur Organisasi</a>
          </div>
        </div>

        <!-- PUSAT- PUSAT -->
        <div class="relative group">
          <button class="hover:underline font-bold">Pusat LPMPP</button>
          <div class="absolute left-0 top-full mt-0 w-64 bg-white text-blue-900 rounded shadow-lg hidden group-hover:block z-50 text-base font-bold text-x">
              <a href="{{ route('pusat-penjaminan-mutu-akreditasi.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('pusat-penjaminan-mutu-akreditasi.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Pusat Penjaminan Mutu Akrditasi</a>
            <a href="{{ route('pusat-monev-pembelajaran.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('pusat-monev-pembelajaran.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Pusat Monev Pembelajaran</a>
            <a href="{{ route('pusat-pengembangan-kurikulum-dan-inovasi-pembelajaran.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('pusat-pengembangan-kurikulum-dan-inovasi-pembelajaran.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Pusat Pengembangan Kurikulum dan Inovasi Pembelajaran</a>
            <a href="{{ route('pusat-layanan-kinerja-diklat-dan-sertifikasi.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('pusat-layanan-kinerja-diklat-dan-sertifikasi.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Pusat Layanan Kinerja, Diklat dan Sertifikasi</a>
            <a href="{{ route('pusat-data-dan-sistem-informasi-pembelajaran.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('pusat-data-dan-sistem-informasi-pembelajaran.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Pusat Data dan Sistem IInformasi Pembelajaran</a>
          </div>
        </div>


        <!-- AKREDITASI -->
        <div class="relative group">
          <button class="hover:underline font-bold">Akreditasi</button>
          <div class="absolute left-0 top-full mt-0 w-64 bg-white text-blue-900 rounded shadow-lg hidden group-hover:block z-50 text-base font-bold text-x">
            <a href="{{ route('akreditasi-institusi.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('akreditasi-institusi.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Akreditasi Institusi</a>
            <a href="{{ route('akreditasi-program-studi.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('akreditasi-program-studi.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Akreditasi Program Studi</a>
          </div>
        </div>

        <!-- ARSIP -->
        <div class="relative group">
          <button class="hover:underline font-bold">Arsip</button>
          <div class="absolute left-0 top-full mt-0 w-64 bg-white text-blue-900 rounded shadow-lg hidden group-hover:block z-50 text-base font-bold text-x">
            <a href="{{ route('arsip-ami.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('arsip-ami.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Arsip AMI</a>
            <a href="{{ route('arsip-spmi.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('arsip-spmi.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Arsip SPMI</a>
            <a href="{{ route('arsip-pelatihan.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('arsip-pelatihan.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Arsip Pelatihan</a>
            <a href="{{ route('arsip-pembelajaran.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('arsip-pembelajaran.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Arsip Pembelajarann</a>
         
          </div>
        </div>

        <!-- LAYANAN -->
        <div class="relative group">
          <button class="hover:underline font-bold">Layanan</button>
          <div class="absolute left-0 top-full mt-0 w-64 bg-white text-blue-900 rounded shadow-lg hidden group-hover:block z-50 text-base font-bold text-x">
            <a href="{{ route('pendampingan-akreditasi.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('pendampingan-akreditasi.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Pendampingan Akreditasi</a>
            <a href="{{ route('pelatihan-pekerti.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('pelatihan-pekerti.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Pelatihan Pekerti</a>
            <a href="{{ route('pelatihan-aa.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('pelatihan-aa.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Pelatihan Applied Approach ( AA )</a>
  
          </div>
        </div>

        <!-- DOKUMEN -->
        <div class="relative group">
          <button class="hover:underline font-bold">Dokumen</button>
          <div class="absolute left-0 top-full mt-0 w-64 bg-white text-blue-900 rounded shadow-lg hidden group-hover:block z-50 text-base font-bold text-x">
            <a href="{{ route('pedoman-akreditasi.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('pedoman-akreditasi.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Pedoman Akreditasi</a>
            <a href="{{ route('hasil-survey.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('hasil-survey.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Hasil Survey</a>
            <a href="{{ route('galery.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('galery.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Galery</a>
  
          </div>
        </div>

          <!-- Pilihan Bahasa -->
          <select class="bg-blue-100 border border-blue-300 text-blue-900 rounded px-2 py-1 text-sm">
            <option value="id">ID</option>
            <option value="en">EN</option>
          </select>
        </div>


      </div>
    </div>
  </nav>
</div>

<!-- SPASI UNTUK MENDORONG KONTEN DI BAWAHNYA -->
<div class="h-[185px]"></div>



<!-- BACKGROUND -->

<main class="flex-grow font-['Poppins']">
  <!-- Background Section -->


    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Struktur Organisasi LPMPP Unpatti</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        <style>
            /* Supaya konten tabel turun, tidak ketutupan navbar */
            main {
                padding-top: 130px;
            }

            /* Tampilan tabel */
            table {
                border-collapse: collapse;
                width: 100%;
            }

            /* Kop tabel */
            thead th {
                background-color: #1e3a8a;
                color: white;
                padding: 12px;
                font-weight: bold;
                font-size: 16px;
                text-transform: uppercase;
                border: 2px solid #1e3a8a;
                text-align: center;
            }

            /* Sel tabel */
            td {
                padding: 12px;
                border: 1px solid #1e3a8a;
                color: black;
            }

            /* Baris tabel selang-seling */
            tbody tr:nth-child(odd) {
                background-color: #e0f2fe;
            }

            tbody tr:nth-child(even) {
                background-color: #f3f4f6;
            }

            /* Efek hover */
            tbody tr:hover {
                background-color: #bfdbfe;
                cursor: pointer;
            }

            /* NIP warna biru muda */
            .nip {
                font-size: 14px;
                color: #01040aff;
            }
        </style>
    </head>
    <body class="bg-gray-100">




<!-- GALERI LPMPP PER PRODI -->
        <main class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-blue-900 mb-6 text-center">
                GALERI KEGIATAN LPMPP
            </h2>

<div class="container mx-auto px-6 mt-24">


  <!-- Pilih Prodi -->
  <div class="mb-6">
    <label for="prodi" class="block mb-2 font-semibold text-gray-700">Pilih Galeri:</label>
    <select id="prodi" class="border border-gray-300 rounded-lg p-3 w-full focus:ring-2 focus:ring-blue-500">
      <option value="">-- Pilih Galeri --</option>
      <option value="lpmpp">Kegiatan LPMPP</option>
      <option value="SI">Akreditasi Program Studi</option>
      <option value="MI">Kegiatan Lainnya</option>
    </select>
  </div>

  <!-- Pilih Tahun -->
  <div id="tahun-container" class="mb-6 hidden">
    <label for="tahun" class="block mb-2 font-semibold text-gray-700">Pilih Tahun:</label>
    <select id="tahun" class="border border-gray-300 rounded-lg p-3 w-full focus:ring-2 focus:ring-green-500">
      <option value="">-- Pilih Tahun --</option>
      <option value="2025">2025</option>
      <option value="2024">2024</option>
      <option value="2023">2023</option>
    </select>
  </div>

  <!-- Galeri -->
  <div id="galeri" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 hidden">
    <!-- Foto/Video akan masuk lewat JS -->
  </div>
</div>

<!-- Modal Viewer -->
<div id="modal" class="fixed inset-0 bg-black bg-opacity-70 hidden flex items-center justify-center z-50">
  <span id="closeModal" class="absolute top-4 right-6 text-white text-3xl cursor-pointer">&times;</span>
  <div id="modalContent" class="max-w-4xl max-h-[80vh] p-4"></div>
</div>

<script>
  const prodiSelect = document.getElementById("prodi");
  const tahunContainer = document.getElementById("tahun-container");
  const tahunSelect = document.getElementById("tahun");
  const galeri = document.getElementById("galeri");
  const modal = document.getElementById("modal");
  const modalContent = document.getElementById("modalContent");
  const closeModal = document.getElementById("closeModal");

  // Data simulasi
  const dataGaleri = {
    lpmpp: {
      2023: [
        { type: "foto", src: "/images/2023-ti-1.jpeg", alt: "lpmpp" }
      ],
      2024: [
        { type: "foto", src: "/images/2024-ti-1.jpeg", alt: "lpmpp" }
      ],
      2025: [
        { type: "video", src: "/images/video-2025-1.mp4", alt: "Video Kegiatan Lokakarya" },
        { type: "video", src: "/images/video-2025-2.mp4", alt: "Video Kegiatan Lokakarya" },
        { type: "foto", src: "/images/2025-1.jpeg", alt: "Kegiatan Lokakarya" },
        { type: "foto", src: "/images/2025-2.jpeg", alt: "Kegiatan Lokakarya" },
        { type: "foto", src: "/images/2025-3.jpeg", alt: "Kegiatan Lokakarya" },
        { type: "foto", src: "/images/2025-5.jpeg", alt: "Kegiatan Lokakarya" },
        { type: "foto", src: "/images/2025-6.jpeg", alt: "Kegiatan Lokakarya" },
        { type: "foto", src: "/images/2025-7.jpeg", alt: "Kegiatan Lokakarya" },
        { type: "foto", src: "/images/2025-8.jpeg", alt: "Kegiatan Lokakarya" },
        { type: "foto", src: "/images/2025-9.jpeg", alt: "Kegiatan Lokakarya" },
        { type: "foto", src: "/images/2025-10.jpeg", alt: "Kegiatan Lokakarya" },
        { type: "foto", src: "/images/2025-11.jpeg", alt: "Kegiatan Lokakarya" },
        { type: "foto", src: "/images/2025-12.jpeg", alt: "Kegiatan Lokakarya" },
        { type: "foto", src: "/images/2025-13.jpeg", alt: "Kegiatan Lokakarya" },
        { type: "foto", src: "/images/2025-14.jpeg", alt: "Kegiatan Lokakarya" },


        { type: "foto", src: "/images/buku-ajar1.JPG", alt: "Kegiatan Pelatihan Penulisan Buku Ajar" },
        { type: "foto", src: "/images/buku-ajar2.JPG", alt: "Kegiatan Pelatihan Penulisan Buku Ajar" },
        { type: "foto", src: "/images/buku-ajar3.JPG", alt: "Kegiatan Pelatihan Penulisan Buku Ajar" },
        { type: "foto", src: "/images/buku-ajar4.JPG", alt: "Kegiatan Pelatihan Penulisan Buku Ajar" },
        { type: "foto", src: "/images/buku-ajar5.JPG", alt: "Kegiatan Pelatihan Penulisan Buku Ajar" },
        { type: "foto", src: "/images/buku-ajar6.JPG", alt: "Kegiatan Pelatihan Penulisan Buku Ajar" },
        { type: "foto", src: "/images/buku-ajar7.JPG", alt: "Kegiatan Pelatihan Penulisan Buku Ajar" },
        { type: "foto", src: "/images/buku-ajar8.JPG", alt: "Kegiatan Pelatihan Penulisan Buku Ajar" },
        { type: "foto", src: "/images/buku-ajar9.JPG", alt: "Kegiatan Pelatihan Penulisan Buku Ajar" }
      
 

      ]
    },
    SI: {
      2023: [
        { type: "foto", src: "/images/2023-si-1.jpeg", alt: "lpmpp" }
      ],
      2025: [
        { type: "foto", src: "/images/2025-si-1.jpeg", alt: "lpmpp" }
      ]
    },
    MI: {
      2024: [
        { type: "video", src: "/videos/2024-mi-1.mp4", alt: "lpmpp" }
      ],
      2025: [
        { type: "foto", src: "/images/2025-mi-1.jpeg", alt: "lpmpp" }
      ]
    }
  };

  // Saat pilih Prodi
  prodiSelect.addEventListener("change", () => {
    tahunSelect.value = "";
    galeri.innerHTML = "";
    galeri.classList.add("hidden");

    if (prodiSelect.value) {
      tahunContainer.classList.remove("hidden");
    } else {
      tahunContainer.classList.add("hidden");
    }
  });

  // Saat pilih Tahun
  tahunSelect.addEventListener("change", () => {
    galeri.innerHTML = "";
    if (tahunSelect.value && prodiSelect.value) {
      const items = dataGaleri[prodiSelect.value][tahunSelect.value] || [];
      items.forEach(item => {
        const card = document.createElement("div");
        card.className = "bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition cursor-pointer";

        let media;
        if (item.type === "foto") {
          media = document.createElement("img");
          media.src = item.src;
          media.alt = item.alt;
          media.className = "w-full h-48 object-cover";
        } else if (item.type === "video") {
          media = document.createElement("video");
          media.src = item.src;
          media.controls = true;
          media.className = "w-full h-48 object-cover";
        }

        // Klik buka modal
        media.addEventListener("click", () => openModal(item));

        const caption = document.createElement("div");
        caption.className = "p-3 text-center text-gray-700 text-sm font-medium";
        caption.textContent = item.alt;

        card.appendChild(media);
        card.appendChild(caption);
        galeri.appendChild(card);
      });
      galeri.classList.remove("hidden");
    } else {
      galeri.classList.add("hidden");
    }
  });

  // Modal functions
  function openModal(item) {
    modalContent.innerHTML = "";
    let element;
    if (item.type === "foto") {
      element = document.createElement("img");
      element.src = item.src;
      element.alt = item.alt;
      element.className = "max-h-[80vh] mx-auto rounded-lg";
    } else if (item.type === "video") {
      element = document.createElement("video");
      element.src = item.src;
      element.controls = true;
      element.autoplay = true;
      element.className = "max-h-[80vh] mx-auto rounded-lg";
    }
    modalContent.appendChild(element);
    modal.classList.remove("hidden");
  }

  closeModal.addEventListener("click", () => {
    modal.classList.add("hidden");
    modalContent.innerHTML = "";
  });

  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.classList.add("hidden");
      modalContent.innerHTML = "";
    }
  });
</script>





<!-- Pagination -->
<div class="flex justify-center items-center mt-4 space-x-4 mb-10">
  <button id="prevBtn" class="px-4 py-2 bg-blue-500 text-white rounded disabled:opacity-50">Previous</button>
  <span id="pageInfo" class="text-black"></span>
  <button id="nextBtn" class="px-4 py-2 bg-blue-500 text-white rounded">Next</button>
</div>


<script>
const table = document.getElementById("dokumenTable");
const rows = Array.from(table.querySelectorAll("tbody tr"));
const rowsPerPage = 20; // maksimal 20 data per halaman
let currentPage = 1;

const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const pageInfo = document.getElementById("pageInfo");
const searchInput = document.getElementById("searchInput");

function displayRows() {
  const filter = searchInput.value.toLowerCase();
  const filteredRows = rows.filter(row => row.textContent.toLowerCase().includes(filter));
  const totalPages = Math.ceil(filteredRows.length / rowsPerPage);

  // sembunyikan semua dulu
  rows.forEach(row => row.style.display = "none");

  // tampilkan baris sesuai halaman
  const start = (currentPage - 1) * rowsPerPage;
  const end = start + rowsPerPage;
  filteredRows.slice(start, end).forEach(row => row.style.display = "");

  pageInfo.textContent = `Halaman ${currentPage} dari ${totalPages || 1}`;

  prevBtn.disabled = currentPage === 1;
  nextBtn.disabled = currentPage >= totalPages || totalPages === 0;
}

prevBtn.addEventListener("click", () => {
  if (currentPage > 1) {
    currentPage--;
    displayRows();
  }
});

nextBtn.addEventListener("click", () => {
  const filter = searchInput.value.toLowerCase();
  const filteredRows = rows.filter(row => row.textContent.toLowerCase().includes(filter));
  const totalPages = Math.ceil(filteredRows.length / rowsPerPage);

  if (currentPage < totalPages) {
    currentPage++;
    displayRows();
  }
});

searchInput.addEventListener("keyup", () => {
  currentPage = 1;
  displayRows();
});

// tampilkan halaman pertama saat load
displayRows();
</script>


  </section>
</main>






<!-- Footer -->

<section class="bg-blue-100 pt-12 pb-4 w-full">
  <!-- Garis Pemisah Hitam Atas Hanya Sepanjang Konten -->
  <div class="max-w-7xl mx-auto px-4">


    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10">


<!-- Logo Di Footer-->

<!-- Pastikan Font Awesome aktif -->
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1B0X1j5nq4ZXz1F1ZWj7l9lRxZV2p5zCq3XUZ2kHk5Y7lD7jw1y7FqkU8mD8KxYdg=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>

<!-- Logo LPMPP -->
<div class="widget footer-widget">
  <h5 class="widget-title text-blue-900 text-xl font-bold mb-6 border-b-2 border-blue-400 pb-2">
    Logo
  </h5>

  <!-- Logo LPMPP dengan efek zoom -->
  <div class="flex flex-col items-center justify-center mb-4">
    <img
      src="/images/logolpmpp.png"
      alt="Logo LPMPP"
      class="w-28 sm:w-32 transition-transform duration-500 ease-in-out hover:scale-110"
    />
  </div>

  <!-- Teks Logo -->
  <ul class="footer-widget-list space-y-3 text-center">
    <li>
      <a
        href="#"
        class="text-black font-semibold hover:text-blue-500 transition duration-300 inline-flex items-center gap-3"
      >
        <i class="fas fa-arrow-circle-right text-blue-500 text-lg"></i>
        LPMPP Universitas Pattimura
      </a>
    </li>
  </ul>
</div>



<!-- Buletin -->
<div class="widget footer-widget">
  <h5 class="widget-title text-blue-900 text-xl font-bold mb-6 border-b-2 border-blue-400 pb-2">
    Buletin
  </h5>
  <ul class="footer-widget-list space-y-3">
    <li>
      <a 
        href="#" 
        class="text-black font-semibold hover:text-blue-500 transition duration-300 flex gap-3 items-start"
        style="text-align: justify;"
      >
        <i class="fas fa-arrow-circle-right text-blue-500 mt-1"></i>
        <span>
          LPMPP Universitas Pattimura terus berkomitmen untuk meningkatkan kualitas pendidikan 
          melalui penguatan sistem penjaminan mutu internal, pengembangan pembelajaran inovatif, 
          dan peningkatan akreditasi program studi.
        </span>
      </a>
    </li>
  </ul>
</div>



<!-- Tautan Penting -->
<div class="widget footer-widget">
  <h5 class="widget-title text-blue-900 text-xl font-bold mb-6 border-b-2 border-blue-400 pb-2">
    Tautan Penting
  </h5>
  <ul class="footer-widget-list space-y-3">
    <li>
      <a href="#" class="text-black font-semibold hover:text-blue-500 transition duration-300 flex items-center gap-3">
        <i class="fas fa-arrow-circle-right text-blue-500"></i> PORTAL WEB UNPATTI
      </a>
    </li>
    <li>
      <a href="#" class="text-black font-semibold hover:text-blue-500 transition duration-300 flex items-center gap-3">
        <i class="fas fa-arrow-circle-right text-blue-500"></i> LAMSAMA
      </a>
    </li>
    <li>
      <a href="#" class="text-black font-semibold hover:text-blue-500 transition duration-300 flex items-center gap-3">
        <i class="fas fa-arrow-circle-right text-blue-500"></i> LAMINFOKOM
      </a>
    </li>
    <li>
      <a href="#" class="text-black font-semibold hover:text-blue-500 transition duration-300 flex items-center gap-3">
        <i class="fas fa-arrow-circle-right text-blue-500"></i> LAMDIK
      </a>
    </li>
    <li>
      <a href="#" class="text-black font-semibold hover:text-blue-500 transition duration-300 flex items-center gap-3">
        <i class="fas fa-arrow-circle-right text-blue-500"></i> LAMEMBA
      </a>
    </li>
    <li>
      <a href="#" class="text-black font-semibold hover:text-blue-500 transition duration-300 flex items-center gap-3">
        <i class="fas fa-arrow-circle-right text-blue-500"></i> BAN-PT
      </a>
    </li>

  </ul>
</div>



<!-- Kontak Kami -->


<div class="widget footer-widget">
  <h5 class="widget-title text-blue-900 text-xl font-bold mb-6 border-b-2 border-blue-400 pb-2">
    Kontak Kami
  </h5>
  <ul class="footer-widget-list space-y-3">
    <li>
      <a href="#" class="text-black font-semibold hover:text-blue-500 transition duration-300 flex items-center gap-3">
        <i class="fas fa-arrow-circle-right text-blue-500"></i> Jl. Ir. M. Putuhena, Kampus Poka, Kota Ambon, 97233, Indonesia
      </a>
    </li>
    <li>
      <a href="#" class="text-black font-semibold hover:text-blue-500 transition duration-300 flex items-center gap-3">
        <i class="fas fa-arrow-circle-right text-blue-500"></i> Telp: +62 251 2345678
      </a>
    </li>
    <li>
      <a href="#" class="text-black font-semibold hover:text-blue-500 transition duration-300 flex items-center gap-3">
        <i class="fas fa-arrow-circle-right text-blue-500"></i> Email: lpmpp@unpatti.ac.id
      </a>

  </ul>
</div>

</section>


<!-- Footer -->
<footer class="bg-blue-900 text-white py-4">
  <div class="container mx-auto text-center font-semibold">
    <p>Lembaga Penjaminan Mutu dan Pengembangan Pembelajaran</p>
  </div>
  <div class="container mx-auto text-center font-semibold">  
    <p>Universitas Pattimura</p>
    <p>Copyright &copy; 2025 </p>
  </div>
</footer>