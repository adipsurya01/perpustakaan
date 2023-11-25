
    
    
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: rgb(195, 214, 195)">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
        {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
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
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
                </a>
                
            </li>
            <li class="nav-item">
                <a href="/master-data" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Master Data
                    <i class="right fas fa-angle-down"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="/data-anggota" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Anggota</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/data-administrator" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Administrator</p>
                    </a>
                    </li>
                </ul>
            
                <li class="nav-item">
                    <a href="/data-pinjaman" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Katalog Buku
                        <i class="right fas fa-angle-down"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/data-buku" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Buku</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/data-kategori" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Kategori Buku</p>
                        </a>
                    </li>
                    </ul>
                </li>

            
                {{-- <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Pinjaman</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Top Navigation + Sidebar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/layout/boxed.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Boxed</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Fixed Sidebar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Fixed Sidebar <small>+ Custom Area</small></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/layout/fixed-topnav.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Fixed Navbar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/layout/fixed-footer.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Fixed Footer</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Collapsed Sidebar</p>
                    </a>
                </li>
                </ul>
            </li> --}}
            <li class="nav-item">
                <a href="/data-pinjaman" class="nav-link">
                <i class="nav-icon fas fa-book-reader"></i>
                <p>
                    Data Pinjaman
                    <i class="right fas fa-angle-down"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/peminjaman" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Peminjaman</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pengembalian" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pengembalian</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="/identitas-aplikasi" class="nav-link">
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