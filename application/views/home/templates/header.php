<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kris Rental Motor Semarang</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/assets_shop/') ?>/assets/logoorent.ico" />
    <link href="<?= base_url('assets/') ?>sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Link ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link ke Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url('assets/assets_shop/') ?>/css/styles.css" rel="stylesheet" />
    <style>
        /* Gaya CSS untuk animasi modal */
        .modal {
            display: none;
            /* Sembunyikan modal secara default */
        }

        /* Animasi untuk memunculkan modal */
        @keyframes fadeIn {
            from {
                opacity: 0.001;
            }

            to {
                opacity: 1;
            }
        }

        .modal.fade.show {
            display: block;
            /* Tampilkan modal ketika memiliki kelas 'fade' dan 'show' */
            animation: fadeIn 0.9s ease;
            /* Menggunakan animasi fadeIn yang sudah didefinisikan */
        }

        /* Animasi untuk menggeser posisi vertikal modal */
        @keyframes slideIn {
            from {
                transform: translateY(-30px);
            }

            to {
                transform: translateY(0);
            }
        }

        .modal.fade.show .modal-dialog {
            animation: slideIn 0.9s ease;
            /* Menggunakan animasi slideIn yang sudah didefinisikan */
        }
    </style>
</head>

<body style="background-color: #e3ddcf;" <?= $this->session->flashdata('pesan'); ?>>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg sticky-top shadow" style="background-color: #f9ba32;">
        <div class="container px-4 px-lg-5">
            <img src="<?php echo base_url('assets/assets_stis/img/logo.ico'); ?>" alt="Logo" width="40px">
            <h1>
                <a class="navbar-brand" href="#!"></a>
            </h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 ms-auto">
                    <li class="nav-item"><a class="nav-link <?php if ($this->uri->segment(1) == 'home' || $this->uri->segment(1) == null) echo 'active'; ?>" aria-current="page" href="<?php echo base_url('') ?>">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($this->uri->segment(1) == 'profil') echo 'active'; ?>" href="<?= base_url('profil'); ?>">Profil</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($this->uri->segment(1) == 'prosedur') echo 'active'; ?>" href="<?= base_url('prosedur'); ?>">Prosedur Penyewaan</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($this->uri->segment(1) == 'sk') echo 'active'; ?>" href="<?= base_url('sk'); ?>">Syarat dan Ketentuan</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($this->uri->segment(1) == 'kontak') echo 'active'; ?>" href="<?= base_url('kontak'); ?>">Kontak Kami</a></li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth'); ?>">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
