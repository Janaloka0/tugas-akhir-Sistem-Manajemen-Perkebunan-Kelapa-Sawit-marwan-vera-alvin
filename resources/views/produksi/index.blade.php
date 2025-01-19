// resources/views/produksi/index.blade.php

@extends('layouts-admin.app')

@section('content')
<div class="container">
    <h1>Daftar Produksi</h1>
    <a href="{{ route('produksi.create') }}" class="btn btn-primary mb-3">Tambah Produksi</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kebun</th>
                <th>Jumlah Tandan</th>
                <th>Berat Total</th>
                <th>Tanggal Panen</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produksi as $key => $produksiItem)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $produksiItem->kebun->lokasi ?? 'Tidak ada kebun' }}</td>
                <td>{{ $produksiItem->jumlah_tandan }}</td>
                <td>{{ $produksiItem->berat_total }} kg</td>
                <td>{{ $produksiItem->tanggal_panen }}</td>
                <td>
                    <a href="{{ route('produksi.edit', $produksiItem->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('produksi.destroy', $produksiItem->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data produksi ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
