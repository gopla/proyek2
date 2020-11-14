<?php
if (empty($this->session->userdata('id_admin'))) {
  redirect('login/admin');
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url("assets/plugins/fontawesome-free/css/all.min.css") ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url("assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css") ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url("assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css") ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url("assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") ?>">
  <link rel="stylesheet" href="<?= base_url("assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css") ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url("assets/dist/css/adminlte.min.css") ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url("assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url("assets/plugins/daterangepicker/daterangepicker.css") ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- ChartJS -->
  <script src="<?= base_url("assets/plugins/chart.js/Chart.min.js") ?>"></script>
  <style>
    .btn-lgt:hover span {
      color: #fff;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light navbar-warning">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="btn btn-outline-dark btn-lgt" href="<?= base_url("login/logout") ?>">
            <span><i class="fas fa-arrow-right    "></i></span>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark"><?= $contentTitle ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><?= $contentTitle ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->