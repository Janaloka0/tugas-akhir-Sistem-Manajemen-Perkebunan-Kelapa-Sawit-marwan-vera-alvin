@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pembayaran</h1>
    <a href="{{ route('pembayaran.create') }}" class="btn btn-primary mb-3">Tambah Pembayaran</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Produksi</th>
                <th>Jumlah Pembayaran</th>
                <th>Tanggal Pembayaran</th>
                <th>Metode Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembayaran as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->produksi->id ?? 'Tidak Ada' }}</td>
                <td>{{ $item->jumlah_pembayaran }}</td>
                <td>{{ $item->tanggal_pembayaran }}</td>
                <td>{{ $item->metode_pembayaran }}</td>
                <td>
                    <a href="{{ route('pembayaran.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pembayaran.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
