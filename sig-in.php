<?php 
require 'functions.php';

if(isset($_POST["register"])) {

    if( regi($_POST) > 0 ) {
        echo " <script> 
                alert('user baru berhasil ditambahkan!');
               </script>";
    } else {
        echo mysqli_error($link);
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

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <!-- Favicons -->
    <link href="img/logo.png" rel="icon">
    
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    
    <style>

      label {
            display: block;
      }

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
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="" method="post">
    <img class="mb-4" src="img/logo.png" alt="" width="72" height="90">

    <h1 class="h3 mb-3 fw-normal" >Please sign in</h1>
    <label for="username" class="visually-hidden">Your Email </label>
    <input type="email" name="username" id="username" class="form-control" placeholder="Your Email" required autofocus autocomplete="off">

    <label for="password" class="visually-hidden">Password</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required autocomplete="off">

    <label for="password2" class="visually-hidden">Confirm Password</label>
    <input type="password" name="password2" id="password2" class="form-control" placeholder="Confirm Password" required autocomplete="off">

    <div class="checkbox mb-3"> </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit" name="register">
      Sign in
    </button>

    <p class="mt-5 mb-3 text-muted">
      have you account? <a href="index.php">login</a>
    </p>
  </form>
</main>


    
  </body>
</html>
