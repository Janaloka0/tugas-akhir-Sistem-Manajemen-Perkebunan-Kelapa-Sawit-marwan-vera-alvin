<?php

namespace App\Http\Controllers;

use App\Models\Distribusi;
use Illuminate\Http\Request;

class DistribusiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data distribusi dengan relasi ke produksi
        $distribusi = Distribusi::with('produksi')->get();
        
        return view('distribusi.index', compact('distribusi'));
    }

    public function create()
    {
        // Mengambil semua data produksi untuk dipilih saat menambahkan distribusi
        $produksi = Produksi::all();
        return view('distribusi.create', compact('produksi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'produksi_id' => 'required|exists:produksi,id',
            'tujuan' => 'required|string',
            'jumlah' => 'required|integer',
            'tanggal_distribusi' => 'required|date',
        ]);

        Distribusi::create($request->all());
        return redirect()->route('distribusi.index')->with('success', 'Distribusi berhasil ditambahkan.');
    }

    public function edit(Distribusi $distribusi)
    {
        // Ambil data distribusi yang akan diedit berdasarkan ID
        $distribusi = Distribusi::findOrFail($id);

        // Ambil data produksi untuk dropdown
        $produksi = Produksi::all();

        // Kembalikan ke view dengan data distribusi dan produksi
        return view('distribusi.edit', compact('distribusi', 'produksi'));
    }

    public function update(Request $request, Distribusi $distribusi)
    {
        $request->validate([
            'produksi_id' => 'required|exists:produksi,id',
            'tujuan' => 'required|string',
            'jumlah' => 'required|integer',
            'tanggal_distribusi' => 'required|date',
        ]);

        $distribusi->update($request->all());
        return redirect()->route('distribusi.index')->with('success', 'Distribusi berhasil diperbarui.');
    }

    public function destroy(Distribusi $distribusi)
    {
        $distribusi->delete();
        return redirect()->route('distribusi.index')->with('success', 'Distribusi berhasil dihapus.');
    }
}
