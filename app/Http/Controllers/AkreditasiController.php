<?php

namespace App\Http\Controllers;

use App\Models\Akreditasi;

class AkreditasiController extends Controller
{
    public function programStudi()
    {
        $akreditasis = Akreditasi::orderBy('fakultas')
            ->orderBy('program_studi')
            ->get();
        
        return view('akreditasi-program-studi', compact('akreditasis'));
    }
}
