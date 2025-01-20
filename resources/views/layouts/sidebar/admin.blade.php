<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../../dist/assets/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="/admin-dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Data Pengguna -->
                <li class="nav-item">
                    <a href="{{ route('pengguna.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Data Pengguna</p>
                    </a>
                </li>

                <!-- Data Kebun -->
                <li class="nav-item">
                    <a href="{{ route('kebun.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>Data Kebun</p>
                    </a>
                </li>

                <!-- Data Petugas -->
                <li class="nav-item">
                    <a href="{{ route('petugas.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>Data Petugas</p>
                    </a>
                </li>

                <!-- Data Produksi -->
                <li class="nav-item">
                    <a href="{{ route('produksi.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-industry"></i>
                        <p>Data Produksi</p>
                    </a>
                </li>

                <!-- Data Distribusi -->
                <li class="nav-item">
                    <a href="{{ route('distribusi.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-truck"></i>
                        <p>Data Distribusi</p>
                    </a>
                </li>

                <!-- Data Laporan -->
                <li class="nav-item">
                    <a href="{{ route('laporan.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Data Laporan</p>
                    </a>
                </li>

                <!-- Data Pembayaran -->
                <li class="nav-item">
                    <a href="{{ route('pembayaran.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-money-check-alt"></i>
                        <p>Data Pembayaran</p>
                    </a>
                </li>

                <!-- Kategori Panen -->
                <li class="nav-item">
                    <a href="{{ route('kategori-panen.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Kategori Panen</p>
                    </a>
                </li>

                <!-- Logout -->
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
