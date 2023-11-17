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

    <style>
    .navbar-brand {
        color: #304cb2 !important; /* Changing the color of the main title */
    }
    .navbar-text {
        color: #304cb2 !important; /* Changing the color of the subtitle */
    }
</style>

    <title>Flight School</title>
</head>
<body>
    <!-- Start Nav -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light pl-5">
        <a class="navbar-brand" href="index.php">Flight School</a>
        <span class="navbar-text">You ready?</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav custom-nav pl-5">
                <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
                <li class="nav-item custom-nav-item"><a href="paymentStatus.php" class="nav-link">Payment</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Profile</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Logout</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link"data-toggle="modal" data-target="#stuLoginModalCenter">Login</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link"data-toggle="modal" data-target="#stuRegModalCenter">Signup</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!-- End Nav -->
