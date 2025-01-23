@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Pembayaran</h1>
    <form action="{{ route('pembayaran.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="produksi_id" class="form-label">Produksi</label>
            <select name="produksi_id" id="produksi_id" class="form-control" required>
                <option value="">-- Pilih Produksi --</option>
                @foreach ($produksi as $item)
                    <option value="{{ $item->id }}">{{ $item->id }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="jumlah_pembayaran" class="form-label">Jumlah Pembayaran</label>
            <input type="number" name="jumlah_pembayaran" id="jumlah_pembayaran" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_pembayaran" class="form-label">Tanggal Pembayaran</label>
            <input type="date" name="tanggal_pembayaran" id="tanggal_pembayaran" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
            <input type="text" name="metode_pembayaran" id="metode_pembayaran" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('pembayaran.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

