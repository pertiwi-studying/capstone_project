<!DOCTYPE html>
<html lang="en">
<head>
  <title>Medical Informatics Capstone Project</title>

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
              <li class="breadcrumb-item"><a href="home_page.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Get Predict</li>
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->
  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Input Data Criteria</h1>
      <form class="main-form" action="http://127.0.0.1:5000/predict" method="POST">
        <div class="row mt-5 ">
          <div class="col-12 py-2 wow fadeInUp">
            <input type="text" name= "tinggi" class="form-control" placeholder="Tinggi badan (cm)">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <input type="text" name= "berat" class="form-control" placeholder="Berat badan (kg)">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name= "lila" class="form-control" placeholder="Lingkar kepala (cm)">
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
      <div class="result-section mt-5">
        {% if prediction_text %}
            <h2 class="text-center wow fadeInUp">Prediction Result:</h2>
            <p class="text-center wow fadeInUp">{{ prediction_text }}</p>
        {% endif %}
    </div>    
    </div> <!-- .container -->
  </div> <!-- .page-section -->
</body>
</html>