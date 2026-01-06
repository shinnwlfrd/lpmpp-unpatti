<?php

namespace App\Http\Controllers;

use App\Models\StrukturOrganisasi;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $strukturs = StrukturOrganisasi::where('is_active', true)
            ->orderBy('urutan')
            ->get();
        
        return view('struktur-organisasi', compact('strukturs'));
    }
}
