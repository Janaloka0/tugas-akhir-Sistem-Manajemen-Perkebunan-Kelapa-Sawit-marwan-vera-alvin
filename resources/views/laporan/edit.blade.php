@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Laporan</h1>
    <form action="{{ route('laporan.update', $laporan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="kebun_id" class="form-label">Kebun</label>
            <select name="kebun_id" id="kebun_id" class="form-control" required>
                <option value="">-- Pilih Kebun --</option>
                @foreach($kebun as $item)
                    <option value="{{ $item->id }}" {{ $laporan->kebun_id == $item->id ? 'selected' : '' }}>
                        {{ $item->lokasi }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Input untuk file path (file sebelumnya ditampilkan jika ada) -->
        <div class="mb-3">
            <label for="file_path" class="form-label">File Laporan</label>
            <input type="file" name="file_path" id="file_path" class="form-control" onchange="updateFileType()">
            <small class="form-text text-muted">Hanya file dengan ekstensi .pdf, .docx yang diperbolehkan.</small>

            <!-- Tampilkan link untuk file lama jika ada -->
            @if($laporan->file_path)
                <div class="mt-2">
                    <label>File Sebelumnya:</label>
                    <a href="{{ asset('storage/' . $laporan->file_path) }}" target="_blank">Download</a>
                </div>
            @endif
        </div>

        <!-- Input untuk file type (otomatis berdasarkan file path) -->
        <div class="mb-3">
            <label for="file_type" class="form-label">Jenis File</label>
            <input type="text" name="file_type" id="file_type" class="form-control" value="{{ old('file_type', $laporan->file_type) }}" readonly>
        </div>

        <div class="mb-3">
            <label for="tanggal_laporan" class="form-label">Tanggal Laporan</label>
            <input type="date" name="tanggal_laporan" id="tanggal_laporan" class="form-control" value="{{ old('tanggal_laporan', $laporan->tanggal_laporan) }}" required>
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
