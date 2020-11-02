<!DOCTYPE html>
<html lang="en">
<head>
  <title>Choice | Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <!--Bootstrap CSS-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="{% static 'css/stylesheet.css'%}" type="text/css">
  
</head>
<style>
.card{
    border-radius: 4px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  padding: 14px 20px 18px 36px;
  cursor: pointer;
}

.card:hover{
     transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}
</style>
<body>

<nav class="navbar navbar-inverse" style="height: 90px;">
  <div class="container-fluid" style="margin-right:1000px;">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> <img src="image/wri.png" width="40px;" style="margin-top:5px;"></a> 
      <a class="navbar-brand" href="#"> <img src="image/poltek.png" width="50px;"></a> 
      <a class="navbar-brand" href="#" style="margin-left:850px; margin-top:-35px; font-color:#FFFFFF;"> Caution: Pins can only be used once, Use them wisely~!</a>
    </div>
   
    </div>
</nav>
  
<div class="container">
<div class="row">
  <div class="col-sm-4">
    <div class="card">
    <img class="card-img-top" src="image/poltek.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Naufal Yudhistira</h5>
        <p class="card-text">Jurusan Teknologi Informasi </p>
        <p class="card-text">Prodi Manajemen Informatika </p>
        <a style="margin-left:70%;"href="#" class="btn btn-primary btn-lg">Pilih <i class="fa fa-pencil-square" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
    <img class="card-img-top" src="image/poltek.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Irfak Wahyudi</h5>
        <p class="card-text">Jurusan Teknologi Informasi </p>
        <p class="card-text">Prodi Teknik Informatika </p>
        <a style="margin-left:70%;"href="#"class="btn btn-primary btn-lg">Pilih <i class="fa fa-pencil-square" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
    <img class="card-img-top" src="image/poltek.png" alt="Card image cap" width="50%;">
      <div class="card-body">
        <h5 class="card-title">Muhammad Misbaqul Ulum</h5>
        <p class="card-text">Jurusan Teknologi Informasi </p>
        <p class="card-text"> Prodi Teknik Mesin </p>
        <a style="margin-left:70%;"href="#" class="btn btn-primary btn-lg"> Pilih <i class="fa fa-pencil-square" aria-hidden="true"></i> </a>
      </div>
    </div>
  </div>
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