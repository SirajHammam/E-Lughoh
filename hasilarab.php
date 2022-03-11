<?php 

require 'functions.php';
$markaz = query("SELECT pendaftarana.nameA, pendaftarana.name, pendaftarana.prodi, pendaftarana.semester, hasil_ujian_arab.mtholaah, hasil_ujian_arab.tabir, hasil_ujian_arab.Tarjamah FROM pendaftarana INNER JOIN hasil_ujian_arab ON pendaftarana.nameA = hasil_ujian_arab.nim");

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
  

  
  <div class="container marketing"> 

    <section id="about" class="about">
      <div class="container" data-aos="fade-up"> <br><br><br><br>

        <div class="section-title">
          <h2>Ujian bahasa arab</h2>
          <p>About Result Exam</p>
        </div>

    
    <!--  -->
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
            <?php foreach($markaz as $row) :?>

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

      <hr class="featurette-divider bg">
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
