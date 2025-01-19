@extends('layouts-admin.app')

@section('content')
<div class="container">
    <h1>Edit Kategori Panen</h1>
    <form action="{{ route('kategori-panen.update', $kategori_panen->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_kategori" class="form-label">Nama Kategori</label>
            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="{{ $kategori_panen->nama_kategori }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control">{{ $kategori_panen->deskripsi }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('kategori-panen.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
