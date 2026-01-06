<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $strukturs = StrukturOrganisasi::orderBy('urutan')->paginate(15);
        return view('admin.struktur-organisasi.index', compact('strukturs'));
    }

    public function create()
    {
        return view('admin.struktur-organisasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'foto' => 'nullable|image|max:2048',
            'urutan' => 'nullable|integer',
        ]);

        $data = $request->only(['nama', 'jabatan', 'tugas_pokok', 'nip', 'urutan', 'is_active']);
        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('struktur', 'public');
        }

        StrukturOrganisasi::create($data);

        return redirect()->route('admin.struktur-organisasi.index')->with('success', 'Data struktur organisasi berhasil ditambahkan!');
    }

    public function edit(StrukturOrganisasi $struktur_organisasi)
    {
        return view('admin.struktur-organisasi.edit', compact('struktur_organisasi'));
    }

    public function update(Request $request, StrukturOrganisasi $struktur_organisasi)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'foto' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['nama', 'jabatan', 'tugas_pokok', 'nip', 'urutan']);
        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('struktur', 'public');
        }

        $struktur_organisasi->update($data);

        return redirect()->route('admin.struktur-organisasi.index')->with('success', 'Data struktur organisasi berhasil diupdate!');
    }

    public function destroy(StrukturOrganisasi $struktur_organisasi)
    {
        $struktur_organisasi->delete();
        return redirect()->route('admin.struktur-organisasi.index')->with('success', 'Data struktur organisasi berhasil dihapus!');
    }
}
