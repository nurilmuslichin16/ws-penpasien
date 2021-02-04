<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/index3.html" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIPENPAS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/" class="<?= $menu_open == "Dashboard" ? "nav-link active" : "nav-link"; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">Fungsional</li>
                <li class="<?= $menu_open == "Data Master" ? "nav-item menu-open" : "nav-item"; ?>">
                    <a href="#" class="<?= $menu_open == "Data Master" ? "nav-link active" : "nav-link"; ?>">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Data Master
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/dokter" class="<?= $menu_active == "Dokter" ? "nav-link active" : "nav-link"; ?>">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <i class="far fa fa-user-md nav-icon"></i>
                                <p>Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/jadwal-dokter" class="<?= $menu_active == "Jadwal Dokter" ? "nav-link active" : "nav-link"; ?>">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <i class="far fa-calendar-check nav-icon"></i>
                                <p>Jadwal Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cuti-dokter" class="<?= $menu_active == "Cuti Dokter" ? "nav-link active" : "nav-link"; ?>">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <i class="far fa-calendar-times nav-icon"></i>
                                <p>Cuti Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/poliklinik" class="<?= $menu_active == "Poliklinik" ? "nav-link active" : "nav-link"; ?>">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <i class="far fa fa-stethoscope nav-icon"></i>
                                <p>Poliklinik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/kamar" class="<?= $menu_active == "Kamar" ? "nav-link active" : "nav-link"; ?>">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <i class="far fa fa-bed nav-icon"></i>
                                <p>Kamar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?= $menu_open == "Pendaftaran" ? "nav-item menu-open" : "nav-item"; ?>">
                    <a href="#" class="<?= $menu_open == "Pendaftaran" ? "nav-link active" : "nav-link"; ?>">
                        <i class="nav-icon fas fa-book-medical"></i>
                        <p>
                            Pendaftaran
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/rawat-jalan" class="<?= $menu_active == "Rawat Jalan" ? "nav-link active" : "nav-link"; ?>">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <i class="far fa fa-capsules nav-icon"></i>
                                <p>Rawat Jalan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/rawat-inap" class="<?= $menu_active == "Rawat Inap" ? "nav-link active" : "nav-link"; ?>">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <i class="far fa fa-procedures nav-icon"></i>
                                <p>Rawat Inap</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/nomor-antrian" class="<?= $menu_open == "Nomor Antrian" ? "nav-link active" : "nav-link"; ?>">
                        <i class="nav-icon fas fa-hourglass-start"></i>
                        <p>
                            Nomor Antrian
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pasien" class="<?= $menu_open == "Pasien" ? "nav-link active" : "nav-link"; ?>">
                        <i class="nav-icon fas fa-user-injured"></i>
                        <p>
                            Pasien
                        </p>
                    </a>
                </li>
                <li class="<?= $menu_open == "Laporan" ? "nav-item menu-open" : "nav-item"; ?>">
                    <a href="#" class="<?= $menu_open == "Laporan" ? "nav-link active" : "nav-link"; ?>">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Laporan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/laporan-dokter" class="<?= $menu_active == "Laporan Dokter" ? "nav-link active" : "nav-link"; ?>">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <i class="far fa-copy nav-icon"></i>
                                <p>Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/laporan-jadwal-dokter" class="<?= $menu_active == "Laporan Jadwal Dokter" ? "nav-link active" : "nav-link"; ?>">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <i class="far fa-copy nav-icon"></i>
                                <p>Jadwal Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/laporan-pasien" class="<?= $menu_active == "Laporan Pasien" ? "nav-link active" : "nav-link"; ?>">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <i class="far fa-copy nav-icon"></i>
                                <p>Pasien</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/laporan-rawat-jalan" class="<?= $menu_active == "Laporan Rawat Jalan" ? "nav-link active" : "nav-link"; ?>">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <i class="far fa-copy nav-icon"></i>
                                <p>Rawat Jalan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/laporan-rawat-inap" class="<?= $menu_active == "Laporan Rawat Inap" ? "nav-link active" : "nav-link"; ?>">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <i class="far fa-copy nav-icon"></i>
                                <p>Rawat Inap</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">Non Fungsional</li>
                <li class="<?= $menu_open == "Profile" ? "nav-item menu-open" : "nav-item"; ?>">
                    <a href="#" class="<?= $menu_open == "Profile" ? "nav-link active" : "nav-link"; ?>">
                        <i class="nav-icon far fa-user-circle"></i>
                        <p>
                            Profile
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/ubah-profile" class="<?= $menu_active == "Ubah Profile" ? "nav-link active" : "nav-link"; ?>">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <i class="far fa fa-pencil-alt nav-icon"></i>
                                <p>Ubah Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/ubah-password" class="<?= $menu_active == "Ubah Password" ? "nav-link active" : "nav-link"; ?>">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <i class="far fa fa-key nav-icon"></i>
                                <p>Ubah Password</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?= $menu_open == "Manajemen Pengguna" ? "nav-item menu-open" : "nav-item"; ?>">
                    <a href="#" class="<?= $menu_open == "Manajemen Pengguna" ? "nav-link active" : "nav-link"; ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Manajemen Pengguna
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/pengguna-web" class="<?= $menu_active == "Pengguna Web" ? "nav-link active" : "nav-link"; ?>">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <i class="far fa fa-globe nav-icon"></i>
                                <p>Pengguna Web</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pengguna-mobile" class="<?= $menu_active == "Pengguna Mobile" ? "nav-link active" : "nav-link"; ?>">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <i class="far fa fa-mobile nav-icon"></i>
                                <p>Pengguna Mobile</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>