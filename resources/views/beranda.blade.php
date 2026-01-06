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

<!-- Konten Utama -->
<main class="flex-grow font-['Poppins']">

  <!-- Hero Section -->
  <section class="relative w-full h-screen bg-cover bg-center"
           style="background-image: url('{{ asset('images/bg-pattimura.jpg') }}'); background-size: cover;">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-blue-800 opacity-90 z-10 pointer-events-none"></div>

    <!-- Konten Tengah -->
    <div class="relative z-20 flex flex-col items-center justify-center h-full text-center px-4">

      <!-- Logo -->
      <img src="/images/logolpmpp.png"
           alt="Logo Universitas Pattimura"
           class="transition-transform duration-500 ease-in-out w-24 sm:w-28 md:w-30 lg:w-28 xl:w-36
                  mb-4 drop-shadow-[0_8px_15px_rgba(0,0,0,0.3)]
                  hover:scale-105
                  rounded-xl
                  animate-fade-in
                  bg-gradient-to-br from-white/60 to-white/10 backdrop-blur-sm p-2 mx-auto" />

      <!-- Judul Utama -->
      <h1 class="text-4xl sm:text-5xl md:text-7xl lg:text-8xl font-bold glow-text animate-bounce-slow font-['Playfair_Display'] leading-tight mb-4"
          style="color: #FFD700;">
        LPMPP UNPATTI
      </h1>

      <!-- Subjudul 2 baris -->
      <h1 class="text-base sm:text-lg md:text-xl font-semibold text-white drop-shadow-md animate-fade-in leading-snug max-w-[28ch] mb-1">
        Selamat Datang di Website Resmi Lembaga Penjaminan Mutu dan Pengembangan
      </h1>
      <h1 class="text-base sm:text-lg md:text-xl font-semibold text-white drop-shadow-md animate-fade-in leading-snug max-w-[28ch]">
        Pembelajaran (LPMPP) Universitas Pattimura Ambon
      </h1>

    </div>

  </section>

</main>

<style>
@keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}
.animate-fade-in { animation: fadeIn 1s ease-out forwards; }

@keyframes bounceSlow {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}
.animate-bounce-slow { animation: bounceSlow 2s infinite; }
</style>






<!-- Informasi Penting dengan Nuansa Merah -->
<section class="container mx-auto px-4 pt-10 pb-4">
  <div class="bg-red-100 border-l-8 border-red-600 p-6 rounded-xl shadow-md relative overflow-hidden">

    <!-- Label Atas -->
    <div class="absolute top-0 left-0 bg-red-600 text-white text-sm font-semibold px-4 py-1 rounded-br-xl animate-pulse">
      📢 Informasi Penting
    </div>

    <!-- Judul + Countdown -->
    <div class="flex items-center justify-between flex-wrap gap-4">
      <h3 class="text-xl font-bold text-red-800">Audit Mutu Internal (AMI) 2025</h3>
      <div class="bg-white rounded-lg px-4 py-2 shadow font-mono text-red-700 text-sm">
        Mulai dalam: <span id="countdown" class="font-bold"></span>
      </div>
    </div>

    <!-- Isi Informasi -->
    <ul class="list-disc list-inside text-gray-800 mt-4 space-y-2">
      <li><strong>Batas unggah dokumen akreditasi:</strong> <span class="text-red-600 font-semibold">20 Agustus 2025</span></li>
      <li><strong>Unduh pedoman dan format:</strong> 
        <a href="#" class="text-blue-700 hover:underline">Pedoman AMI 2025</a> | 
        <a href="#" class="text-blue-700 hover:underline">Laporan Kinerja</a>
      </li>
      <li><strong>Kontak bantuan:</strong> lpmp@unpatti.ac.id / +62-812-xxxx-xxxx</li>
    </ul>

    <!-- Tombol Interaktif -->
    <div class="mt-4">
      <button onclick="document.getElementById('more-info').classList.toggle('hidden')" 
              class="text-sm text-blue-700 font-semibold hover:underline">
        🔍 Lihat Informasi Tambahan
      </button>
      <div id="more-info" class="hidden mt-2 text-sm text-gray-700">
        📌 Mohon pastikan semua dokumen telah diperiksa sesuai dengan format terbaru. Sertakan bukti kegiatan evaluasi diri dan rencana tindak lanjut.
      </div>
    </div>

  </div>
</section>

<!-- Script Countdown -->
<script>
  const targetDate = new Date("2025-08-10T00:00:00").getTime();
  const countdownEl = document.getElementById("countdown");

  setInterval(() => {
    const now = new Date().getTime();
    const distance = targetDate - now;

    if (distance < 0) {
      countdownEl.innerHTML = "Sedang berlangsung!";
      return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance / (1000 * 60 * 60)) % 24);
    const minutes = Math.floor((distance / (1000 * 60)) % 60);

    countdownEl.innerHTML = `${days}h ${hours}j ${minutes}m`;
  }, 1000);
</script>


<!-- Konten Sambutan Kepala LPMPP -->

<style>
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .animate-fadeIn {
    animation: fadeIn 2s ease-out;
  }

  /* Bingkai 3D Modern */
  .frame-3d {
    background: rgba(255, 255, 255, 0.75);
    backdrop-filter: blur(12px);
    border-radius: 1.5rem;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    border: 2px solid rgba(0, 122, 255, 0.2);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    transform-style: preserve-3d;
  }

  /* Efek hover zoom-in */
  .frame-3d:hover {
    transform: scale(1.05);
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.25);
  }
</style>

<main class="flex-grow font-sans bg-gradient-to-br from-blue-50 to-white">
  <section class="py-16">
    <div class="container mx-auto px-4">

      <!-- Bingkai 3D -->
      <div class="frame-3d p-8 md:flex md:items-center md:gap-12 animate-fadeIn">

        <!-- Kolom Gambar Kepala LPMPP -->
        <div class="md:w-1/3 mb-8 md:mb-0 relative fade-in-right perspective">
          <img src="{{ asset('images/kepalaLPMPP.jpg') }}" alt="Kepala LPMPP" 
              class="rounded-2xl w-80 md:w-96 h-auto border-4 border-blue-200 shadow-lg mx-auto transition-transform transition-shadow duration-500 ease-in-out transform hover:scale-105 hover:shadow-2xl">
        </div>

        <!-- Kolom Sambutan -->
        <div class="md:w-2/3 fade-in-left space-y-4 text-gray-800">

          <h2 class="text-4xl md:text-4xl font-bold text-blue-900 mb-4">
            <span class="text-blue-500">Sambutan</span> Kepala LPMPP Universitas Pattimura
          </h2>
          <p class="text-lg leading-relaxed text-justify">
            <strong class="text-black">Selamat Datang di Website LPMPP Universitas Pattimura</strong>
          </p>
          
          <p class="text-lg leading-relaxed text-justify">
            Website ini hadir sebagai sumber informasi dan layanan bagi sivitas akademika dan masyarakat, dengan fokus pada kolaborasi dan evaluasi berkelanjutan.
          </p>
          <p class="text-lg leading-relaxed text-justify">
            Terima kasih atas kunjungan Anda. Semoga website ini dapat memberikan manfaat dan kemudahan dalam mengakses informasi yang dibutuhkan.
          </p>

          <a href="{{ route('struktur-organisasi.lpmpp') }}" class="inline-block mt-4 px-6 py-2 bg-blue-600 text-white font-medium rounded-lg shadow-md hover:bg-blue-700 transition-colors duration-300">
            Dr. James Abrahamsz M.Si
          </a>
        </div>

      </div>
      <!-- Akhir Bingkai 3D -->   

    </div>
  </section>
</main>

<script>
  // Intersection Observer untuk animasi masuk
  document.addEventListener("DOMContentLoaded", function () {
    const observerRight = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('opacity-100', 'translate-x-0');
          observerRight.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2 });

    const observerLeft = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('opacity-100', '-translate-x-0');
          observerLeft.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2 });

    document.querySelectorAll('.fade-in-right').forEach(el => observerRight.observe(el));
    document.querySelectorAll('.fade-in-left').forEach(el => observerLeft.observe(el));
  });
</script>

<style>
  .fade-in-right {
    opacity: 0;
    transform: translateX(40px);
    transition: all 0.8s ease-out;
  }
  .fade-in-right.opacity-100 {
    opacity: 1;
    transform: translateX(0);
  }

  .fade-in-left {
    opacity: 0;
    transform: translateX(-40px);
    transition: all 0.8s ease-out;
  }
  .fade-in-left.-translate-x-0 {
    opacity: 1;
    transform: translateX(0);
  }
</style>


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Slider 5 Logo Halus</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .carousel-container {
      overflow: hidden;
      width: 100%;
    }
    .carousel-track {
      display: flex;
      transition: transform 1s ease-in-out;
    }
    .carousel-item {
      flex: 0 0 20%; /* LOGO LEMBAGA AKREDITASI */
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 0.5rem;
    }
    .carousel-item img {
      height: 100px; /* Diperkecil dari sebelumnya */
      width: auto;
      transition: transform 0.2s ease;
    }
    .carousel-item:hover img {
      transform: scale(1) rotate(5deg);
    }
    .carousel-item:hover p {
      font-weight: bold;
    }
  </style>
</head>
<body class="bg-white">

<section class="py-6 bg-cover bg-center" style="background-image: url('{{ asset('images/bg-grey.jpg') }}');">
  <div class="container mx-auto px-4">
    <div class="carousel-container">
      <div class="carousel-track" id="carouselTrack">
        <div class="carousel-item text-white">
          <img src="{{ asset('images/lam-infokom.png') }}" alt="LAM INFOKOM">
        </div>
        <div class="carousel-item text-white">
          <img src="{{ asset('images/lamsama.png') }}" alt="LAMSAMA">
           </div>
        <div class="carousel-item text-white">
          <img src="{{ asset('images/ban-pt.png') }}" alt="BAN-PT">
             </div>
        <div class="carousel-item text-white">
          <img src="{{ asset('images/lamdik.png') }}" alt="LAMDIK">
              </div>
        <div class="carousel-item text-white">
          <img src="{{ asset('images/lamemba.png') }}" alt="LAMEMBA">
               </div>
        <div class="carousel-item text-white">
          <img src="{{ asset('images/lamptkes.png') }}" alt="LAMPTKES">
               </div>
        <div class="carousel-item text-white">
          <img src="{{ asset('images/lam-teknik.png') }}" alt="LAMTEKNIK">
               </div>


      </div>
    </div>
  </div>
</section>

<script>
  const track = document.getElementById('carouselTrack');
  let itemWidth = track.children[0].offsetWidth;
  let isAnimating = false;

  const rotateCarousel = () => {
    if (isAnimating) return;
    isAnimating = true;

    track.style.transition = "transform 1s ease-in-out";
    track.style.transform = `translateX(-${itemWidth}px)`;

    setTimeout(() => {
      track.appendChild(track.children[0]);
      track.style.transition = "none";
      track.style.transform = "translateX(0)";
      isAnimating = false;
    }, 1000);
  };

  // Tunggu hingga layout selesai agar width akurat
  window.addEventListener('load', () => {
    itemWidth = track.children[0].offsetWidth;
    setInterval(rotateCarousel, 5000); // setiap 5 detik
  });

  // Rehitung ulang saat resize
  window.addEventListener('resize', () => {
    itemWidth = track.children[0].offsetWidth;
  });
</script>
</body>
</html>




<!-- HALAMAN PRESENTASI BERGERAK NAIK -->
 
<div class="container mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-3 gap-10">
  <div class="bg-white rounded-2xl shadow-2xl p-10 transform transition duration-300 hover:scale-105 hover:shadow-3xl text-center">
    <h3 class="text-base font-bold mb-3 text-xl">Jumlah Program Studi</h3>
    <p id="count1" class="text-7xl font-bold text-blue-900">0</p>
  </div>
  <div class="bg-white rounded-2xl shadow-2xl p-10 transform transition duration-300 hover:scale-105 hover:shadow-3xl text-center">
    <h3 class="text-base font-bold mb-3 text-xl">Program Studi Terakreditasi Unggul/A</h3>
    <p id="count2" class="text-7xl font-bold text-blue-900">0</p>
  </div>
  <div class="bg-white rounded-2xl shadow-2xl p-10 transform transition duration-300 hover:scale-105 hover:shadow-3xl text-center">
    <h3 class="text-base font-bold mb-3 text-xl">Presentase Program Studi Unggul/A</h3>
    <p id="count3" class="text-7xl font-bold text-blue-900">0%</p>
  </div>
</div>


  <script>
  function animateCount({ id, target, duration, isPercentage = false, decimals = 0 }) {
    const el = document.getElementById(id);
    let start = 0;
    const frameRate = 20; // tiap 20ms
    const steps = duration / frameRate;
    const increment = target / steps;

    const counter = setInterval(() => {
      start += increment;
      if (start >= target) {
        start = target;
        clearInterval(counter);
      }
      el.textContent = isPercentage
        ? start.toFixed(decimals) + '%'
        : Math.floor(start);
    }, frameRate);
  }

  window.onload = () => {
    const totalProdi = 105;
    const prodiUnggul = 9;
    const persenUnggul = (prodiUnggul / totalProdi) * 100;

    const unifiedDuration = 2000; // Semua selesai dalam 2 detik

    animateCount({ id: 'count1', target: totalProdi, duration: unifiedDuration });
    animateCount({ id: 'count2', target: prodiUnggul, duration: unifiedDuration });
    animateCount({ id: 'count3', target: persenUnggul, duration: unifiedDuration, isPercentage: true, decimals: 2 });
  };
</script>


<script>
function animateCount({ id, target, duration, isPercentage = false, decimals = 0 }) {
  const el = document.getElementById(id);
  let start = 0;
  const frameRate = 20; // tiap 20ms
  const steps = duration / frameRate;
  const increment = target / steps;

  const counter = setInterval(() => {
    start += increment;
    if (start >= target) {
      start = target;
      clearInterval(counter);
    }
    el.textContent = isPercentage
      ? start.toFixed(decimals) + '%'
      : Math.floor(start);
  }, frameRate);
}

// Data dari database
const totalProdi = {{ $statistik['total_prodi'] ?? 105 }};
const prodiUnggul = {{ $statistik['prodi_unggul'] ?? 9 }};
const persenUnggul = (prodiUnggul / totalProdi) * 100;
const unifiedDuration = 2000;

const observerOptions = {
  threshold: 0.5
};

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      animateCount({ id: 'count1', target: totalProdi, duration: unifiedDuration });
      animateCount({ id: 'count2', target: prodiUnggul, duration: unifiedDuration });
      animateCount({ id: 'count3', target: persenUnggul, duration: unifiedDuration, isPercentage: true, decimals: 2 });
      observer.disconnect(); // Jalankan sekali saja
    }
  });
}, observerOptions);

// Mulai observasi saat elemen muncul
observer.observe(document.getElementById('count1'));
</script>




<!-- HALAMAN 2 UNTUK GRAFIK AKREDITASI -->


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<section class="container mx-auto px-4 py-10">
  <h2 class="text-2xl font-bold text-center text-blue-900 mb-6">GRAFIK AKREDITASI PROGRAM STUDI</h2>
  
  <div class="bg-white p-6 rounded shadow-lg flex justify-center">
    <!-- SET WIDTH & HEIGHT DI CANVAS -->
    <canvas id="akreditasiChart" width="300" height="300" style="max-width: 100%; height: auto;"></canvas>
  </div>
</section>

<script>
  const ctx = document.getElementById('akreditasiChart').getContext('2d');
  const akreditasiChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['Unggul', 'Baik Sekali', 'Baik', 'A', 'B', 'C', 'Belum Terakreditasi'],
      datasets: [{
        label: 'Jumlah Program Studi',
        data: [{{ $statistik['akred_unggul'] ?? 5 }}, {{ $statistik['akred_baik_sekali'] ?? 27 }}, {{ $statistik['akred_baik'] ?? 32 }}, {{ $statistik['akred_a'] ?? 1 }}, {{ $statistik['akred_b'] ?? 22 }}, {{ $statistik['akred_c'] ?? 0 }}, {{ $statistik['akred_belum'] ?? 13 }}],
        backgroundColor: [
          '#228B22',   // Hijau tua cerah
          '#B22222',   // Merah tua cerah
          '#2563eb',   // Biru tua cerah
          '#6A0DAD',   // Ungu tua cerah
          '#B57EDC',   // Ungu muda cerah
          '#FFD700',   // Kuning tua cerah
          '#FF8C00'    // Oranye tua cerah
        ],
        borderColor: '#ffffff',
        borderWidth: 2
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          position: 'bottom',
          labels: {
            color: '#000',
            font: {
              size: 16,
              weight: 'bold'
            }
          }
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              return `${context.label}: ${context.raw} Program Studi`;
            }
          }
        }
      }
    }
  });
</script>




<!-- Grafik Jumlah Program Studi Berdasarkan Jenjang -->
<section class="container mx-auto px-4 py-10">
  <h2 class="text-2xl font-bold text-center text-blue-900 mb-6">JUMLAH PROGRAM STUDI BERDASARKAN JENJANG</h2>
  <div class="bg-white p-6 rounded shadow-lg">
    <canvas id="jenjangChart" height="100"></canvas>
  </div>
</section>

<script>
  const ctxJenjang = document.getElementById('jenjangChart').getContext('2d');
  const jenjangChart = new Chart(ctxJenjang, {
    type: 'bar',
    data: {
      labels: ['Sarjana (S1)', 'Magister (S2)', 'Doktor (S3)', 'Profesi'],
      datasets: [{
        label: 'Jumlah Program Studi',
        data: [{{ $statistik['prodi_s1'] ?? 77 }}, {{ $statistik['prodi_s2'] ?? 19 }}, {{ $statistik['prodi_s3'] ?? 4 }}, {{ $statistik['prodi_profesi'] ?? 3 }}],
        backgroundColor: [
          '#2563eb', // S1
          '#2563eb', // S2
          '#2563eb', // S3
          '#2563eb'  // Profesi
        ],
        borderRadius: 6
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              return context.raw + ' Program Studi';
            }
          }
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            stepSize: 10
          },
          title: {
            display: true,
            text: 'Jumlah',
            font: {
              weight: 'bold',
              size: 20
            }
          }
        },
        x: {
          title: {
            display: true,
            text: 'Jenjang Pendidikan',
            font: {
              weight: 'bold',
              size: 20
            }
          }
        }
      }
    }
  });
</script>




<!-- Berita dan Pengumuman -->
<!-- Canvas dengan latar gradasi biru dof dari kiri ke kanan -->
<div class="w-full bg-gradient-to-l from-blue-900 via-blue-300 to-white py-16 px-4">
  <section class="container mx-auto grid md:grid-cols-2 gap-10 text-gray-800 relative z-10">

    <!-- Berita Terbaru (Dinamis) -->
    <div>
      <h2 class="text-5xl font-bold text-black mb-6 border-b border-white/40 pb-2">📰 Berita Terbaru</h2>
      <div class="space-y-4">
        @forelse($latestBerita ?? [] as $berita)
        <div class="bg-white/90 backdrop-blur-md p-7 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
          <h3 class="text-xl font-bold text-blue-800 flex items-center gap-2">
            <svg class="w-5 h-5 text-blue-800" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10.293 15.707a1 1 0 010-1.414L13.586 11H4a1 1 0 110-2h9.586l-3.293-3.293a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"/>
            </svg>
            {{ $berita->title }}
          </h3>
          <p class="text-black mt-1 font-semibold text-xl">
            {{ $berita->published_at ? $berita->published_at->format('d M Y') : '' }} - {{ Str::limit(strip_tags($berita->content), 100) }}
          </p>
          <a href="{{ route('posts.show', $berita->slug) }}" 
            class="text-blue-600 text-sm hover:underline mt-2 inline-block">
            Selengkapnya
          </a>
        </div>
        @empty
        <div class="bg-white/90 backdrop-blur-md p-7 rounded-xl shadow-lg">
          <p class="text-gray-500 text-center">Belum ada berita terbaru</p>
        </div>
        @endforelse
      </div>
      <div class="mt-6">
        <a href="{{ route('berita.lpmpp') }}" class="inline-flex items-center gap-2 text-blue-700 font-semibold hover:underline text-xl">
          <svg class="w-5 h-5 text-blue-700" fill="currentColor" viewBox="0 0 20 20"><path d="M9.293 16.707a1 1 0 001.414 0l5-5a1 1 0 00-1.414-1.414L11 13.586V4a1 1 0 10-2 0v9.586L6.707 10.293a1 1 0 00-1.414 1.414l5 5z"/></svg>
          Lihat berita lainnya
        </a>
      </div>
    </div>

    <!-- Pengumuman (Dinamis) -->
    <div>
      <h2 class="text-5xl font-bold text-black mb-6 border-b border-white/40 pb-2">📢 Pengumuman</h2>
      <div class="space-y-4">
        @forelse($latestPengumuman ?? [] as $pengumuman)
        <div class="bg-white/90 backdrop-blur-md p-7 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
          <h3 class="text-xl font-semibold text-red-700 flex items-center gap-2">
            <svg class="w-5 h-5 text-red-700" fill="currentColor" viewBox="0 0 20 20"><path d="M10.293 15.707a1 1 0 010-1.414L13.586 11H4a1 1 0 110-2h9.586l-3.293-3.293a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"/></svg>
            {{ $pengumuman->title }}
          </h3>
          <p class="text-black mt-1 font-semibold">{{ Str::limit(strip_tags($pengumuman->content), 120) }}</p>
          <a href="{{ route('posts.show', $pengumuman->slug) }}" class="text-blue-600 text-sm hover:underline mt-2 inline-block">Selengkapnya</a>
        </div>
        @empty
        <div class="bg-white/90 backdrop-blur-md p-7 rounded-xl shadow-lg">
          <p class="text-gray-500 text-center">Belum ada pengumuman terbaru</p>
        </div>
        @endforelse
      </div>
      <div class="mt-6">
        <a href="{{ route('berita.lpmpp') }}" class="inline-flex items-center gap-2 text-blue-700 font-semibold hover:underline text-xl">
          <svg class="w-5 h-5 text-blue-700" fill="currentColor" viewBox="0 0 20 20"><path d="M9.293 16.707a1 1 0 001.414 0l5-5a1 1 0 00-1.414-1.414L11 13.586V4a1 1 0 10-2 0v9.586L6.707 10.293a1 1 0 00-1.414 1.414l5 5z"/></svg>
          Lihat pengumuman lainnya
        </a>
      </div>
    </div>

  </section>
</div>


<!-- Bagian Tim LPMPP -->
<section class="bg-cover bg-center bg-no-repeat py-20 relative" 
    style="background-image: url('{{ asset('images/lpmpp-bg.jpg') }}'); background-size: cover; background-attachment: fixed;">

  <div class="container mx-auto px-6 text-black">
    <h2 class="text-4xl font-bold text-center mb-12">Tim Pengelola LPMPP</h2>

<!-- Kontainer Anggota: Hanya 4 Anggota Pertama -->
<div class="flex flex-wrap justify-center gap-8">

  <!-- Anggota 1 -->
  <div class="flex-shrink-0 w-64 group cursor-pointer relative transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 hover:shadow-2xl">
    <div class="w-full h-80 overflow-hidden rounded-xl shadow-lg border-4 border-transparent transition-all duration-300">
      <img src="{{ asset('images/kepalaLPMPP.jpg') }}" alt="Ketua"
           class="object-cover w-full h-full transition-all duration-300">
      <span class="absolute inset-0 rounded-xl bg-gradient-to-br from-blue-600 to-blue-800 opacity-0 transition-opacity duration-300 group-hover:opacity-20"></span>
    </div>
    <div class="text-center mt-2 p-2 rounded-md">
      <h3 class="text-lg font-bold">Dr. James Abrahamsz, M.Si</h3>
      <p class="text-sm">Kepala LPMPP</p>
    </div>
  </div>

  <!-- Anggota 2 -->
  <div class="flex-shrink-0 w-64 group cursor-pointer relative transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 hover:shadow-2xl">
    <div class="w-full h-80 overflow-hidden rounded-xl shadow-lg border-4 border-transparent transition-all duration-300">
      <img src="{{ asset('images/SekretarisLPMPP.jpeg') }}" alt="Sekretaris"
           class="object-cover w-full h-full transition-all duration-300">
      <span class="absolute inset-0 rounded-xl bg-gradient-to-br from-blue-600 to-blue-800 opacity-0 transition-opacity duration-300 group-hover:opacity-20"></span>
    </div>
    <div class="text-center mt-2 p-2 rounded-md">
      <h3 class="text-lg font-bold">Dr. Djufri Rays Pattilouw, SE, M.Si</h3>
      <p class="text-sm">Sekretaris LPMPP</p>
    </div>
  </div>

  <!-- Anggota 3 -->
  <div class="flex-shrink-0 w-64 group cursor-pointer relative transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 hover:shadow-2xl">
    <div class="w-full h-80 overflow-hidden rounded-xl shadow-lg border-4 border-transparent transition-all duration-300">
      <img src="{{ asset('images/ema lisaholet.jpg') }}" alt="Subkor"
           class="object-cover w-full h-full transition-all duration-300">
      <span class="absolute inset-0 rounded-xl bg-gradient-to-br from-blue-600 to-blue-800 opacity-0 transition-opacity duration-300 group-hover:opacity-20"></span>
    </div>
    <div class="text-center mt-2 p-2 rounded-md">
      <h3 class="text-lg font-bold">Ema Lisaholet, SE,M.Si</h3>
      <p class="text-sm">Sub Koordinator Umum</p>
    </div>
  </div>

  <!-- Anggota 4 -->
  <div class="flex-shrink-0 w-64 group cursor-pointer relative transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 hover:shadow-2xl">
    <div class="w-full h-80 overflow-hidden rounded-xl shadow-lg border-4 border-transparent transition-all duration-300">
      <img src="{{ asset('images/anthoneta.jpg') }}" alt="Subkor"
           class="object-cover w-full h-full transition-all duration-300">
      <span class="absolute inset-0 rounded-xl bg-gradient-to-br from-blue-600 to-blue-800 opacity-0 transition-opacity duration-300 group-hover:opacity-20"></span>
    </div>
    <div class="text-center mt-2 p-2 rounded-md">
      <h3 class="text-lg font-bold">Anthoneta Matakupan, S.Sos</h3>
      <p class="text-sm">Sub Koordinator Data dan Informasi</p>
    </div>
  </div>

</div>



    <!-- Tombol Lihat Semua -->
    <div class="text-center mt-10">
        <a href="{{ route('struktur-organisasi.lpmpp') }}"
            class="relative inline-block px-8 py-3 text-white text-lg font-semibold rounded-full shadow-lg bg-gradient-to-r from-blue-500 to-blue-700 
                  transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 hover:shadow-2xl">
            <span class="relative z-10">Lihat Semua Tim Pengelola LPMPP</span>
            <span class="absolute inset-0 rounded-full bg-gradient-to-br from-blue-600 to-blue-800 opacity-0 transition-opacity duration-300 hover:opacity-20"></span>
        </a>
    </div>

  </div>
</section>






<!-- Script untuk tombol geser -->
<script>
const table = document.getElementById("dokumenTable");
const allRows = Array.from(table.querySelectorAll("tbody tr"));
const rowsPerPage = 5; // ✅ Maksimal 5 data per halaman
let currentPage = 1;

const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const pageInfo = document.getElementById("pageInfo");
const searchInput = document.getElementById("searchInput");

function displayRows() {
  const filter = searchInput.value.toLowerCase();
  const filteredRows = allRows.filter(row => row.textContent.toLowerCase().includes(filter));
  const totalPages = Math.ceil(filteredRows.length / rowsPerPage);

  // Sembunyikan semua baris terlebih dahulu
  allRows.forEach(row => row.style.display = "none");

  // Hitung indeks data untuk halaman ini
  const start = (currentPage - 1) * rowsPerPage;
  const end = start + rowsPerPage;

  // ✅ Hanya tampilkan baris sesuai halaman
  filteredRows.slice(start, end).forEach(row => row.style.display = "table-row");

  // Update info halaman
  pageInfo.textContent = `Halaman ${currentPage} dari ${totalPages || 1}`;

  // Atur tombol previous dan next
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
  const filteredRows = allRows.filter(row => row.textContent.toLowerCase().includes(filter));
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

// ✅ Saat halaman pertama load, tampilkan hanya 5 data
displayRows();
</script>



<!-- Scrollbar disembunyikan -->
<style>
  .no-scrollbar::-webkit-scrollbar {
    display: none;
  }
  .no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
</style>



<!-- Jadwal Asesmen Lapangan -->


<style>
    /* Supaya konten tabel turun, tidak ketutupan navbar */
    main {
        padding-top: 130px;
    }

    /* Container tabel dengan efek 3D */
    .table-container {
        background: #fff;
        border-radius: 16px;
        padding: 20px;
        margin-top: 20px;
        box-shadow:
            0 4px 8px rgba(0, 0, 0, 0.1),
            0 8px 20px rgba(30, 58, 138, 0.3),
            inset 0 1px 2px rgba(255, 255, 255, 0.5);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .table-container:hover {
        transform: translateY(-5px);
        box-shadow:
            0 8px 16px rgba(0, 0, 0, 0.15),
            0 12px 24px rgba(30, 58, 138, 0.4),
            inset 0 1px 3px rgba(255, 255, 255, 0.6);
    }

    /* Tampilan tabel */
    table {
        border-collapse: collapse;
        width: 100%;
        border-radius: 12px;
        overflow: hidden;
    }

    /* Header tabel */
    thead th {
        background: linear-gradient(135deg, #1e3a8a, #2563eb);
        color: #fff;
        padding: 12px;
        font-weight: bold;
        font-size: 16px;
        text-transform: uppercase;
        text-align: center;
    }

    /* Sel tabel */
    td {
        padding: 12px;
        border: 1px solid #e5e7eb;
        color: #111827;
    }

    /* Baris tabel selang-seling */
    tbody tr:nth-child(odd) {
        background-color: #f0f9ff;
    }

    tbody tr:nth-child(even) {
        background-color: #f9fafb;
    }

    /* Efek hover baris */
    tbody tr:hover {
        background-color: #dbeafe;
        transform: scale(1.01);
        transition: all 0.2s ease;
        cursor: pointer;
    }
</style>

<main class="container mx-auto px-6">
    <h2 class="text-3xl font-bold text-blue-900 mb-6 text-center">
        Jadwal Asesmen Lapangan
    </h2>

    <!-- Pencarian -->
    <div class="mt-4 flex items-center mb-4">
        <svg class="w-5 h-5 text-gray-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M9 17a8 8 0 100-16 8 8 0 000 16z"/>
        </svg>
        <input type="text" id="searchInput" placeholder="Cari dokumen..." class="px-4 py-2 border rounded w-full">
    </div>

    <!-- Bingkai tabel -->
    <div class="table-container">
        <div class="overflow-x-auto">
            <table id="dokumenTable" class="min-w-full border border-gray-300">
                <thead>
                    <tr>
                        <th class="text-center px-4 py-2">No</th>
                        <th class="text-left px-4 py-2">Program Studi</th>
                        <th class="text-left px-4 py-2">Fakultas</th>
                        <th class="text-left px-4 py-2">Waktu Pelaksanaan</th>
                        <th class="text-left px-4 py-2">Lembaga Akreditasi</th>
                        <th class="text-center px-4 py-2">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($jadwalAsesmen ?? [] as $index => $jadwal)
                    <tr>
                        <td class="text-center px-4 py-2">{{ $index + 1 }}</td>
                        <td class="px-4 py-2">{{ $jadwal->program_studi }}</td>
                        <td class="px-4 py-2">{{ $jadwal->fakultas }}</td>
                        <td class="px-4 py-2">{{ $jadwal->tanggal_mulai ? $jadwal->tanggal_mulai->format('d F Y') : '-' }}</td>
                        <td class="px-4 py-2">{{ $jadwal->lembaga_akreditasi }}</td>
                        <td class="px-4 py-2">{{ $jadwal->keterangan ?? '-' }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center px-4 py-8 text-gray-500">Belum ada jadwal asesmen</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</main>

<!-- Pagination -->
<div class="flex justify-center items-center mt-4 space-x-4 mb-10">
    <button id="prevBtn" class="px-4 py-2 bg-blue-500 text-white rounded disabled:opacity-50">Previous</button>
    <span id="pageInfo" class="text-black"></span>
    <button id="nextBtn" class="px-4 py-2 bg-blue-500 text-white rounded">Next</button>
</div>

<script>
    const table = document.getElementById("dokumenTable");
    const rows = Array.from(table.querySelectorAll("tbody tr"));
    const searchInput = document.getElementById("searchInput");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    const pageInfo = document.getElementById("pageInfo");

    let currentPage = 1;
    const rowsPerPage = 5;

    function renderTable() {
        const searchValue = searchInput.value.toLowerCase();

        // Filter data sesuai keyword
        const filteredRows = rows.filter(row =>
            row.textContent.toLowerCase().includes(searchValue)
        );

        // Hitung total halaman
        const totalPages = Math.ceil(filteredRows.length / rowsPerPage);

        // Jika currentPage lebih besar dari total halaman, reset ke halaman terakhir
        if (currentPage > totalPages) currentPage = totalPages || 1;

        // Sembunyikan semua baris dulu
        rows.forEach(row => row.style.display = "none");

        // Hitung batas awal & akhir baris
        const start = (currentPage - 1) * rowsPerPage;
        const end = start + rowsPerPage;

        // Tampilkan hanya data pada halaman aktif
        filteredRows.slice(start, end).forEach(row => {
            row.style.display = "table-row";
        });

        // Update info halaman
        pageInfo.textContent = `Halaman ${totalPages === 0 ? 0 : currentPage} dari ${totalPages || 1}`;

        // Atur status tombol prev/next
        prevBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage >= totalPages || totalPages === 0;
    }

    // Event tombol prev
    prevBtn.addEventListener("click", () => {
        if (currentPage > 1) {
            currentPage--;
            renderTable();
        }
    });

    // Event tombol next
    nextBtn.addEventListener("click", () => {
        const searchValue = searchInput.value.toLowerCase();
        const filteredRows = rows.filter(row =>
            row.textContent.toLowerCase().includes(searchValue)
        );
        const totalPages = Math.ceil(filteredRows.length / rowsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            renderTable();
        }
    });

    // Event pencarian
    searchInput.addEventListener("input", () => {
        currentPage = 1;
        renderTable();
    });

    // Render awal
    renderTable();
</script>




<!-- Lokasi LPMPP Universitas Pattimura Ambon -->
<section class="bg-gray-100 pt-30 pb-20">
  <div class="container mx-auto px-4">
    <h2 class="text-2xl font-bold text-blue-900 mb-6 text-center border-b pb-4">Lokasi LPMPP Universitas Pattimura</h2>
    <div class="w-full h-[900px] rounded shadow-lg overflow-hidden">
      <iframe
        class="w-full h-full"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127489.0088758869!2d128.1921204!3d-3.6521185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6cef2adfeafe91%3A0x4d2a6f840ffaed16!2sLP3MP%20Universitas%20Pattimura%20Ambon!5e0!3m2!1sid!2sid!4v1717171717172!5m2!1sid!2sid"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>




<!-- Background Full, Border Hanya Sepanjang Konten -->
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


