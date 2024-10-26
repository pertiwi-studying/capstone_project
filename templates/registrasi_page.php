<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

  <div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Registration</li>
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Form Registration</h1>
    
      <form class="contact-form mt-5" action="registrasi.php" method="POST">
            <div class="row mb-3">
              <div class="col-12 py-2 wow fadeInUp">
                <label for="#">Nama</label>
                <input type="text" id="nama" class="form-control" placeholder="Your full name ..." name="nama" required>
              </div>
              <div class="col-sm-6 py-2 wow fadeInRight">
                <label for="#">Tempat lahir</label>
                <input type="text" id="tempat_lahir" class="form-control" placeholder="Your place of birth ..." name="tempat_lahir" required>
              </div>
              <div class="col-sm-6 py-2 wow fadeInLeft">
                <label for="#">Tanggal Lahir</label>
                <input type="date" id="tgl_lahir" class="form-control" name="tgl_lahir" required>
              </div>
              <div class="col-sm-6 py-2 wow fadeInLeft">
                <label for="#">NIK</label>
                <input type="number" id="nik" class="form-control" placeholder="eg : 0123456789000" name="nik" required>
              </div>
              <div class="col-sm-6 py-2 wow fadeInLeft">
                <label for="#">Nomor telepon</label>
                <input type="number" id="no_telp" class="form-control" placeholder="eg : 083535352" name="no_telp" required>
              </div>
              <div class="col-sm-6 py-2 wow fadeInLeft">
                   <label for="#">Jenis Kelamin</label>
                   <select name="jenis_kelamin" id="jenis_kelamin" class="custom-select" required>
                    <option value="" disabled selected>Select Gender</option>
                    <option value="Laki-laki">Female</option>
                    <option value="Perempuan">Male</option>
                  </select>
              </div>
              <div class="col-sm-6 py-2 wow fadeInLeft">
                <label for="#">Alamat</label>
                <input type="text" id="alamat" class="form-control" name="alamat" required>
              </div>
              <div class="col-sm-6 py-2 wow fadeInLeft">
                <label for="fUsername">Username</label>
                <input type="text" id="username" class="form-control" placeholder="Username.." name="username" required>
              </div>
              <div class="col-sm-6 py-2 wow fadeInLeft">
                <label for="fUsername">Password</label>
                <input type="text" id="password" class="form-control" placeholder="Username.." name="password" required>
              </div>
            <button type="submit" class="btn btn-primary wow zoomIn" name="tb_registrasi">Submit</button>
          </form>
        </div>
      </div>
</body>
</html>
