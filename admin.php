<?php 

require 'functions.php';
$markaz = query("SELECT * FROM pendaftarana");
$markaz2 = query("SELECT * FROM pendaftarani");

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
            <a class="nav-link active" aria-current="page" href="admin.php">
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
        <h1 class="h2">Daftar Ujian Bahasa Arab</h1>
      </div>

      

      <table class="table table-success">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NIM</th>
              <th>Fakultas</th>
              <th>Prodi</th>
              <th>Semester</th>
              <th>Lahir</th>
              <th>Sex</th>
              <th>Asal</th>
              <th>No HP</th>
              <th>Trans</th>
              <th>Pemba</th>
              <th>Status</th>
              <th>Ket</th>
            </tr>
          </thead>
          <tbody>

            <?php $i=1;?>
            <?php foreach($markaz as $row) :?>

            <tr>
              <td> <?= $i?> </td>
              <td><?= $row["name"] ?></td>
              <td><?= $row["nameA"] ?></td>
              <td><?= $row["fakultas"] ?></td>
              <td><?= $row["prodi"] ?></td>
              <td><?= $row["semester"] ?></td>
              <td><?= $row["lahir"] ?></td>
              <td><?= $row["sex"] ?></td>
              <td><?= $row["daerah"] ?></td>
              <td><?= $row["hp"] ?></td>
              <td>
                <a href="Transkip/<?= $row['transkip']?>" target=blank>View</a>
              </td>
              <td>
                <a href="Pembayaran/<?= $row['pembayaran']?>" target=blank>View</a>
              </td>
              <td>
                <a href=" edit2.php?id=<?= $row["id"]; ?>">Acc</a>
              </td>
              <td><?= $row["keterangan"] ?></td>
            </tr>

            <?php $i++; ?>
            <?php endforeach;?>

          </tbody>
        </table>

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Ujian Bahasa Inggris</h1>
      </div>

      <div class="table-responsive">
        <table class="table table-success">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NIM</th>
              <th>Fakultas</th>
              <th>Prodi</th>
              <th>Semester</th>
              <th>Lahir</th>
              <th>Sex</th>
              <th>Asal</th>
              <th>No HP</th>
              <th>Trans</th>
              <th>Pemba</th>
              <th>Aksi</th>
              <th>Ket</th>
            </tr>
          </thead>
          <tbody>
            
            <?php $i=1;?>
            <?php foreach($markaz2 as $roq) :?>
              
            <tr>
              <td> <?= $i?> </td>
              <td><?= $roq["nama"] ?></td>
              <td><?= $roq["namai"] ?></td>
              <td><?= $roq["fakultas"] ?></td>
              <td><?= $roq["prodi"] ?></td>
              <td><?= $roq["semester"] ?></td>
              <td><?= $roq["lahir"] ?></td>
              <td><?= $roq["sex"] ?></td>
              <td><?= $roq["daerah"] ?></td>
              <td><?= $roq["hp"] ?></td>
              <td>
                <a href="Transkip/<?= $roq['transkip']?>" target=blank>View</a>
              </td>
              <td>
                <a href="Pembayaran/<?= $roq['pembayaran']?>" target=blank>View</a>
              </td>
              <td>
                <a href=" edit.php?id=<?= $roq["id"]; ?>">Acc</a>
              </td>
              <td><?= $roq["keterangan"] ?></td>
            </tr>

            <?php $i++; ?>
            <?php endforeach;?>
            
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
