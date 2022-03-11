<?php 

require 'functions.php';
$markaz = query("SELECT pendaftarani.namai, pendaftarani.nama, pendaftarani.prodi, pendaftarani.semester, hasil_ujian_inggris.reading, hasil_ujian_inggris.listening, hasil_ujian_inggris.speaking, hasil_ujian_inggris.writing FROM pendaftarani INNER JOIN hasil_ujian_inggris ON pendaftarani.namai = hasil_ujian_inggris.nim");

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
          <h2>Ujian bahasa inggris</h2>
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
              <th>Reading</th>   
              <th>Listening</th>   
              <th>speaking</th>   
              <th>Writing</th>   
              <th>Rata-rata</th>   
            </tr>
          </thead>
          <tbody>

            <?php $i=1;?>
            <?php foreach($markaz as $row) :?>

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

            <a href="tes-bahasa.php" class="btn btn-primary">Back</a> <br><br>
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
