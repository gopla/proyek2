<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <style>
            ul.breadcrumb {
                padding: 10px 16px;
                list-style: none;
                background-color: rgba(255, 255, 255, 0.5);
            }
            ul.breadcrumb li {
                display: inline;
                font-size: 18px;
            }
            ul.breadcrumb li+li:before {
                padding: 8px;
                color: black;
            }
            ul.breadcrumb li a {
                color: #0275d8;
                text-decoration: none;
            }
            ul.breadcrumb li a:hover {
                color: #01447e;
                text-decoration: underline;
            }
            .vl {
                border-left: 6px solid black;
                height: 500px;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Admin Dashboard</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <h7 style="color:#e6e6e6;padding:6px;">Logout</h7>
            <i style="color:#e6e6e6"class="fas fa-arrow-right"></i>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="">
                                <div class="sb-nav-link-icon"><img src="image/3.png" alt=""></div>
                                Selamat Datang, Admin 
                                Jack
                            </a>
                            <div class="sb-sidenav-menu-heading">Main</div>
                            <a class="nav-link" href="<?= base_url('home') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Home
                            </a>
                            <a class="nav-link" href="<?= base_url('admin') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-server"></i></div>
                                Admin
                            </a>
                            <a class="nav-link" href="Calon">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Calon
                            </a>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-vote-yea"></i></div>
                                Hasil Pemilihan
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
