@extends('layouts-admin.app')

@section('content')
<div class="container">
    <h1>Edit Pengguna</h1>
    <form action="{{ route('pengguna.update', $pengguna) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $pengguna->name }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ $pengguna->email }}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password (Opsional)</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="role" class="form-control" id="role" required>
                <option value="">-- Pilih Role --</option>
                <option value="admin" {{ $pengguna->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="petugas_kebun" {{ $pengguna->role == 'petugas_kebun' ? 'selected' : '' }}>petugas kebun</option>
                <option value="manajer" {{ $pengguna->role == 'manajer' ? 'selected' : '' }}>Manajer</option>
            </select>
        </div>
        <div class="d-flex justify-content-end mt-3">
            <a href="{{ route('pengguna.index') }}" class="btn btn-secondary me-2">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
@endsection
