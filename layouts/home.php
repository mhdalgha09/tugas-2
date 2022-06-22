<?php
    if(!isset($_SESSION)){
      session_start();
    }
    if(isset($_SESSION['login'])){
      header ('location: '.URL.'/dashboard');
      exit();
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo URL; ?>/layouts/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo URL; ?>/layouts/assets/img/logo-listrik.png">

    <title>PLN</title>
  </head>
  <body>
    <form action="<?php echo URL; ?>/user/login" method="post" class="container-sm w-25 border p-3 position-absolute top-50 start-50 translate-middle bg-success text-center rounded-3">
        <div class="container">
            <h2 class="text-light">Selamat Datang</h2>
            <h1 class="text-light"> SISTEM INFORMASI PLN</h1>
            <img class="mb-4" src="<?php echo URL; ?>/layouts/assets/img/logo-listrik.png" alt="" width="72" height="72">
            <div class="row">
              <div class="w-100">
                <?php 
                if (isset($_SESSION['error']) && !empty(['error'])) {
                  echo '<div class="alert alert-danger text-start">'.$_SESSION['error'].'</div>';
                  unset($_SESSION['error']);
                }
                ?>
              </div>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control w-100" id="floatingPassword" placeholder="Email" name="email" required>
                <label for="floatingPassword">Email</label>
            </div>
            <div class="form-floating mb-4">
                <input type="password" class="form-control w-100" id="floatingPassword" placeholder="Password" name="password" required>
                <label for="floatingPassword">Kata Sandi</label>
            </div>
            <button type="submit" class="btn btn-primary w-50 mb-3" name="btn_masuk">Masuk</button>
          </div>
    </form>
    <p class="position-absolute top-100 start-50 translate-middle text-center mt-5">Copyright &copy; 2022<br></p> 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>