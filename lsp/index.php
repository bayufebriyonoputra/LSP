<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>LSP</title>
  </head>
  <body>
    


    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LSP Digital</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#cepat">Keunggulan</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link ">About Us</a>
        </li>

  

        <li class="nav-item">
          <a class="nav-link ">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <button class="btn btn-outline-success" type="submit"><a href="Login.php" class="text-decoration-none text-success">Login</a></button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4 animate__animated animate__fadeInUp">
            <img src="gambar.jpg" alt="" class="img-fluid ">
        </div>
    </div>

    <h1 class="text-center font-bold mt-5 animate__animated animate__fadeInUp animate__delay-1s">Sertifikasi Digital Talent Indonesia</h1>
    <p class="text-center animate__animated animate__fadeInUp animate__delay-1s mt-4 text-muted" style="line-height: 30px;">Merupakan lembaga sertifikasi indonesia yang berizin resmi
    </p>
    <h5 class="text-center font-bold animate__animated animate__fadeInUp animate__delay-1s "  id="cepat">Layanan Kami</h5>
</div>

<div class="container">
    <div class="row mt-5 animate__animated animate__fadeInLeft animate__delay-2s">
        <div class="col-md-4 text-center">
            <h5>Cepat</h5>
            <img src="save-energy.png" alt="" height="80px" class="mt-4">
            <p class="text-muted mt-4">Layanan kami sangat cepat proses verifikasi data juga cukup cepat sehingga menghasilkan layanan yang memuaskan</p>
        </div>

        <div class="col-md-4 text-center">
            <h5>Aman</h5>
            <img src="protection.png" alt="" height="80px" class="mt-4">
            <p class="text-muted mt-4">Data anda aman di kami kami tidak pernah menyebar data anda kesiapapun.</p>
        </div>

        <div class="col-md-4 text-center">
            <h5>Resmi</h5>
            <img src="medal.png" alt="" height="80px" class="mt-4">
            <p class="text-muted mt-4">Program kami resmi terdaftar di pemerintah sehingga anda tidak perlu khawatir soal keamanan.</p>
        </div>
    </div>
</div>


<section class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6" style="margin-top: 200px;">
        <h2 class="mt-5 me-2 ms-2">About Us</h2>
        <p class="text-muted">Mari mengenal kami lebih jauh</p>
        <p class="mt-4">Lembaga sertifikasi profesi atau LSP adalah lembaga yang melaksanakan aktivitas pengujian dan pemberian sertifikasi profesi. Artinya, kemampuan yang Anda miliki akan diakui dan mendapatkan lisensi resmi dari Badan Nasional Sertifikasi Profesi atau lebih dikenal dengan singkatan BNSP.</p>
      </div>

      <div class="col-md-6 d-flex justify-content-center" >
        <img src="customer.png" alt="" class="img-fluid ms-5">
      </div>

    </div>
  </div>
  
</section>

<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        
      </div>
    </div>
  </div>
</section>

<!-- Contact -->
<div class="mengontak">
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">
      <div class="container">  
        <form id="contact" action="" method="post">
          <h3>Contact Us</h3>
          <h4>Kontak kami jika ada permasalahan atau apapun</h4>
          <fieldset>
            <input placeholder="Your name" type="text" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Your Email Address" type="email" tabindex="2" required>
          </fieldset>
          <fieldset>
            <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
          </fieldset>
          <fieldset>
            <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
          </fieldset>
          <fieldset>
            <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
          </fieldset>
          <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
          </fieldset>
         
        </form>
      </div>
      
    </div>
  </div>
</div>



  <!-- Site footer -->
  <footer class="site-footer mt-5">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">Jika anda ingin mendapatkan sertifikat bertandar global maka anda bisa menghubungi LSP untuk mengikuti sertifikasi yang akan mendapat sertifikar berlaku secara global</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links">
            <li><a href="#">Sertifikasi</a></li>
            <li><a href="#">Informasi</a></li>
            <li><a href="#">Tata Cara</a></li>
           
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Contribute</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Sitemap</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
       <a href="#">Bayu Febriyono</a>.
          </p>
        </div>

        
      </div>
    </div>
</footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>