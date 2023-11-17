<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=David+Libre:wght@700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Flight School</title>
</head>
<body>
    <!--Header-->
    <?php include('./mainInclude/header.php'); ?>
    <!--Header End-->

    <!-- Start Video Background -->
    <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
            <video playsinline autoplay muted loop>
                <source src="video/banvid.mp4" type="video/mp4">
                <!-- Your browser does not support the video tag -->
            </video>
            <div class="vid-overlay"></div>
            <div class="vid-content">
              <h1 class="my-content"> Welcome to Flight School</h1>
              <small class="my-content">You ready to fly?</small><br>
              <!-- Updated to trigger the student registration modal -->
              <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#stuRegModalCenter">Start Now!</a>
            </div>
        </div>
    </div>
    <!-- End Video Background -->

    <!--Start  courses-->
    <div class="container mt-5">
      <h1 class="text-center">All Flight Training Courses</h1>
      <!-- Start Most Popular Flight Courses Card Deck -->
      <div class="card-deck mt-4">
        <!-- Card 1 -->
        <div class="card">
          <img src="image/PPL.png" class="card-img-top" alt="Private Pilot License" />
          <div class="card-body">
            <h5 class="card-title">Private Pilot License</h5>
            <p class="card-text">Start your journey to the skies with our Private Pilot License training, tailored for aspiring pilots.</p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>$5,000</del></small> <span class="font-weight-bolder">$4,500</span></p>
            <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="card">
          <img src="image/IRC.jpg" class="card-img-top" alt="Instrument Rating" />
          <div class="card-body">
            <h5 class="card-title">Instrument Rating Course</h5>
            <p class="card-text">Enhance your piloting skills with our Instrument Rating course, ensuring you can fly in a variety of weather conditions.</p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>$3,000</del></small> <span class="font-weight-bolder">$2,700</span></p>
            <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="card">
          <img src="image/CPT.jpg" class="card-img-top" alt="Commercial Pilot Training" />
          <div class="card-body">
            <h5 class="card-title">Commercial Pilot Training</h5>
            <p class="card-text">Take the next step in your aviation career with our Commercial Pilot Training program, designed for advanced learners.</p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>$10,000</del></small> <span class="font-weight-bolder">$9,000</span></p>
            <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
          </div>
        </div>
      </div>
      <!-- End Most Popular Flight Courses Card Deck -->
    </div>
    <!--End  courses-->
    </div>
    <!-- End Popular Flight Training Courses -->

    <!-- Start Contact Us -->
    <?php include('./contact.php'); ?>
    <!-- End Contact Us Container -->

    <!-- Start About Section -->
    <div class="container-fluid p-4" style="background-color: #E9ECEF">
        <div class="container" style="background-color: #E9ECEF">
            <div class="row text-center">
                <div class="col-sm">
                    <h5>About Flight School</h5>
                    <p>Flight School provides industry-leading pilot training programs with state-of-the-art facilities and experienced instructors, dedicated to launching successful careers in aviation.</p>
                </div>
                <!-- Additional columns or content can be added here -->
            </div>
        </div>
    </div>
    <!-- End About Section -->

    <!-- Footer -->
    <?php include('./mainInclude/footer.php'); ?>
    <!-- Footer End -->

    <!-- Required Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <!-- Additional Scripts -->
    <!-- Make sure to include your ajaxrequest.js file if it contains necessary functionality -->
    <script src="js/ajaxrequest.js"></script>

</body>
</html>
