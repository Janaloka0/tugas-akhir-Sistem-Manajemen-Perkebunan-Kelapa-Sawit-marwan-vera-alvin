@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Petugas</h1>
    <form action="{{ route('petugas.store') }}" method="POST">
        @csrf
        <!-- Input hidden untuk pengguna_id -->
        <input type="hidden" name="pengguna_id" value="{{ Auth::id() }}">

        <div class="form-group">
            <label for="nama_petugas">Nama Petugas</label>
            <input type="text" class="form-control" name="nama_petugas" id="nama_petugas" required>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <select name="jabatan" id="jabatan" class="form-control" required>
                <option value="">-- Pilih Jabatan --</option>
                <option value="Manajer">Manajer</option>
                <option value="Petugas Kebun">Petugas Kebun</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal_bergabung">Tanggal Bergabung</label>
            <input type="date" class="form-control" name="tanggal_bergabung" id="tanggal_bergabung" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('petugas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
