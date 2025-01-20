@extends('layouts-admin.app')

@section('content')
<div class="container">
    <h1>Daftar Laporan</h1>
    <a href="{{ route('laporan.create') }}" class="btn btn-primary mb-3">Tambah Laporan</a>
    <table class="table">
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
                    <td><a href="{{ asset('storage/' . $item->file_path) }}" target="_blank">Download</a></td>
                    <td>{{ $item->tanggal_laporan }}</td>
                    <td>
                        <!-- <a href="{{ route('laporan.edit', $item->id) }}" class="btn btn-warning">Edit</a> -->
                        <form action="{{ route('laporan.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
