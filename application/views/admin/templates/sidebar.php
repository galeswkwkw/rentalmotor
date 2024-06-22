<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon ">
                <img src="<?php echo base_url('assets/assets_stis/img/logo.ico'); ?>" alt="Logo" width="40px">
            </div>
            <div class="sidebar-brand-text mx-3">Kris Rental Motor <sup>SMG</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Tables -->


        <li class="nav-item <?php if ($this->uri->segment(2) == 'dashboard') echo 'active'; ?>">
            <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Main Menu
        </div>

        <li class="nav-item <?php if ($this->uri->segment(2) == 'data_tipe') echo 'active'; ?>">
            <a class="nav-link" href="<?php echo base_url('admin/tipe') ?>">
                <i class="fas fa-fw fa-grip-horizontal"></i>
                <span>Tipe Motor</span></a>
        </li>
        <li class="nav-item <?php if ($this->uri->segment(2) == 'data_motor') echo 'active'; ?>">
            <a class="nav-link" href="<?php echo base_url('admin/motor') ?>">
                <i class="fas fa-fw fa-motorcycle"></i>
                <span>Motor</span>
            </a>
        </li>
        <li class="nav-item <?php if ($this->uri->segment(2) == 'diskon') echo 'active'; ?>">
            <a class="nav-link" href="<?php echo base_url('admin/diskon') ?>">
                <i class="fas fa-fw fa-random"></i>
                <span>Diskon</span></a>
        </li>
        <li class="nav-item <?php if ($this->uri->segment(2) == 'data_paket') echo 'active'; ?>">
            <a class="nav-link" href="<?php echo base_url('admin/paket') ?>">
                <i class="fas fa-fw fa-box"></i>
                <span>Paket Sewa</span></a>
        </li>
        <li class="nav-item <?php if ($this->uri->segment(2) == 'galeri') echo 'active'; ?>">
            <a class="nav-link" href="<?php echo base_url('admin/galeri') ?>">
                <i class="fas fa-fw fa-images"></i>
                <span>Galeri Testimoni</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Other
        </div>
        <li class="nav-item <?php if ($this->uri->segment(2) == 'data_pelanggan') echo 'active'; ?>">
            <a class="nav-link" href="<?php echo base_url('admin/pelanggan') ?>">
                <i class="fas fa-fw fa-user"></i>
                <span>Pelanggan</span></a>

        </li>
        <li class="nav-item <?php if ($this->uri->segment(2) == 'rekening') echo 'active'; ?>">
            <a class="nav-link" href="<?php echo base_url('admin/rekening') ?>">
                <i class="fas fa-fw fa-credit-card"></i>
                <span>Rekening</span></a>

        </li>
        <li class="nav-item <?php if ($this->uri->segment(2) == 'transaksi') echo 'active'; ?>">
            <a class="nav-link" href="<?php echo base_url('admin/transaksi') ?>">
                <i class="fas fa-fw fa-random"></i>
                <span>Transaksi</span></a>
        </li>

        <li class="nav-item <?php if ($this->uri->segment(2) == 'laporan') echo 'active'; ?>">
            <a class="nav-link" href="<?php echo base_url('admin/laporan') ?>">
                <i class="fas fa-fw fa-clipboard-list"></i>
                <span>Laporan</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Message -->
        <div class="sidebar-card d-none d-lg-flex">
            <p class="text-center mb-2"><strong>Hallo <?= $users['nama_depan'] ?></strong>
            </p>
        </div>

    </ul>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $users['nama_depan'] . " " . $users['nama_belakang'] ?></span>
                            <img class="img-profile rounded-circle" src="<?= base_url('assets/assets_stis/') ?>img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800" style="text-transform: capitalize;"><?= $title ?></h1>
                </div>
