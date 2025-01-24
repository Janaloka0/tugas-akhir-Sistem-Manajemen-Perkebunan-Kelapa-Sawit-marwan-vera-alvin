@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Kebun</h1>
    <form action="{{ route('kebun.update', $kebun) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Lokasi -->
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" name="lokasi" class="form-control" id="lokasi" value="{{ old('lokasi', $kebun->lokasi ?? '') }}" placeholder="Masukkan lokasi kebun" required>
        </div>

        <!-- Luas -->
        <div class="mb-3">
            <label for="luas" class="form-label">Luas (Hektar)</label>
            <input type="number" name="luas" class="form-control" id="luas" value="{{ old('luas', $kebun->luas ?? '') }}" placeholder="Masukkan luas kebun" required>
        </div>

        <!-- Status -->
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-control" id="status" required>
                <option value="" disabled selected>Pilih Status</option>
                <option value="aktif" {{ old('status', $kebun->status ?? '') == 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="tidak aktif" {{ old('status', $kebun->status ?? '') == 'tidak aktif' ? 'selected' : '' }}>Tidak Aktif</option>
            </select>
        </div>

        <!-- Tanggal Tanam -->
        <div class="mb-3">
            <label for="tanggal_tanam" class="form-label">Tanggal Tanam</label>
            <input type="date" name="tanggal_tanam" class="form-control" id="tanggal_tanam" value="{{ old('tanggal_tanam', $kebun->tanggal_tanam ?? '') }}" required>
        </div>

        <!-- Tanggal Panen -->
        <div class="mb-3">
            <label for="tanggal_panen" class="form-label">Tanggal Panen</label>
            <input type="date" name="tanggal_panen" class="form-control" id="tanggal_panen" value="{{ old('tanggal_panen', $kebun->tanggal_panen ?? '') }}" required>
        </div>

        <!-- Button Kembali dan Simpan -->
        <div class="d-flex justify-content-end mt-3">
            <a href="{{ route('kebun.index') }}" class="btn btn-secondary me-2">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
@endsection
