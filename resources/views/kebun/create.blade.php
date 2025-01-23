@extends('layouts.app')

@section('content')
<div class="mb-3">
    <label for="lokasi" class="form-label">Lokasi</label>
    <input type="text" name="lokasi" class="form-control" id="lokasi" value="{{ old('lokasi', $kebun->lokasi ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="luas" class="form-label">Luas</label>
    <input type="number" name="luas" class="form-control" id="luas" value="{{ old('luas', $kebun->luas ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <input type="text" name="status" class="form-control" id="status" value="{{ old('status', $kebun->status ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="tanggal_tanam" class="form-label">Tanggal Tanam</label>
    <input type="date" name="tanggal_tanam" class="form-control" id="tanggal_tanam" value="{{ old('tanggal_tanam', $kebun->tanggal_tanam ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="tanggal_panen" class="form-label">Tanggal Panen</label>
    <input type="date" name="tanggal_panen" class="form-control" id="tanggal_panen" value="{{ old('tanggal_panen', $kebun->tanggal_panen ?? '') }}" required>
</div>

<div class="d-flex justify-content-end mt-3">
    <a href="{{ route('kebun.index') }}" class="btn btn-secondary me-2">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>

@endsection
