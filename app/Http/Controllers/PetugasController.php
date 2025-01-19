<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Models\Pengguna;
use App\Http\Controllers\PenggunaController;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengguna = Pengguna::all(); // Mengambil semua pengguna untuk dropdown
        return view('petugas.create', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengguna = Pengguna::all();
        return view('petugas.create', compact('pengguna'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pengguna_id' => 'required|exists:pengguna,pengguna_id',
            'nama_petugas' => 'required',
            'jabatan' => 'required',
            'tanggal_bergabung' => 'required|date',
        ]);

        Petugas::create($request->all());

        return redirect()->route('petugas.index')->with('success', 'Petugas berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Petugas $petugas)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petugas $petugas)
    {
        $pengguna = Pengguna::all();
        return view('petugas.edit', compact('petugas', 'pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petugas $petugas)
    {
        $request->validate([
            'pengguna_id' => 'required|exists:pengguna,pengguna_id',
            'nama_petugas' => 'required',
            'jabatan' => 'required',
            'tanggal_bergabung' => 'required|date',
        ]);

        $petugas->update($request->all());

        return redirect()->route('petugas.index')->with('success', 'Petugas berhasil diperbarui');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugas $petugas)
    {
        $petugas->delete();

        return redirect()->route('petugas.index')->with('success', 'Petugas berhasil dihapus');
    
    }
}
