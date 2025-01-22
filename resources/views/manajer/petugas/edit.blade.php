@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Petugas</h1>
    <form action="{{ route('petugas.update', $petugas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="pengguna_id">Pengguna</label>
            <select name="pengguna_id" id="pengguna_id" class="form-control" required>
                <option value="">-- Pilih Pengguna --</option>
                @foreach($pengguna as $user)
                    <option value="{{ $user->pengguna_id }}" {{ $petugas->pengguna_id == $user->pengguna_id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nama_petugas">Nama Petugas</label>
            <input type="text" class="form-control" name="nama_petugas" id="nama_petugas" value="{{ $petugas->nama_petugas }}" required>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" id="jabatan" value="{{ $petugas->jabatan }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal_bergabung">Tanggal Bergabung</label>
            <input type="date" class="form-control" name="tanggal_bergabung" id="tanggal_bergabung" value="{{ $petugas->tanggal_bergabung }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('petugas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection