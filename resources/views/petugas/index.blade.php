@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Petugas</h1>
    <a href="{{ route('petugas.create') }}" class="btn btn-primary mb-3">Tambah Petugas</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Petugas</th>
                <th>Jabatan</th>
                <th>Tanggal Bergabung</th>
                <th>Pengguna</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($petugas as $key => $petugasItem)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $petugasItem->nama_petugas }}</td>
                <td>{{ $petugasItem->jabatan }}</td>
                <td>{{ $petugasItem->tanggal_bergabung }}</td>
                <td>{{ $petugasItem->pengguna->id ?? 'Tidak ada pengguna' }}</td>
                <td>
                    <a href="{{ route('petugas.edit', $petugasItem->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('petugas.destroy', $petugasItem->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus petugas ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
