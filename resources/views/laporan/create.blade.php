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

        <!-- Input untuk file path -->
        <div class="mb-3">
            <label for="file_path" class="form-label">File Laporan</label>
            <input type="file" name="file_path" id="file_path" class="form-control" required onchange="updateFileType()">
            <small class="form-text text-muted">Hanya file dengan ekstensi .pdf, .docx yang diperbolehkan.</small>
        </div>

        <!-- Input untuk file type (otomatis berdasarkan file path) -->
        <div class="mb-3">
            <label for="file_type" class="form-label">Jenis File</label>
            <input type="text" name="file_type" id="file_type" class="form-control" value="{{ old('file_type') }}" readonly>
        </div>

        <div class="mb-3">
            <label for="tanggal_laporan" class="form-label">Tanggal Laporan</label>
            <input type="date" name="tanggal_laporan" id="tanggal_laporan" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<script>
    function updateFileType() {
        const fileInput = document.getElementById('file_path');
        const fileTypeInput = document.getElementById('file_type');

        // Cek apakah ada file yang dipilih
        if (fileInput.files.length > 0) {
            const file = fileInput.files[0];
            const fileType = file.type;  // Mendapatkan tipe MIME file

            // Update input file_type dengan tipe file
            fileTypeInput.value = fileType;
        }
    }
</script>
@endsection
