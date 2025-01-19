<?php

namespace App\Http\Controllers;

use App\Models\Kategori_Panen;
use Illuminate\Http\Request;

class KategoriPanenController extends Controller
{
    public function index()
    {
        $kategori_panen = Kategori_Panen::all();
        return view('kategori_panen.index', compact('kategori_panen'));
    }

    public function create()
    {
        return view('kategori_panen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        Kategori_Panen::create($request->all());
        return redirect()->route('kategori-panen.index')->with('success', 'Kategori Panen berhasil ditambahkan.');
    }

    public function show($id)
    {
        $kategori_panen = Kategori_Panen::findOrFail($id);
        return view('kategori_panen.show', compact('kategori_panen'));
    }

    public function edit($id)
    {
        $kategori_panen = Kategori_Panen::findOrFail($id);
        return view('kategori_panen.edit', compact('kategori_panen'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $kategori_panen = Kategori_Panen::findOrFail($id);
        $kategori_panen->update($request->all());
        return redirect()->route('kategori-panen.index')->with('success', 'Kategori Panen berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kategori_panen = Kategori_Panen::findOrFail($id);
        $kategori_panen->delete();
        return redirect()->route('kategori-panen.index')->with('success', 'Kategori Panen berhasil dihapus.');
    }
}
