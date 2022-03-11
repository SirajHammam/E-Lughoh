<?php 

require 'functions.php';
$markaz = query("SELECT * FROM pendaftarana WHERE keterangan = 'disetujui'");
$markaz2 = query("SELECT * FROM pendaftarani WHERE keterangan = 'disetujui' ");

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

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   


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
  <body>
  
  <div class="container marketing"> 
    <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top ">
        <div class="container-fluid">
        <a class="navbar-brand" href="home.php">
            <img src="img/logo1.png" width="30px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
                <a class="nav-link " href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="tes-bahasa.php">Language test</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="pendaftaran.php">Registration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="acara.php">Event</a>
            </li>
            
            </ul>
            <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Logout</button>
            </form>
        </div>
        </div>
    </nav>
    </header>

    <section id="about" class="about">
      <div class="container" data-aos="fade-up"> <br><br><br><br>

        <div class="section-title">
          <h2>pendaftaran</h2>
          <p>registration place</p>
        </div>

        <div class="card mb-3">
            <img src="img/arab.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Arabic Language</h5>
              <p class="card-text">
                before you take or start compiling a thesis, as for the conditions that you have to do, one of which is a language certification from the language center, therefore, here is the place for registration of the exam Arabic or English Language.</p>
              <a class="btn btn-lg btn-primary mt-4" href="pendaftaran2.php">Registration</a>
            </div>
        </div>
        <div class="card mb-3">
            <img src="img/inggris.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">English Language</h5>
              <p class="card-text">
                  
before you take or start compiling a thesis, as for the conditions that you have to do, one of which is a language certification from the language center, therefore, here is the place for registration of the exam Arabic or English Language.</p>
              <a class="btn btn-lg btn-primary mt-4" href="pendaftaran3.php">Registration</a>
            </div>
        </div>
        <hr class="featurette-divider bg">
      </div>
    </section><!-- End About Section -->
    
    <!--  -->
    <div class="row">
      <div class="section-title">
        <h2>pendaftaran</h2>
        <p>ujian bahasa Arab</p>
      </div>

      <table class="table table-success">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Faculty</th>
              <th>Major</th>
              <th>Semester</th>
              <th>Information</th>
            </tr>
          </thead>
          <tbody>

            <?php $i=1;?>
            <?php foreach($markaz as $row) :?>

            <tr>
              <td> <?= $i?> </td>
              <td><?= $row["name"] ?></td>
              <td><?= $row["fakultas"] ?></td>
              <td><?= $row["prodi"] ?></td>
              <td><?= $row["semester"] ?></td>
              <td><?= $row["keterangan"] ?></td>

            </tr>

            <?php $i++; ?>
            <?php endforeach;?>

          </tbody>
        </table>
      <hr class="featurette-divider bg">
    
      <div class="row">
      <div class="section-title">
        <h2>pendaftaran</h2>
        <p>ujian bahasa inggris</p>
      </div>

      <table class="table table-success">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Faculty</th>
              <th>Major</th>
              <th>Semester</th>
              <th>Information</th>
            </tr>
          </thead>
          <tbody>

            <?php $i=1;?>
            <?php foreach($markaz2 as $row) :?>

            <tr>
              <td> <?= $i?> </td>
              <td><?= $row["nama"] ?></td>
              <td><?= $row["fakultas"] ?></td>
              <td><?= $row["prodi"] ?></td>
              <td><?= $row["semester"] ?></td>
              <td><?= $row["keterangan"] ?></td>

            </tr>

            <?php $i++; ?>
            <?php endforeach;?>

          </tbody>
        </table>
      <hr class="featurette-divider bg">
    
    </div>
    <!--  -->

    
    

  </div><!-- /.container -->
    

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
