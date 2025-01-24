@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Laporan</h1>
    <a href="{{ route('laporan.create') }}" class="btn btn-primary mb-3">Tambah Laporan</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kebun</th>
                    <th>File</th>
                    <th>Tanggal Laporan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($laporan as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->kebun->lokasi ?? 'Tidak ada' }}</td>
                        <td>
                            <a href="{{ asset('storage/' . $item->file_path) }}" target="_blank" class="btn btn-info btn-sm" data-toggle="tooltip" title="Download Laporan">
                                Download
                            </a>
                        </td>
                        <td>{{ \Carbon\Carbon::parse($item->tanggal_laporan)->format('d M Y') }}</td>
                        <td>
                            <!-- Tombol Edit (aktifkan jika perlu) -->
                            <a href="{{ route('laporan.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <!-- Tombol Hapus -->
                            <form action="{{ route('laporan.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip(); // Aktifkan tooltip
    });
</script>
@endpush
