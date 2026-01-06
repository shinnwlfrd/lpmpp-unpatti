<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;

class DokumenController extends Controller
{
    public function index()
    {
        $dokumens = Dokumen::where('kategori', 'pedoman_akreditasi')
            ->where('is_active', true)
            ->orderBy('urutan')
            ->get();
        
        return view('dokumen', compact('dokumens'));
    }

    public function arsipSpmi()
    {
        $dokumens = Dokumen::where('kategori', 'arsip_spmi')
            ->where('is_active', true)
            ->orderBy('urutan')
            ->get();
        
        return view('arsip-spmi', compact('dokumens'));
    }

    public function arsipAmi()
    {
        $dokumens = Dokumen::where('kategori', 'arsip_ami')
            ->where('is_active', true)
            ->orderBy('urutan')
            ->get();
        
        return view('arsip-ami', compact('dokumens'));
    }

    public function arsipPelatihan()
    {
        $dokumens = Dokumen::where('kategori', 'arsip_pelatihan')
            ->where('is_active', true)
            ->orderBy('urutan')
            ->get();
        
        return view('arsip-pelatihan', compact('dokumens'));
    }

    public function arsipPembelajaran()
    {
        $dokumens = Dokumen::where('kategori', 'arsip_pembelajaran')
            ->where('is_active', true)
            ->orderBy('urutan')
            ->get();
        
        return view('arsip-pembelajaran', compact('dokumens'));
    }

    public function hasilSurvey()
    {
        $dokumens = Dokumen::where('kategori', 'hasil_survey')
            ->where('is_active', true)
            ->orderBy('urutan')
            ->get();
        
        return view('hasil-survey', compact('dokumens'));
    }
}
