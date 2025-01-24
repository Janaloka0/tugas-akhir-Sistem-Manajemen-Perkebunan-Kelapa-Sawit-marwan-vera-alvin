<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
      <!--begin::Brand Link-->
      <a href="./index.html" class="brand-link">
        <!--begin::Brand Image-->
        <img
          src="../../dist/assets/img/AdminLTELogo.png"
          alt="AdminLTE Logo"
          class="brand-image opacity-75 shadow"
        />
        <!--end::Brand Image-->
        <!--begin::Brand Text-->
        <span class="brand-text fw-light">Petugas</span>
        <!--end::Brand Text-->
      </a>
      <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Tabel Kebun -->
                <li class="nav-item">
                    <a href="{{ route('kebun.create') }}" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>Data Kebun</p>
                    </a>
                </li>

                <!-- Tabel Produksi -->
                <li class="nav-item">
                    <a href="{{route('produksi.create')}}" class="nav-link">
                        <i class="nav-icon fas fa-industry"></i>
                        <p>Data Produksi</p>
                    </a>
                </li>

                <!-- Tabel Laporan -->
                <li class="nav-item">
                    <a href="{{route('laporan.create')}}" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Data Laporan</p>
                    </a>
                </li>

                <!-- Tabel Kategori Panen -->
                <li class="nav-item">
                    <a href="{{route('kategori-panen.create')}}" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Kategori Panen</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
  </aside>
