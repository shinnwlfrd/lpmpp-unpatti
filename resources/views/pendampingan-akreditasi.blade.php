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


    
<main class="flex-grow font-['Poppins'] pt-36 bg-gradient-to-b from-white via-blue-50 to-white">
  <!-- Konten Pendampingan Akreditasi -->
  <div class="flex items-center justify-center px-6 py-16 text-blue-900">
    <div class="max-w-5xl w-full space-y-12">

      <!-- Judul Halaman -->
      <h1 class="text-3xl md:text-4xl font-extrabold mb-10 text-center tracking-wide">
        Pendampingan Akreditasi
      </h1>

      <!-- Tentang -->
      <section>
        <h2 class="text-2xl font-bold mb-3 border-l-4 border-blue-600 pl-3"> Tentang Pendampingan</h2>
        <p class="text-lg leading-relaxed">
          LPMPP Universitas Pattimura memfasilitasi program studi dan unit kerja dalam mempersiapkan 
          serta meningkatkan mutu akreditasi. Pendampingan dilakukan melalui klinik akreditasi, 
          workshop, serta bimbingan teknis penyusunan dokumen LED dan LKPS.
        </p>
      </section>

      <!-- Panduan & Regulasi -->
      <section>
        <h2 class="text-2xl font-bold mb-3 border-l-4 border-blue-600 pl-3"> Panduan & Regulasi</h2>
        <ul class="list-disc pl-6 space-y-2 text-lg">
          <li><a href="#" class="hover:text-blue-900 hover:underline transition">Panduan Akreditasi BAN-PT</a></li>
          <li><a href="#" class="hover:text-blue-900 hover:underline transition">Panduan Akreditasi LAM (Kesehatan, Teknik, Ekonomi, dll.)</a></li>
          <li><a href="#" class="hover:text-blue-900 hover:underline transition">SOP Pendampingan Akreditasi LPMPP</a></li>
        </ul>
      </section>

      <!-- Layanan -->
      <section>
        <h2 class="text-2xl font-bold mb-3 border-l-4 border-blue-600 pl-3"> Layanan & Alur Pendampingan</h2>
        <p class="text-lg mb-4">
          Layanan pendampingan yang dapat diakses oleh program studi antara lain:
        </p>
        <div class="grid md:grid-cols-2 gap-6">
          <div class="p-5 bg-blue-50 rounded-xl shadow hover:shadow-lg transition">
            <h3 class="font-bold text-xl mb-2 text-blue-700">Klinik Akreditasi</h3>
            <p>Penyusunan dan review dokumen LED & LKPS bersama tim pendamping.</p>
          </div>
          <div class="p-5 bg-indigo-50 rounded-xl shadow hover:shadow-lg transition">
            <h3 class="font-bold text-xl mb-2 text-indigo-700">Workshop Borang</h3>
            <p>Pelatihan penyusunan instrumen akreditasi terbaru sesuai standar BAN-PT/LAM.</p>
          </div>
          <div class="p-5 bg-purple-50 rounded-xl shadow hover:shadow-lg transition">
            <h3 class="font-bold text-xl mb-2 text-purple-700">Simulasi Asesmen</h3>
            <p>Simulasi asesmen lapangan untuk persiapan akreditasi program studi dan institusi.</p>
          </div>
          <div class="p-5 bg-pink-50 rounded-xl shadow hover:shadow-lg transition">
            <h3 class="font-bold text-xl mb-2 text-pink-700">Formulir Permohonan</h3>
            <a href="#" class="text-pink-700 hover:text-pink-900 hover:underline">
              Ajukan permohonan pendampingan →
            </a>
          </div>
        </div>
      </section>


    </div>
  </div>
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