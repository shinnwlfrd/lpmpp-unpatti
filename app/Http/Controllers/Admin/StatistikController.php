<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Statistik;
use Illuminate\Http\Request;

class StatistikController extends Controller
{
    public function index()
    {
        $statistiks = Statistik::orderBy('nama')->paginate(20);
        return view('admin.statistik.index', compact('statistiks'));
    }

    public function create()
    {
        return view('admin.statistik.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'kunci' => 'required|max:255|unique:statistiks',
            'nilai' => 'required',
        ]);

        $data = $request->only(['nama', 'kunci', 'nilai', 'deskripsi']);
        $data['is_active'] = $request->has('is_active');

        Statistik::create($data);

        return redirect()->route('admin.statistik.index')->with('success', 'Statistik berhasil ditambahkan!');
    }

    public function edit(Statistik $statistik)
    {
        return view('admin.statistik.edit', compact('statistik'));
    }

    public function update(Request $request, Statistik $statistik)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'kunci' => 'required|max:255|unique:statistiks,kunci,' . $statistik->id,
            'nilai' => 'required',
        ]);

        $data = $request->only(['nama', 'kunci', 'nilai', 'deskripsi']);
        $data['is_active'] = $request->has('is_active');

        $statistik->update($data);

        return redirect()->route('admin.statistik.index')->with('success', 'Statistik berhasil diupdate!');
    }

    public function destroy(Statistik $statistik)
    {
        $statistik->delete();
        return redirect()->route('admin.statistik.index')->with('success', 'Statistik berhasil dihapus!');
    }
}
