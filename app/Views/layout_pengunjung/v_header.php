<body data-background-color="bg3">
    <div class="wrapper compact-wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">
                <!--  "<= base_url();?>/img/logo/Logo.png" -->
                <a href="/web" class="logo ml-auto mr-auto">
                    <img src="<?= base_url(); ?>/img/logo/logo.png" alt="navbar brand" class="navbar-brand" height="55">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                <div class="container-fluid">
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown hidden-caret">
                            <a href="<?= base_url('auth/login') ?>" class="btn btn-default btn-sm dropdown-toggle">
                                <strong>LOGIN</strong>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>


        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="info container">
                            <a class="text-center " href="<?= base_url('auth/login') ?>">
                                <span style="font-size: 17px; font-weight: 700;">
                                    <strong>LOGIN</strong>
                                </span>
                            </a>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item">
                            <a href="/pengunjung" class="collapsed">
                                <i class="fas fa-home"></i>
                                <p>Beranda</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#base">
                                <i class="fas fa-layer-group"></i>
                                <p>Cari Lowongan</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="/pengunjung/daftar_lowongan">
                                            <span class="sub-item">Cari Lowongan</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pengunjung/cariteman">
                                            <span class="sub-item">Cari Seseorang</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pengunjung/keahlian">
                                            <span class="sub-item">Cari Keahlian</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="/pengunjung/perusahaan" class="collapsed">
                                <i class="fas fa-industry"></i>
                                <p>Daftar Perusahaan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pengunjung/tentangapp" class="collapsed">
                                <i class="fas fa-info-circle"></i>
                                <p>Tentang</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <!-- =============================================== -->
        <div class="main-panel">