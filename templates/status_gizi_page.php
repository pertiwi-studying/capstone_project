<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
              <a class="nav-link" href="#">Data Orang Tua</a>
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
      <h1 class="text-center wow fadeInUp">Status Gizi</h1>
      <form class="contact-form mt-5" action="data_anak_page.php" method="POST">
        <?php
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'db_nutrisi';

        $conn = mysqli_connect($host, $user, $password, $database);

        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        // Ambil data dari tabel tb_anak
        $query = "SELECT * FROM tb_anak ORDER BY nik_anak DESC LIMIT 1";
        $result = mysqli_query($conn, $query);

        // Check if the query was successful
        if ($result) {
          // Check if any rows were returned
          if (mysqli_num_rows($result) != 0) {
            // Tampilkan data anak
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<div class='row mb-3'>";
              echo "<div class='col-12 py-2 wow fadeInUp'>";
              echo "<strong>Nama:</strong> " . $row['nama_anak'];
              echo "</div>";
              echo "<div class='col-12 py-2 wow fadeInUp'>";
              echo "<strong>NIK:</strong> " . $row['nik_anak'];
              echo "</div>";
              echo "<div class='col-12 py-2 wow fadeInUp'>";
              echo "<strong>Tempat Lahir:</strong> " . $row['tempat_lahir_anak'];
              echo "</div>";
              echo "<div class='col-12 py-2 wow fadeInUp'>";
              echo "<strong>Tanggal Lahir:</strong> " . $row['tanggal_lahir_anak'];
              echo "</div>";
              echo "<div class='col-12 py-2 wow fadeInUp'>";
              echo "<strong>Jenis Kelamin:</strong> " . $row['jenis_kelamin_anak'];
              echo "</div>";
              echo "</div>";
            }
          } else {
            echo "No rows found.";
          }
        } else {
          echo "Error in query: " . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
        <p class="form-control">{{ prediction_text }}</p>
    </div>
  </div>
</body>

</html>


<!-- <form class="contact-form mt-5">
  <div class="row mb-3">
    <div class="col-sm-6 py-2 wow fadeInLeft">
      <label for="fullName">Name</label>
      <input type="text" id="fullName" class="form-control" placeholder="Full name..">
    </div>
    <div class="col-sm-6 py-2 wow fadeInRight">
      <label for="emailAddress">Email</label>
      <input type="text" id="emailAddress" class="form-control" placeholder="Email address..">
    </div>
    <div class="col-12 py-2 wow fadeInUp">
      <label for="subject">Subject</label>
      <input type="text" id="subject" class="form-control" placeholder="Enter subject..">
    </div>
    <div class="col-12 py-2 wow fadeInUp">
      <label for="message">Status Gizi</label>
      <p class="form-control">{{ prediction_text }}</p>
      