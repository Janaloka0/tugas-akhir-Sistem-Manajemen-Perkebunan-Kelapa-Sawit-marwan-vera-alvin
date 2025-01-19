<?php

namespace App\Http\Controllers;

use App\Models\Produksi;
use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data produksi dengan relasi ke kebun
        $produksi = Produksi::with('kebun')->get();
        return view('produksi.index', compact('produksi'));
    }

    public function create()
    {
        // Mengambil semua kebun untuk ditampilkan di dropdown
        $kebun = Kebun::all();
        return view('produksi.create', compact('kebun'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kebun_id' => 'required|exists:kebun,id',
            'jumlah_tandan' => 'required|integer',
            'berat_total' => 'required|numeric',
            'tanggal_panen' => 'required|date',
        ]);

        Produksi::create($request->all());

        return redirect()->route('produksi.index')->with('success', 'Produksi berhasil ditambahkan');
    }

    public function edit(Produksi $produksi)
    {
        $kebun = Kebun::all();
        return view('produksi.edit', compact('produksi', 'kebun'));
    }

    public function update(Request $request, Produksi $produksi)
    {
        $request->validate([
            'kebun_id' => 'required|exists:kebun,id',
            'jumlah_tandan' => 'required|integer',
            'berat_total' => 'required|numeric',
            'tanggal_panen' => 'required|date',
        ]);

        $produksi->update($request->all());

        return redirect()->route('produksi.index')->with('success', 'Produksi berhasil diperbarui');
    }

    public function destroy(Produksi $produksi)
    {
        $produksi->delete();

        return redirect()->route('produksi.index')->with('success', 'Produksi berhasil dihapus');
    }
}
