@extends('layouts-petugas.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Profil Manajer</h1>

        <!-- Informasi Profil -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                Informasi Profil
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Nama:</strong> {{ Auth::user()->name }}</li>
                    <li class="list-group-item"><strong>Email:</strong> {{ Auth::user()->email }}</li>
                    <li class="list-group-item"><strong>Role:</strong> {{ Auth::user()->role }}</li>
                </ul>
            </div>
        </div>

        <!-- Laporan Sendiri -->
        <div class="card">
            <div class="card-header bg-info text-white">
                Laporan Saya
            </div>
            <div class="card-body">
                @if($laporan->isEmpty())
                    <p>Tidak ada laporan yang tersedia.</p>
                @else
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Kebun</th>
                                <th>File Laporan</th>
                                <th>Tanggal Laporan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($laporan as $lapor)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $lapor->kebun->lokasi }}</td>
                                    <td>
                                        <a href="{{ asset('storage/' . $lapor->file_path) }}" target="_blank" class="btn btn-primary btn-sm">
                                            Lihat Laporan
                                        </a>
                                    </td>
                                    <td>{{ $lapor->tanggal_laporan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
