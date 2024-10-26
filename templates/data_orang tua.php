<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Medical Informatics Capstone Project</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +62 812 1565 7172</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> micp.theaa@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Medical Informatics</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="home_page.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data.php">Data Anak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Data Orang Tua</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="status_gizi_page.php">Status Gizi</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Data Ibu</h1>
      <form class="contact-form mt-5" action="input_data.php" method="POST">
        <!-- <form class="contact-form mt-5"> -->
          <div class="row mb-3">
            <div class="col-12 py-2 wow fadeInUp">
              <label for="#">Nama</label>
              <input type="text" id="nama_anak" class="form-control" placeholder="Full Name" name="nama_anak" required>
            </div>
            <div class="col-12 py-2 wow fadeInUp">
              <label for="#">NIK</label>
              <input type="number" id="nik_anak" class="form-control"  placeholder="eg : 0000111122223333" name="nik_anak" required>
            </div>
            <div class="col-12 py-2 wow fadeInUp">
              <label for="#">Tempat Lahir</label>
              <input type="text" id="tempat_lahir_anak" class="form-control" placeholder="Place of Birth" name="tempat_lahir_anak" required>
            </div>
            <div class="col-12 py-2 wow fadeInUp">
              <label for="#">Tanggal Lahir</label>
              <input type="date" id="tanggal_lahir_anak" class="form-control" placeholder="Date of Birth" name="tanggal_lahir_anak" required>
            </div>
            <div class="col-12 py-2 wow fadeInUp">
              <label for="#">Jenis Kelamin</label>
              <select name="jenis_kelamin_anak" id="jenis_kelamin_anak" class="custom-select" required>
              <option value="" disabled selected>Select Gender</option>
              <option value="Perempuan">Female</option>
              <option value="Laki-Laki">Male</option>
              </select>
            </div>
            <div class="col-12 py-2 wow fadeInUp">
              <label for="#">Alamat</label>
              <input type="text" id="alamat_ibu" class="form-control" placeholder="Address" name="alamat_ibu" required>
            </div>
          <button type="submit" class="btn btn-primary wow zoomIn" name="tb_ibu">Submit</button>
        </form>
      </div>
    </div>

</body>
</html>