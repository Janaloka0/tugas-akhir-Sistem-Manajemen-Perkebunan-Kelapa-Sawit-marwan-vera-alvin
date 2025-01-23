@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Dashboard manajer</h1>
        <div class="row">
            <!-- Ringkasan Data -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Data Kebun
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Jumlah Kebun: {{ $jumlahKebun }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
