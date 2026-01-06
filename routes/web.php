<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/profil-lpmpp-unpatti', function () {
    return view('profil-lpmpp-unpatti');
})->name('profil.lpmpp');



Route::get('/visi-misi-tujuan', function () {
    return view('visi-misi-tujuan');
})->name('visi-misi-tujuan.lpmpp');

Route::get('/sambutan', function () {
    return view('sambutan');
})->name('sambutan.lpmpp');

Route::get('/sejarah', function () {
    return view('sejarah');
})->name('sejarah.lpmpp');

use App\Http\Controllers\StrukturOrganisasiController;
Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('struktur-organisasi.lpmpp');

Route::get('/beranda', [HomeController::class, 'index'])->name('beranda.lpmpp');


Route::get('/pusat-penjaminan-mutu-akreditasi', function () {
    return view('pusat-penjaminan-mutu-akreditasi');
})->name('pusat-penjaminan-mutu-akreditasi.lpmpp');

Route::get('/pusat-monev-pembelajaran', function () {
    return view('pusat-monev-pembelajaran');
})->name('pusat-monev-pembelajaran.lpmpp');

Route::get('/pusat-pengembangan-kurikulum-dan-inovasi-pembelajaran', function () {
    return view('pusat-pengembangan-kurikulum-dan-inovasi-pembelajaran');
})->name('pusat-pengembangan-kurikulum-dan-inovasi-pembelajaran.lpmpp');

Route::get('/pusat-layanan-kinerja-diklat-dan-sertifikasi', function () {
    return view('pusat-layanan-kinerja-diklat-dan-sertifikasi');
})->name('pusat-layanan-kinerja-diklat-dan-sertifikasi.lpmpp');

Route::get('/pusat-data-dan-sistem-informasi-pembelajaran', function () {
    return view('pusat-data-dan-sistem-informasi-pembelajaran');
})->name('pusat-data-dan-sistem-informasi-pembelajaran.lpmpp');


Route::get('/akreditasi-institusi', function () {
    return view('akreditasi-institusi');
})->name('akreditasi-institusi.lpmpp');

use App\Http\Controllers\AkreditasiController;
Route::get('/akreditasi-program-studi', [AkreditasiController::class, 'programStudi'])->name('akreditasi-program-studi.lpmpp');

use App\Http\Controllers\DokumenController;

Route::get('/dokumen', [DokumenController::class, 'index'])->name('dokumen.lpmpp');

Route::get('/pendampingan-akreditasi', function () {
    return view('pendampingan-akreditasi');
})->name('pendampingan-akreditasi.lpmpp');


Route::get('/pelatihan-pekerti', function () {
    return view('pelatihan-pekerti');
})->name('pelatihan-pekerti.lpmpp');

Route::get('/pelatihan-aa', function () {
    return view('pelatihan-aa');
})->name('pelatihan-aa.lpmpp');

Route::get('/arsip-ami', [DokumenController::class, 'arsipAmi'])->name('arsip-ami.lpmpp');
Route::get('/arsip-spmi', [DokumenController::class, 'arsipSpmi'])->name('arsip-spmi.lpmpp');
Route::get('/arsip-pelatihan', [DokumenController::class, 'arsipPelatihan'])->name('arsip-pelatihan.lpmpp');
Route::get('/arsip-pembelajaran', [DokumenController::class, 'arsipPembelajaran'])->name('arsip-pembelajaran.lpmpp');



Route::get('/detail-berita-1', function () {
    return view('detail-berita-1');
})->name('detail-berita-1.lpmpp');

Route::get('/detail-berita-2', function () {
    return view('detail-berita-2');
})->name('detail-berita-2.lpmpp');

Route::get('/detail-berita-3', function () {
    return view('detail-berita-3');
})->name('detail-berita-3.lpmpp');

Route::get('/detail-berita-4', function () {
    return view('detail-berita-4');
})->name('detail-berita-4.lpmpp');

Route::get('/detail-berita-5', function () {
    return view('detail-berita-5');
})->name('detail-berita-5.lpmpp');


Route::get('/pedoman-akreditasi', function () {
    return view('pedoman-akreditasi');
})->name('pedoman-akreditasi.lpmpp');

Route::get('/hasil-survey', [DokumenController::class, 'hasilSurvey'])->name('hasil-survey.lpmpp');

Route::get('/galery', function () {
    return view('galery');
})->name('galery.lpmpp');




use App\Http\Controllers\PostController;

Route::get('/berita/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/berita/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/berita', [PostController::class, 'berita'])->name('berita.lpmpp');
Route::get('/berita/{slug}', [PostController::class, 'show'])->name('posts.show');

// Admin Routes
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AkreditasiController as AdminAkreditasiController;
use App\Http\Controllers\Admin\StatistikController;
use App\Http\Controllers\Admin\JadwalAsesmenController;
use App\Http\Controllers\Admin\StrukturOrganisasiController as AdminStrukturOrganisasiController;
use App\Http\Controllers\Admin\DokumenController as AdminDokumenController;

Route::prefix('admin')->name('admin.')->group(function () {
    // Auth routes
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Protected admin routes
    Route::middleware('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('posts', AdminPostController::class);
        Route::resource('users', UserController::class);
        Route::resource('akreditasi', AdminAkreditasiController::class);
        Route::resource('statistik', StatistikController::class);
        Route::resource('jadwal-asesmen', JadwalAsesmenController::class);
        Route::resource('struktur-organisasi', AdminStrukturOrganisasiController::class);
        Route::resource('dokumen', AdminDokumenController::class);
    });
});