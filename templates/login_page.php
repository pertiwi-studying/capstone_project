<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>
  <div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Login</li>
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->
      <div class="page-section">
        <div class="container">
          <h1 class="text-center wow fadeInUp">Login to your account</h1>
    
          <form class="contact-form mt-5" action="login.php" method="POST">
            <div class="row mb-3">
              <div class="col-sm-6 py-2 wow fadeInLeft">
                <label for="fUsername">Username</label>
                <input type="text" id="username" class="form-control" placeholder="Username.." name="username">
              </div>
              <div class="col-sm-6 py-2 wow fadeInRight">
                <label for="Password">Password</label>
                <input type="text" id="password" class="form-control" placeholder="Your Password ... " name="password">
              </div>
            <button type="submit" class="btn btn-primary wow zoomIn">Login</button>
          </form>
        </div>
      </div>
    