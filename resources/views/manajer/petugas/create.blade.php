@extends('layouts-admin.app')

@section('content')
<div class="container">
    <h1>Tambah Petugas</h1>
    <form action="{{ route('petugas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="pengguna_id">Pengguna</label>
            <select name="pengguna_id" id="pengguna_id" class="form-control" required>
                <option value="">-- Pilih Pengguna --</option>
                @foreach($pengguna as $user)
                    <option value="{{ $user->pengguna_id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nama_petugas">Nama Petugas</label>
            <input type="text" class="form-control" name="nama_petugas" id="nama_petugas" required>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" id="jabatan" required>
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
