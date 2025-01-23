@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Distribusi</h1>
    <a href="{{ route('distribusi.create') }}" class="btn btn-primary mb-3">Tambah Distribusi</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Produksi</th>
                <th>Tujuan</th>
                <th>Jumlah</th>
                <th>Tanggal Distribusi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($distribusi as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->produksi->kebun->lokasi ?? 'Tidak ada kebun' }}</td>
                <td>{{ $item->tujuan }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->tanggal_distribusi }}</td>
                <td>
                    <a href="{{ route('distribusi.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('distribusi.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus distribusi ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
