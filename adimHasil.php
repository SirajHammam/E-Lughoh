<?php 

require 'functions.php';

//
if( isset($_POST["submit1"]) ) {

  // ek apakah data  berhasil di tambahkan / tidak
  if( tambah4($_POST) > 0) {  
    echo "
          <script>
              alert('data berhasil ditambahkan!');
              document.location.href = 'adimHasil.php';
          </script>
      ";
  } else {
      echo "
          <script>
              alert('data gagal ditambahkan!');
              document.location.href = 'adimHasil.php';
          </script>
      ";
  }
}

if( isset($_POST["submit2"]) ) {

  // ek apakah data  berhasil di tambahkan / tidak
  if( tambah5($_POST) > 0) {  
    echo "
          <script>
              alert('data berhasil ditambahkan!');
              document.location.href = 'adimHasil.php';
          </script>
      ";
  } else {
      echo "
          <script>
              alert('data gagal ditambahkan!');
              document.location.href = 'adimHasil.php';
          </script>
      ";
  }
}

$marka = query("SELECT pendaftarana.nameA, pendaftarana.name, pendaftarana.prodi, pendaftarana.semester, hasil_ujian_arab.mtholaah, hasil_ujian_arab.tabir, hasil_ujian_arab.Tarjamah FROM pendaftarana INNER JOIN hasil_ujian_arab ON pendaftarana.nameA = hasil_ujian_arab.nim");

$marka2 = query("SELECT pendaftarani.namai, pendaftarani.nama, pendaftarani.prodi, pendaftarani.semester, hasil_ujian_inggris.reading, hasil_ujian_inggris.listening, hasil_ujian_inggris.speaking, hasil_ujian_inggris.writing FROM pendaftarani INNER JOIN hasil_ujian_inggris ON pendaftarani.namai = hasil_ujian_inggris.nim");
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
            <a class="nav-link" href="adminInformasi.php">
              <span data-feather="shopping-cart"></span>
              Informasi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="adimHasil.php">
              <span data-feather="users"></span>
              Hasil Ujian
            </a>
          </li>
        </ul>

      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Hasil Ujian</h1>
      </div>

      <form action=""  method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Input Nilai Ujian Arab</h5>
                <div class="mb-3">
                  <label for="form-control" class="form-label">NIM</label>
                  <input name="nim1" type="text" class="form-control" id="nim">
                </div>
                <div class="mb-3">
                  <label for="form-control" class="form-label">Mutholaah</label>
                  <input name="mutolaah" type="text" class="form-control" id="mutolaah">
                </div>
                <div class="mb-3">
                  <label for="form-control" class="form-label">T'abir</label>
                  <input name="tabir" type="text" class="form-control" id="tabir">
                </div>
                <div class="mb-3">
                  <label for="form-control" class="form-label">Tarjamah</label>
                  <input name="tarjamah" type="text" class="form-control" id="tarjamah">
                </div>
              <button type="submit1" class="btn btn-success" name="submit1">Input</button>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
                <div class="mb-3">
                  <label for="form-control" class="form-label">NIM</label>
                  <input name="nim" type="text" class="form-control" id="nim">
                </div>
                <div class="mb-3">
                  <label for="form-control" class="form-label">Reading</label>
                  <input name="reading" type="text" class="form-control" id="reading">
                </div>
                <div class="mb-3">
                  <label for="form-control" class="form-label">Speaking</label>
                  <input name="speaking" type="text" class="form-control" id="speaking">
                </div>
                  <div class="row g-3 mb-3">
                    <div class="col-md-6">
                      <label for="form-control" class="form-label">Writing</label>
                      <input name="writing" type="text" class="form-control" id="writing">
                    </div>
                    <div class="col-md-6">
                      <label for="form-control" class="form-label">Listening</label>
                      <input name="listening" type="text" class="form-control" id="listening">
                    </div>
                  </div>
              <button type="submit2" class="btn btn-success" name="submit2">Input</button>
            </div>
          </div>
        </div>
      </div>
      </form>

      <hr class="featurette-divider bg-light">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Hasil Ujian Arab</h1>
      </div>

      <table class="table table-success">
          <thead>
            <tr>
              <th>id</th>
              <th>NIM</th>      
              <th>Nama</th>      
              <th>Prodi</th>      
              <th>Semester</th>      
              <th>Mutholaah</th>   
              <th>Tabir</th>   
              <th>Tarjamah</th>   
              <th>Rata-rata</th>   
            </tr>
          </thead>
          <tbody>

            <?php $i=1;?>
            <?php foreach($marka as $row) :?>

            <tr>
              <td> <?= $i?> </td>
              <td><?= $row["nameA"] ?></td>
              <td><?= $row["name"] ?></td>
              <td><?= $row["prodi"] ?></td>
              <td><?= $row["semester"] ?></td>
              <td><?= $row["mtholaah"] ?></td>
              <td><?= $row["tabir"] ?></td>
              <td><?= $row["Tarjamah"] ?></td>
              <td><?= number_format((($row["Tarjamah"] + $row["tabir"] + $row["mtholaah"]) / 3), 2, '.', ''); ?></td>
            </tr>

            <?php $i++; ?>
            <?php endforeach;?>

          </tbody>
        </table>
        
      <hr class="featurette-divider bg-light">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Hasil Ujian Inggris</h1>
      </div>
      
      <table class="table table-success">
          <thead>
            <tr>
              <th>id</th>
              <th>NIM</th>      
              <th>Nama</th>      
              <th>Prodi</th>      
              <th>Semester</th>      
              <th>Reading</th>   
              <th>Listening</th>   
              <th>speaking</th>   
              <th>Writing</th>   
              <th>Rata-rata</th>   
            </tr>
          </thead>
          <tbody>

            <?php $i=1;?>
            <?php foreach($marka2 as $row) :?>

            <tr>
              <td> <?= $i?> </td>
              <td><?= $row["namai"] ?></td>
              <td><?= $row["nama"] ?></td>
              <td><?= $row["prodi"] ?></td>
              <td><?= $row["semester"] ?></td>
              <td><?= $row["reading"] ?></td>
              <td><?= $row["listening"] ?></td>
              <td><?= $row["speaking"] ?></td>
              <td><?= $row["writing"] ?></td>
              <td><?= number_format((($row["reading"] + $row["listening"] + $row["speaking"] + $row["writing"]) / 4), 2, '.', ''); ?></td>
            </tr>

            <?php $i++; ?>
            <?php endforeach;?>
          </tbody>
        </table>

    </main>
    </div>
    </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
