<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url("../assets/") ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?= base_url("../assets/") ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url("../assets/") ?>css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-primary static-top">

        <a class="navbar-brand mr-1" href="<?= base_url("DashboardController"); ?>">Produktivitas Tanaman Jagung</a>


        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <!-- <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div> -->
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
                  <a class="fas bg-primary text-white fa-sign-out-alt" href="<?= base_url("login") ?>" >Logout</a>
               <!--  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown"> -->
                   <!--  <a class="dropdown-item" href="#">Profil</a> -->
                     <!-- <div class="dropdown-divider"></div> -->
                   <!--  <a class="fas fa-sign-out-alt" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div> -->
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav navbar-item bg-primary">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url("DashboardController"); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <?php 
                if ($this->session->userdata('role') != 2) {
                    ?>
<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">================</h6>
                    <a class="dropdown-item" href="<?= base_url("KabupatenController"); ?>">Data Kabupaten</a>
                    <a class="dropdown-item" href="<?= base_url("TahunController"); ?>">Data Tahun</a>
                    <a class="dropdown-item" href="<?= base_url("BulanController"); ?>">Data Bulan</a>
                </div>
            </li>

                    <?php
                }
             ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url("DataAktualController"); ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Aktual</span></a>
            </li>
           <!--  <li class="nav-item">
                <a class="nav-link" href="<?= base_url("ProduksiController"); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Hasil</span></a>
            </li> -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Produktivitas</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">================</h6>
                    <a class="dropdown-item" href="<?= base_url("ProduktivitasDataAktualController"); ?>">Data Aktual</a>
                    <a class="dropdown-item" href="<?= base_url("ProduktivitasDataKabupatenController"); ?>">Data Kabupaten</a>
                   <!--  <a class="dropdown-item" href="<?= base_url("BulanController"); ?>">Data Bulan</a> -->
                </div>
            </li>
        </ul>

        <div id="content-wrapper">

            <div class="container-fluid">
                

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                       <!--  <div>
                        <a class="container-lg-margin 540px; "> Hallo <?= $this->session->userdata('username'); ?>!!!</a>
                            </div> -->
                        <a href="<?= base_url("DashboardController"); ?>">Home</a> 
                </ol>

