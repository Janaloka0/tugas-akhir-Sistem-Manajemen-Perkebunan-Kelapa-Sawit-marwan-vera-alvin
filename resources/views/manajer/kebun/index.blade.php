@extends('layouts-admin.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Kebun</h1>
    
    <a href="{{ route('kebun.create') }}" class="btn btn-primary mb-3">Tambah Kebun</a>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Lokasi</th>
                <th>Luas</th>
                <th>Status</th>
                <th>Tanggal Tanam</th>
                <th>Tanggal Panen</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kebun as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->lokasi }}</td>
                <td>{{ $item->luas }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->tanggal_tanam }}</td>
                <td>{{ $item->tanggal_panen }}</td>
                <td>
                    <a href="{{ route('kebun.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    
                    <!-- Button delete (trigger modal or confirmation) -->
                    <form action="{{ route('kebun.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kebun ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
