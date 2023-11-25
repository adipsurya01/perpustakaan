
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: rgb(195, 214, 195)">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
        <img src="{{asset('assets/img/logo.png')}}" alt=" " class="brand-image img-circle elevation-3" style="opacity: .8">
        <span style="color:rgb(0, 0, 0)"><strong>SMAN 1 Kota Bogor</strong></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar"style="background-color:#000851">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block">
                <p>Admin 1
                    <i class="right fas fa-angle-down" style="margin-left: 5px"></i>
                </p>
                
            </a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2" >
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="/dashboard" class="nav-link {{ $active == "dashboard" ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard 
                </p>
                </a>
                
            </li>
            <li class="nav-item {{ $active == "data-anggota" ? 'menu-is-opening menu-open' : ( $active == "data-administrator" ?  'menu-is-opening menu-open' : '' ) }}">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Master Data
                    <i class="right fas fa-angle-down"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="/data-anggota" class="nav-link {{ $active == "data-anggota" ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Anggota</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/data-administrator" class="nav-link {{ $active == "data-administrator" ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Administrator</p>
                    </a>
                    </li>
                </ul>
            
                <li class="nav-item {{ $active == "data-buku" ? 'menu-is-opening menu-open' : ( $active == "data-kategori" ?  'menu-is-opening menu-open' : '' ) }}">
                    <a href="/data-pinjaman" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Katalog Buku
                        <i class="right fas fa-angle-down"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/data-buku" class="nav-link {{ $active == "data-buku" ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Buku</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/data-kategori" class="nav-link {{ $active == "data-kategori" ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Kategori Buku</p>
                        </a>
                    </li>
                    </ul>
                </li>
            </li>
            <li class="nav-item {{ $active == "peminjaman" ? 'menu-is-opening menu-open' : ( $active == "data-pengembalian" ?  'menu-is-opening menu-open' : '' ) }}">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book-reader"></i>
                <p>
                    Data Pinjaman
                    <i class="right fas fa-angle-down"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/peminjaman" class="nav-link {{ $active == "peminjaman" ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Peminjaman</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pengembalian" class="nav-link {{ $active == "data-pengembalian" ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pengembalian</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="/identitas-aplikasi" class="nav-link {{ $active == "identitas-aplikasi" ? 'active' : '' }}">
                <i class="nav-icon fas fa-address-book"></i>
                <p>
                    Identitas Aplikasi
                </p>
                </a>
            </li>
            
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>