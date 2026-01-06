<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    public function index(Request $request)
    {
        $query = Dokumen::query();
        
        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }
        
        $dokumens = $query->orderBy('kategori')->orderBy('urutan')->paginate(15);
        $kategoriList = Dokumen::kategoriList();
        
        return view('admin.dokumen.index', compact('dokumens', 'kategoriList'));
    }

    public function create()
    {
        $kategoriList = Dokumen::kategoriList();
        return view('admin.dokumen.create', compact('kategoriList'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'kategori' => 'required',
            'file' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:10240',
        ]);

        $data = $request->only(['nama', 'kategori', 'lembaga', 'link_external', 'deskripsi', 'urutan', 'is_active']);
        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('dokumen', 'public');
        }

        Dokumen::create($data);

        return redirect()->route('admin.dokumen.index')->with('success', 'Dokumen berhasil ditambahkan!');
    }

    public function edit(Dokumen $dokuman)
    {
        $kategoriList = Dokumen::kategoriList();
        return view('admin.dokumen.edit', compact('dokuman', 'kategoriList'));
    }

    public function update(Request $request, Dokumen $dokuman)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'kategori' => 'required',
            'file' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:10240',
        ]);

        $data = $request->only(['nama', 'kategori', 'lembaga', 'link_external', 'deskripsi', 'urutan']);
        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('dokumen', 'public');
        }

        $dokuman->update($data);

        return redirect()->route('admin.dokumen.index')->with('success', 'Dokumen berhasil diupdate!');
    }

    public function destroy(Dokumen $dokuman)
    {
        $dokuman->delete();
        return redirect()->route('admin.dokumen.index')->with('success', 'Dokumen berhasil dihapus!');
    }
}
