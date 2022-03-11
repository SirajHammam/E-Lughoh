<?php 

require 'functions.php';
// cek apakah tombol pernah di klik
if( isset($_POST["submit"]) ) {

  // ek apakah data  berhasil di tambahkan / tidak
  if( tambah3($_POST) > 0) {  
    echo "
          <script>
              alert('data berhasil ditambahkan!');
              document.location.href = 'adminInformasi.php';
          </script>
      ";
  } else {
      echo "
          <script>
              alert('data gagal ditambahkan!');
              document.location.href = 'adminInformasi.php';
          </script>
      ";
  }
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Markaz Lughoh</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Favicons -->
    <link href="img/logo.png" rel="icon">

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
    <link href="dashboard.css" rel="stylesheet">

  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-success flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">MARKAZ LUGHOH</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="index.php">Sign out</a>
    </li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="admin.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminAkun.php">
              <span data-feather="file"></span>
              Akun mahasiswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="adminInformasi.php">
              <span data-feather="shopping-cart"></span>
              Informasi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adimHasil.php">
              <span data-feather="users"></span>
              Hasil Ujian
            </a>
          </li>
        </ul>

      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Data Informasi</h1>
      </div>

      

      <form action="" method="post" enctype="multipart/form-data">

        <div class="mb-3">
          <label for="name" class="form-label">Nama Acara</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="masukkan judul kegiatan">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Berita Acara</label>
          <textarea name="berita" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
        </div>
        <div class="mb-3">
          <label for="foto" class="form-label">Foto Acara</label>
          <input type="file" name="foto" class="form-control"  id="foto" multiple>
        </div>
        <div class="mb-3">
          <label for="tgl" class="form-label">Tanggal Acara</label>
          <input type="text" name="tgl" class="form-control" id="tgl" placeholder="masukkan tanggal kegiatan">
        </div> <br>
        <div class="col-12">
          <button type="submit" class="btn btn-success" name="submit">Upload Acara</button>
        </div>

      </form>

    </main>
    </div>
    </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
