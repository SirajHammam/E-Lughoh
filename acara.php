<?php 
require "functions.php";

$model = query("SELECT * FROM informasi");


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
                <a class="nav-link" href="pendaftaran.php">Registration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="acara.php">Event</a>
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
          <h2>Event</h2>
          <p>Check About Event</p>
        </div>

        <?php foreach ($model as $ass) : ?>
          <div class="card mb-3" style="max-width: 1040px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src=" img/<?= $ass["foto acara"] ?> " class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"> <?= $ass["nama acara"] ?> </h5>
                  <p class="card-text"> <?= $ass["deskripsi"] ?> </p>
                  <p class="card-text"><small class="text-muted"> <?= $ass["berlansung"] ?> </small></p>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

        <hr class="featurette-divider bg-light">
      </div>
    </section><!-- End About Section -->
    
    <hr class="featurette-divider bg">
    
    

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
