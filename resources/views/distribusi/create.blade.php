// resources/views/distribusi/create.blade.php

@extends('layouts-admin.app')

@section('content')
<div class="container">
    <h1>Tambah Distribusi</h1>
    <form action="{{ route('distribusi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="produksi_id" class="form-label">Produksi</label>
            <select name="produksi_id" id="produksi_id" class="form-control" required>
                <option value="">-- Pilih Produksi --</option>
                @foreach($produksi as $item)
                    <option value="{{ $item->id }}">{{ $item->kebun->lokasi ?? 'Tidak ada kebun' }} - {{ $item->tanggal_panen }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tujuan" class="form-label">Tujuan</label>
            <input type="text" name="tujuan" class="form-control" id="tujuan" required>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" id="jumlah" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_distribusi" class="form-label">Tanggal Distribusi</label>
            <input type="date" name="tanggal_distribusi" class="form-control" id="tanggal_distribusi" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('distribusi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
