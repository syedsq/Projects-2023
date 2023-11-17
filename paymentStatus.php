<!--Header-->
<?php include('./mainInclude/header.php'); ?>
<!--Header End-->
<!-- Start Course Page Banner -->
<div class="container-fluid bg-dark">
  <div class="row">
    <img src="./image/coursebanner.jpg" alt="courses" style="height:500px; width:100%; object-fit:cover; box-shadow:10px;" />
  </div>
</div>
<!-- End Course Page Banner -->
<h1>Payment</h1>

<!-- Start Main Content -->
<div class="container">
  <h2 class="text-center my-4">Payment Status</h2>
  <form method="post" action="">
    <div class="form-group row">
      <label class="offset-sm-3 col-form-label">Order ID: </label>
      <div>
        <input type="text" class="form-control mx-3" >
      </div>
      <div>
        <input type="submit" class="btn btn-primary mx-4" value="View">
      </div>
    </div>
  </form>
</div>
<!-- End Main Content -->

<!-- Start Contact Us -->
<div class="container">
<?php include('./contact.php'); ?>
<!-- End Contact Us Container -->

<!--Footer-->
<?php include('./mainInclude/footer.php'); ?>
<!--Footer End-->
