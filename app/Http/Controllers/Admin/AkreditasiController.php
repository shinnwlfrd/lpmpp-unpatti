<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Akreditasi;
use Illuminate\Http\Request;

class AkreditasiController extends Controller
{
    public function index()
    {
        $akreditasis = Akreditasi::latest()->paginate(15);
        return view('admin.akreditasi.index', compact('akreditasis'));
    }

    public function create()
    {
        return view('admin.akreditasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'program_studi' => 'required|max:255',
            'fakultas' => 'required|max:255',
            'jenjang' => 'required',
            'peringkat' => 'nullable|max:50',
            'sertifikat' => 'nullable|file|mimes:pdf|max:5120',
        ]);

        $data = $request->only([
            'program_studi', 'fakultas', 'jenjang', 'peringkat',
            'nomor_sk', 'tanggal_sk', 'tanggal_kadaluarsa', 'lembaga_akreditasi'
        ]);

        if ($request->hasFile('sertifikat')) {
            $data['sertifikat'] = $request->file('sertifikat')->store('sertifikat', 'public');
        }

        Akreditasi::create($data);

        return redirect()->route('admin.akreditasi.index')->with('success', 'Data akreditasi berhasil ditambahkan!');
    }

    public function edit(Akreditasi $akreditasi)
    {
        return view('admin.akreditasi.edit', compact('akreditasi'));
    }

    public function update(Request $request, Akreditasi $akreditasi)
    {
        $request->validate([
            'program_studi' => 'required|max:255',
            'fakultas' => 'required|max:255',
            'jenjang' => 'required',
            'sertifikat' => 'nullable|file|mimes:pdf|max:5120',
        ]);

        $data = $request->only([
            'program_studi', 'fakultas', 'jenjang', 'peringkat',
            'nomor_sk', 'tanggal_sk', 'tanggal_kadaluarsa', 'lembaga_akreditasi'
        ]);

        if ($request->hasFile('sertifikat')) {
            $data['sertifikat'] = $request->file('sertifikat')->store('sertifikat', 'public');
        }

        $akreditasi->update($data);

        return redirect()->route('admin.akreditasi.index')->with('success', 'Data akreditasi berhasil diupdate!');
    }

    public function destroy(Akreditasi $akreditasi)
    {
        $akreditasi->delete();
        return redirect()->route('admin.akreditasi.index')->with('success', 'Data akreditasi berhasil dihapus!');
    }
}
