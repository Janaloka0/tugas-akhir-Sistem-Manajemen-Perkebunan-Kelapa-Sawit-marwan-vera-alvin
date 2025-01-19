<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Produksi;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::with('produksi')->get();
        return view('pembayaran.index', compact('pembayaran'));
    }

    public function create()
    {
        $produksi = Produksi::all(); // Ambil semua data produksi
        return view('pembayaran.create', compact('produksi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'produksi_id' => 'required|exists:produksi,id',
            'jumlah_pembayaran' => 'required|numeric',
            'tanggal_pembayaran' => 'required|date',
            'metode_pembayaran' => 'required|string',
        ]);

        Pembayaran::create($request->all());
        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $produksi = Produksi::all();
        return view('pembayaran.edit', compact('pembayaran', 'produksi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'produksi_id' => 'required|exists:produksi,id',
            'jumlah_pembayaran' => 'required|numeric',
            'tanggal_pembayaran' => 'required|date',
            'metode_pembayaran' => 'required|string',
        ]);

        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->update($request->all());
        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->delete();
        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil dihapus.');
    }
}

