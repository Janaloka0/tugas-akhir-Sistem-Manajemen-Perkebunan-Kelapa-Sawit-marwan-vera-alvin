// resources/views/produksi/create.blade.php

@extends('layouts-admin.app')

@section('content')
<div class="container">
    <h1>Tambah Produksi</h1>
    <form action="{{ route('produksi.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="kebun_id">Kebun</label>
            <select name="kebun_id" id="kebun_id" class="form-control" required>
                <option value="">-- Pilih Kebun --</option>
                @foreach($kebun as $item)
                    <option value="{{ $item->id }}">{{ $item->lokasi }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="jumlah_tandan">Jumlah Tandan</label>
            <input type="number" class="form-control" name="jumlah_tandan" id="jumlah_tandan" required>
        </div>
        <div class="form-group">
            <label for="berat_total">Berat Total (kg)</label>
            <input type="number" step="0.01" class="form-control" name="berat_total" id="berat_total" required>
        </div>
        <div class="form-group">
            <label for="tanggal_panen">Tanggal Panen</label>
            <input type="date" class="form-control" name="tanggal_panen" id="tanggal_panen" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('produksi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
