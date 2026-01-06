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
            <a href="{{ route('berita.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('berita.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Pusat Monev Pembelajaran</a>
            <a href="{{ route('visi-misi-tujuan.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('visi-misi-tujuan.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Pusat Pengembangan Kurikulum dan Inovasi Pembelajaran</a>
            <a href="{{ route('sambutan.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('sambutan.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Pusat Layanan Kinerja, Diklat dan Sertifikasi</a>
            <a href="{{ route('sejarah.lpmpp') }}" class="block px-4 py-2 hover:bg-blue-200 {{ request()->routeIs('sejarah.lpmpp') ? 'bg-blue-200 font-semibold' : '' }}">Pusat Data dan Sistem IInformasi Pembelajaran</a>
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
       <a href="{{ route('dokumen.lpmpp') }}"
          class="transition-colors duration-300 {{ request()->routeIs('dokumen.lpmpp') ? 'text-blue-900 font-bold' : 'text-blue hover:underline' }}">
          Dokumen
        </a>

          <div class="flex items-center space-x-4 ml-6">
          <!-- Search -->
          <button class="p-2 rounded-full hover:bg-blue-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
            </svg>
          </button>

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




<!-- ISI BERITA -->
  <a href="{{ route('detail-berita-3.lpmpp') }}" ></a>
<main class="container mx-auto px-5 lg:px-20 pt-32 pb-24 bg-gray-50 min-h-[calc(100vh-200px)]">
   <div class="pt-40 flex justify-center">

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
        
        <!-- KONTEN UTAMA -->
<article class="lg:col-span-2 bg-white rounded-2xl shadow-lg p-8 transition duration-500 hover:shadow-xl">

  <!-- Gambar Utama -->
  <div class="mb-6 relative group overflow-hidden rounded-xl shadow-lg">
    <img src="{{ asset('images/pelatihan-buku-ajar2.jpg') }}"
        alt="Pelatihan Pembuatan Buku Ajar"
        class="w-full max-h-[450px] object-cover rounded-xl transform transition-transform duration-700 ease-in-out group-hover:scale-110">
    
    <!-- Label tanggal -->
    <span class="absolute bottom-3 left-3 bg-blue-800 text-white text-xs font-semibold px-4 py-1 rounded-full shadow-md">
      27 Agustus 2025
    </span>
  </div>

  <!-- Judul -->
  <h1 class="text-4xl font-extrabold text-gray-800 mb-5 leading-snug tracking-tight judul-elegan">
    Workshop Penjaminan Mutu Internal
  </h1>

  <!-- Isi Berita -->
  <div class="text-gray-700 text-lg leading-relaxed text-justify space-y-5">
    <p>
      LPMPP Universitas Pattimura menyelenggarakan 
      <span class="font-semibold">Pelatihan Pembuatan Buku Ajar</span> 
      pada <strong>30 Mei 2025</strong> bertempat di Aula LPMPP. 
      Kegiatan ini bertujuan untuk meningkatkan kompetensi dosen dalam 
      menyusun buku ajar yang sesuai dengan standar nasional pendidikan tinggi.
    </p>
    <p>
      Dalam pelatihan ini, para peserta dibekali dengan materi penyusunan struktur buku,
      teknik penulisan materi sesuai capaian pembelajaran, serta penggunaan referensi ilmiah yang relevan.
      Narasumber juga memaparkan pentingnya menulis buku ajar yang menarik dan sesuai kaidah akademik.
    </p>
    <p>
      Dengan terselenggaranya kegiatan ini, diharapkan dosen-dosen Universitas Pattimura semakin produktif
      dalam menghasilkan buku ajar berkualitas sehingga dapat meningkatkan mutu pembelajaran.
    </p>
  </div>
<div class="mb-6 relative group overflow-hidden rounded-xl shadow-lg">
    <img src="{{ asset('images/pelatihan-buku-ajar1.jpg') }}"
        alt="Pelatihan Pembuatan Buku Ajar"
        class="w-full max-h-[450px] object-cover rounded-xl transform transition-transform duration-700 ease-in-out group-hover:scale-110">
    
    <!-- Label tanggal -->
    <span class="absolute bottom-3 left-3 bg-blue-800 text-white text-xs font-semibold px-4 py-1 rounded-full shadow-md">
      27 Agustus 2025
    </span>
  </div>

<div class="mb-6 relative group overflow-hidden rounded-xl shadow-lg">
    <img src="{{ asset('images/pelatihan-buku-ajar3.jpg') }}"
        alt="Pelatihan Pembuatan Buku Ajar"
        class="w-full max-h-[450px] object-cover rounded-xl transform transition-transform duration-700 ease-in-out group-hover:scale-110">
    
    <!-- Label tanggal -->
    <span class="absolute bottom-3 left-3 bg-blue-800 text-white text-xs font-semibold px-4 py-1 rounded-full shadow-md">
      27 Agustus 2025
    </span>
  </div>




  <!-- Penulis Berita -->
  <div class="flex items-center mt-10 p-5 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl shadow-sm hover:shadow-md transition duration-300">
    <img src="{{ asset('images/logolpmpp.png') }}" 
        alt="Penulis" 
        class="w-16 h-16 rounded-full shadow-md border-2 border-blue-600">
    <div class="ml-5">
      <p class="text-gray-700 font-semibold">Ditulis oleh:</p>
      <p class="text-blue-700 font-bold text-lg">Admin LPMPP Universitas Pattimura</p>
      <p class="text-gray-500 text-sm">Diterbitkan pada 27 Agustus 2025</p>
    </div>
  </div>
</article>

<!-- SIDEBAR -->
<aside class="space-y-8">
  <!-- Pencarian Berita -->
  <div class="bg-white p-5 rounded-xl shadow-md">
    <h3 class="text-lg font-bold text-gray-800 mb-3">Cari Berita</h3>
    <form action="{{ route('berita.lpmpp') }}" method="GET" class="flex">
      <input type="text" 
            name="q" 
            placeholder="Cari berita..."
            class="w-full border border-gray-300 rounded-l-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600">
      <button type="submit" 
              class="bg-blue-700 text-white px-5 py-2 rounded-r-lg hover:bg-blue-800 transition">
        <svg xmlns="http://www.w3.org/2000/svg" 
            fill="none" 
            viewBox="0 0 24 24" 
            stroke-width="2" 
            stroke="currentColor" 
            class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
        </svg>
      </button>
    </form>
  </div>

  <!-- Berita Lainnya -->
  <div class="bg-white p-5 rounded-xl shadow-md">
    <h3 class="text-lg font-bold text-gray-800 mb-4">Berita Lainnya</h3>
    <ul class="space-y-4">
      <li>
        <a href="{{ route('detail-berita-3.lpmpp') }}" class="group flex items-start gap-3 hover:text-blue-700 transition">
          <div class="overflow-hidden rounded-lg">
            <img src="{{ asset('images/logolpmpp.png') }}" 
                class="w-16 h-16 rounded-lg object-cover shadow transform transition-transform duration-500 ease-in-out group-hover:scale-110" 
                alt="Workshop SPMI">
          </div>
          <div>
            <p class="font-semibold group-hover:underline">Workshop Sistem Penjaminan Mutu Internal</p>
            <p class="text-gray-500 text-xs">28 Mei 2025</p>
          </div>
        </a>
      </li>
      <li>
        <a href="{{ route('detail-berita-4.lpmpp') }}" class="group flex items-start gap-3 hover:text-blue-700 transition">
          <div class="overflow-hidden rounded-lg">
            <img src="{{ asset('images/logolpmpp.png') }}" 
                class="w-16 h-16 rounded-lg object-cover shadow transform transition-transform duration-500 ease-in-out group-hover:scale-110" 
                alt="Pelatihan Akreditasi">
          </div>
          <div>
            <p class="font-semibold group-hover:underline">Pendampingan Akrediasi Program Studi</p>
            <p class="text-gray-500 text-xs">25 Mei 2025</p>
          </div>
        </a>
      </li>
      <li>
        <a href="{{ route('detail-berita-2.lpmpp') }}" class="group flex items-start gap-3 hover:text-blue-700 transition">
          <div class="overflow-hidden rounded-lg">
            <img src="{{ asset('images/logolpmpp.png') }}" 
                class="w-16 h-16 rounded-lg object-cover shadow transform transition-transform duration-500 ease-in-out group-hover:scale-110" 
                alt="Pelatihan OBE">
          </div>
          <div>
            <p class="font-semibold group-hover:underline">Pelatihan Penyusunan Kurikulum OBE</p>
            <p class="text-gray-500 text-xs">20 Mei 2025</p>
          </div>
        </a>
      </li>
    </ul>
  </div>
</aside>


      </div>
   </div>
</main>








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