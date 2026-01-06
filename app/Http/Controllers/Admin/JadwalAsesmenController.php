<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JadwalAsesmen;
use Illuminate\Http\Request;

class JadwalAsesmenController extends Controller
{
    public function index()
    {
        $jadwals = JadwalAsesmen::latest()->paginate(15);
        return view('admin.jadwal-asesmen.index', compact('jadwals'));
    }

    public function create()
    {
        return view('admin.jadwal-asesmen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'program_studi' => 'required|max:255',
            'fakultas' => 'required|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'status' => 'required|in:terjadwal,berlangsung,selesai',
        ]);

        JadwalAsesmen::create($request->only([
            'program_studi', 'fakultas', 'jenjang', 'tanggal_mulai',
            'tanggal_selesai', 'lembaga_akreditasi', 'status', 'keterangan'
        ]));

        return redirect()->route('admin.jadwal-asesmen.index')->with('success', 'Jadwal asesmen berhasil ditambahkan!');
    }

    public function edit(JadwalAsesmen $jadwal_asesmen)
    {
        return view('admin.jadwal-asesmen.edit', compact('jadwal_asesmen'));
    }

    public function update(Request $request, JadwalAsesmen $jadwal_asesmen)
    {
        $request->validate([
            'program_studi' => 'required|max:255',
            'fakultas' => 'required|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'status' => 'required|in:terjadwal,berlangsung,selesai',
        ]);

        $jadwal_asesmen->update($request->only([
            'program_studi', 'fakultas', 'jenjang', 'tanggal_mulai',
            'tanggal_selesai', 'lembaga_akreditasi', 'status', 'keterangan'
        ]));

        return redirect()->route('admin.jadwal-asesmen.index')->with('success', 'Jadwal asesmen berhasil diupdate!');
    }

    public function destroy(JadwalAsesmen $jadwal_asesmen)
    {
        $jadwal_asesmen->delete();
        return redirect()->route('admin.jadwal-asesmen.index')->with('success', 'Jadwal asesmen berhasil dihapus!');
    }
}
