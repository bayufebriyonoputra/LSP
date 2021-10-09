<!doctype html>
<html lang="en">
<?php session_start();
unset($_SESSION['user']) ?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
  <title>Login Form</title>
</head>

<body>
  <div class="container ">
    <div class="row d-flex justify-content-center text-center d-flex flex-column min-vh-100 justify-content-center align-items-center">
      <div class="col-12 col-md-6 col-sm-12 col-lg-4">
        <div class="card">
          <div class="card-header">
            <h4><b>Login Form</b></h4>
          </div>
          <?php if (isset($_SESSION['pesan'])) : ?>
            <div class="alert alert-warning" role="alert">
              <?= $_SESSION['pesan'] ?>
              <?php unset($_SESSION['pesan']) ?>
            </div>
          <?php endif ?>
          <div class="card-body">
            <div class="row d-flex justify-content-center">
              <div class="col-md-3 col-4 col-sm-4">
                <img src="protection.png" alt="" class="img-fluid">
              </div>
            </div>


            <h5 class="mt-3">Masukkan Username dan Password</h5>
            <form action="proses.php" method="post">
              <input type="text" class="form-control mt-4" placeholder="Username" name="user" required>
              <input type="password" class="form-control mt-2" placeholder="Password" name="pass" required>
              <div class="h-captcha mt-4" data-sitekey="5acb2830-0ab3-4d16-95ab-05c73d56bcd4"></div>
              <button type="submit" class="w-100 btn btn-primary btn-lg mt-5">Login</button>
            </form>

          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>