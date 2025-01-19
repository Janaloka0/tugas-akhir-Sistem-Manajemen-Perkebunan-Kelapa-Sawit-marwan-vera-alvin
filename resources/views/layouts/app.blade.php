<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Include your CSS files here -->
</head>
<body>
    <!-- Header -->
    @include('layouts.header')

    <!-- Sidebar -->
    <div class="sidebar">
        @if(Auth::check())
            @if(Auth::user()->role == 'admin')
                @include('layouts.sidebar.admin')  <!-- Sidebar untuk Admin -->
            @elseif(Auth::user()->role == 'petugas_kebun')
                @include('layouts.sidebar.petugas_kebun')  <!-- Sidebar untuk Petugas Kebun -->
            @elseif(Auth::user()->role == 'manajer')
                @include('layouts.sidebar.manajer')  <!-- Sidebar untuk Manajer -->
            @else
                @include('layouts.sidebar.default')  <!-- Sidebar Default jika tidak ada role -->
            @endif
        @endif
    </div>

    <!-- Konten Utama -->
    <div class="content">
        @yield('content')  <!-- Konten utama yang akan berubah sesuai dengan tampilan -->
    </div>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Include JS files here -->
</body>
</html>
