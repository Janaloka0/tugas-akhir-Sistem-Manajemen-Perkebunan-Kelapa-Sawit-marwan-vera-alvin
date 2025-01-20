@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Profil Petugas</h1>

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
    </div>
@endsection
