<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
   <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="../index.html" class="brand-link"> <!--begin::Brand Image--> <img src="../../../dist/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">AdminLTE 4</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
   <div class="sidebar-wrapper">
       <nav class="mt-2"> <!--begin::Sidebar Menu-->
           <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
               <!-- Master Section -->
               <!-- Additional Sections -->
               <li class="nav-item">
                   <a href="/admin-dashboard" class="nav-link">
                       <i class="nav-icon fas fa-tachometer-alt"></i>
                       <p>Dashboard</p>
                   </a>
               </li>
               <li class="nav-item">
                   <a href="{{ route('kebun.index') }}" class="nav-link">
                       <i class="nav-icon fas fa-tree"></i>
                       <p>Data Kebun</p>
                   </a>
               </li>
               <li class="nav-item">
                   <a href="{{route('petugas.index')}}" class="nav-link">
                       <i class="nav-icon fas fa-user-tie"></i>
                       <p>Data Petugas</p>
                   </a>
               </li>
               <li class="nav-item">
                   <a href="/produksi" class="nav-link">
                       <i class="nav-icon fas fa-industry"></i>
                       <p>Data Produksi</p>
                   </a>
               </li>
               <li class="nav-item">
                   <a href="/distribusi" class="nav-link">
                       <i class="nav-icon fas fa-truck"></i>
                       <p>Data Distribusi</p>
                   </a>
               </li>
               <li class="nav-item">
                   <a href="/laporan" class="nav-link">
                       <i class="nav-icon fas fa-file-alt"></i>
                       <p>Data Laporan</p>
                   </a>
               </li>
               <li class="nav-item">
                   <a href="/pembayaran" class="nav-link">
                       <i class="nav-icon fas fa-money-check-alt"></i>
                       <p>Data Pembayaran</p>
                   </a>
               </li>
               <li class="nav-item">
                   <a href="/kategori-panen" class="nav-link">
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
           </ul> <!--end::Sidebar Menu-->
       </nav>
   </div> <!--end::Sidebar Wrapper-->
</aside> <!--end::Sidebar-->
