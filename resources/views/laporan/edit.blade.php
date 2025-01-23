@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Laporan</h1>
    <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="kebun_id" class="form-label">Kebun</label>
            <select name="kebun_id" id="kebun_id" class="form-control" required>
                <option value="">-- Pilih Kebun --</option>
                @foreach($kebun as $item)
                    <option value="{{ $item->id }}">{{ $item->lokasi }}</option>
                @endforeach
            </select>
        </div>
        <!-- Input untuk file path (ini akan diisi otomatis) -->
        <div class="mb-3">
            <label for="file_path" class="form-label">File Path</label>
            <input type="file" name="file_path" id="file_path" class="form-control" value="{{ old('file_path') }}" required oninput="updateFileType()">
        </div>

        <!-- Input untuk file type (otomatis berdasarkan file path) -->
        <div class="mb-3">
            <label for="file_type" class="form-label">File Type</label>
            <input type="text" name="file_type" id="file_type" class="form-control" value="{{ old('file_type') }}" readonly>
        </div>

        <div class="mb-3">
            <label for="tanggal_laporan" class="form-label">Tanggal Laporan</label>
            <input type="date" name="tanggal_laporan" id="tanggal_laporan" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
