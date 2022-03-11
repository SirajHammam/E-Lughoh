<?php 
require 'functions.php';

if(isset($_POST["submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $pengguna = mysqli_query($link, "SELECT * FROM user WHERE nama = '$username'");

    // cek user setelah register
    // gunanya (mysqli_num_rows) untuk mengecek apakah ada nama pengguna yang sudah masuk
    if( mysqli_num_rows($pengguna) === 1) {

    // (password_verify) mengembalikan dari password_has (yang acak jadi semula unt mengecek)
        $user = mysqli_fetch_assoc($pengguna);
        if($password == $user["password"]) {
            header("Location: home.php");
            exit;
        }
    }
    $error = true;
}

// cek apakah tombol submit sudah di tekan atau belum 
if(isset($_POST["submit"])) {
  //cek username dan password
  if($_POST["username"] == "ad@min" && $_POST["password"] == "admin") {
      // jika benar, redirect ke halaman admin
      header("Location:admin.php");
      exit;
  } else {
  // jika salah, tampilkan pesan kesalahan
      $eror = true;
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
        <h1 class="h3 mb-3 fw-normal">Enter Account</h1>
        
        <label for="username" class="visually-hidden">Email address</label>
        <input type="email" name="username" id="username" class="form-control" placeholder="Email address">

        <label for="password" class="visually-hidden">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" autocomplete="off">

        <?php if( isset($error) ) : ?>
          <p style="color: red; font-style: italic;">
       
            email atau password salah!
          </p>
        <?php endif; ?>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">
          Log in
        </button>

        

        <p class="mt-5 mb-3 text-muted">did you have account? <a href="sig-in.php">create</a></p>
      </form>
    </main>


    
  </body>
</html>
