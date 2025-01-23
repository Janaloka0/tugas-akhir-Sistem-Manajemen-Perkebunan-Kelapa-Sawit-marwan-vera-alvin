<?php

namespace App\Http\Controllers;

use App\Models\Kebun;
use Illuminate\Http\Request;

class KebunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kebun = Kebun::all();
        return view('petugas.kebun.index', compact('kebun'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kebun.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'lokasi' => 'required|string|max:255',
            'luas' => 'required|integer',
            'status' => 'required|string|max:255',
            'tanggal_tanam' => 'required|date',
            'tanggal_panen' => 'required|date',
        ]);

        Kebun::create($request->all());

        return redirect()->route('kebun.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kebun $kebun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kebun $kebun)
    {
        return view('kebun.edit', compact('kebun'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kebun $kebun)
    {
        $request->validate([
            'lokasi' => 'required|string|max:255',
            'luas' => 'required|integer',
            'status' => 'required|string|max:255',
            'tanggal_tanam' => 'required|date',
            'tanggal_panen' => 'required|date',
        ]);

        $kebun->update($request->all());

        return redirect()->route('kebun.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kebun $kebun)
    {
        $kebun->delete();
        return redirect()->route('kebun.index');
    }
}
