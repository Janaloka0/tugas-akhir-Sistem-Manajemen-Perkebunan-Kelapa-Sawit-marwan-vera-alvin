<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Kebun;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = Laporan::with('kebun')->get();
        return view('laporan.index', compact('laporan'));
    }

    public function create()
    {
        $kebun = Kebun::all();
        return view('laporan.create', compact('kebun'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kebun_id' => 'required|exists:kebun,id',
            'file_path' => 'required|file|mimes:pdf,docx',
            'file_type' => 'required|string',
            'tanggal_laporan' => 'required|date',
        ]);

        $filePath = $request->file('file_path')->store('laporan_files', 'public');

        Laporan::create([
            'kebun_id' => $request->kebun_id,
            'file_path' => $filePath,
            'file_type' => $request->file_type,
            'tanggal_laporan' => $request->tanggal_laporan,
        ]);

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil ditambahkan.');
    }


    public function edit($id)
    {
        $laporan = Laporan::findOrFail($id);
        $kebun = Kebun::all();
        return view('laporan.edit', compact('laporan', 'kebun'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kebun_id' => 'required|exists:kebun,id',
            'file_path' => 'nullable|file|mimes:pdf,docx',
            'file_type' => 'required|string',
            'tanggal_laporan' => 'required|date',
        ]);

        $laporan = Laporan::findOrFail($id);

        if ($request->hasFile('file_path')) {
            $filePath = $request->file('file_path')->store('laporan_files', 'public');
            $laporan->update(['file_path' => $filePath]);
        }

        $laporan->update([
            'kebun_id' => $request->kebun_id,
            'file_type' => $request->file_type,
            'tanggal_laporan' => $request->tanggal_laporan,
        ]);

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->delete();

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil dihapus.');
    }
}
