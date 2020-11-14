<!DOCTYPE html>
<html lang="en">

<head>
  <title>Choice | Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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

</head>
<style>
  * {
    margin: 0;
    padding: 0;
  }

  .card {
    background: #fff;
    box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
    transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
    padding: 14px 20px 18px 36px;
    cursor: pointer;
  }

  .card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
  }

  .btn-lgt span {
    color: #fff;
  }

  .btn-lgt:hover span {
    color: #000;
  }
</style>

<body>
  <!-- Navbar -->
  <nav class=" navbar navbar-expand navbar-light navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <span class="nav-item"><img src="<?= base_url("assets/dist/img/wri.png") ?>" width="40px;" style="margin-top:5px;"></span></a>
      </li>
      <li>
        <span class="nav-item"><img src="<?= base_url("assets/dist/img/poltek.png") ?>" width="50px;"></span>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="btn btn-outline-light btn-lgt">
          <span>Caution: Pins can only be used once, Use them wisely~!</span>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <nav class=" navbar navbar-expand navbar-light navbar-warning" style="margin-bottom: 2%;">
  </nav>

  <div class="container">
    <div class="row">
      <?php foreach ($tableDatas as $data) : ?>
        <div class="col-sm-4">
          <div class="card">
            <img class="card-img-top" src="<?= base_url("assets/uploads/calon/$data->foto") ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?= $data->no_urut ?>. <?= $data->nama ?></h5>
              <p class="card-text"><?= $data->kelas ?></p>
              <p class="card-text"><?= $data->visimisi ?> </p>
              <form action="vote/pilih" method="post">
                <input type="hidden" name="id" value="<?= $data->id_calon ?>">
                <button type="submit" style="margin-left:70%;" class="btn btn-primary">
                    Pilih
                  <i class="fas fa-edit"></i>
                </a>
              </form>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>

  </div>

  <!-- Footer -->
  <footer class="page-footer font-small blue">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="http://wri.polinema.ac.id/"> Workshop Riset Informatics</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>