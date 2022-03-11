<?php 
require "functions.php";
// cek apakah tombol pernah di klik
if( isset($_POST["sub"]) ) {

    // ek apakah data  berhasil di tambahkan / tidak
    if( tambah2($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'pendaftaran3.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'pendaftaran3.php';
            </script>
        ";
    }
}


?>


<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Markaz Lughoh</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">
    <!-- Favicons -->
    <link href="img/logo.png" rel="icon">
    

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
    <body class="d-flex h-100 text-dark bg-success">
    
    <div class="container">
      <div class="card mt-2">
        <div class="card-header">
          <h2>
            Registration Form English
          </h2>
        </div>
        <div class="card-body">
          <form class="row g-3" action="" method="post" enctype="multipart/form-data">
            <div class="col-md-6">
              <label for="name" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name">
            </div>
            <div class="col-md-6">
              <label for="nameA" class="form-label">NIM</label>
              <input type="text" name="nameI" class="form-control" id="nameA" placeholder="Enter Your Name">
            </div>
            <div class="col-md-6">
              <label for="fakultas" class="form-label">Faculty</label>
              <input type="text" name="fakultas" class="form-control" id="fakultas" placeholder="Your Faculty">
            </div>
            <div class="col-md-4">
              <label for="prodi" class="form-label">Major</label>
              <input type="text" name="prodi" class="form-control" id="prodi" placeholder="Your Major ">
            </div>
            <div class="col-md-2">
              <label for="semester" class="form-label">Semester</label>
              <input type="text" name="semester" class="form-control" id="semester" placeholder="Semester">
            </div>
            <div class="col-md-3">
              <label for="lahir" class="form-label">Date Of Birth</label>
              <input type="text" name="lahir" class="form-control" id="lahir" placeholder="Your life..">
            </div>
            <div class="col-md-3">
              <label for="sex" class="form-label">Sex</label>
              <input type="text" name="sex" class="form-control" id="sex" placeholder="Your life..">
            </div>
            <div class="col-md-3">
              <label for="daerah" class="form-label">District</label>
              <input type="text" name="daerah" class="form-control" id="daerah" placeholder="Your life..">
            </div>
            <div class="col-md-3">
              <label for="hp" class="form-label">Number Phone</label>
              <input type="text" name="hp" class="form-control" id="hp" placeholder="Your Number">
            </div>
            <div class="col-md-6">
              <label for="transkip" class="form-label">Value transcript</label>
              <input type="file" name="transkip" class="form-control" id="transkip" multiple>
            </div>
            <div class="col-md-6">
              <label for="pembayaran" class="form-label">Payment receipt</label>
              <input type="file" name="pembayaran" class="form-control"  id="pembayaran" multiple>
            </div>

            <div class="col-12">
              <button type="submit" class="btn btn-primary" name="sub">Register</button>
            </div>
        </div>
          </form>
    </div>
  


    
  </body>
</html>
