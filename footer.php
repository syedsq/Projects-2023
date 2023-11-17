<!-- Start Footer -->
<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white">Copyright &copy; <?php echo date("Y"); ?> | Flight School | <a href="/admin" class="text-white"><a href="#login" data-toggle="modal" data-target="#adminLoginModalCenter">Admin Login</a></small>
</footer>
<!-- End Footer -->

<!--Start Registratoin Modal-->


<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <i class="fas fa-user"></i>
            <label for="stuname" class="pl-2 font-weight-bold">Name</label>
            <input type="text" class="form-control" id="stuname" name="stuname" placeholder="Name">
          </div>
          <div class="form-group">
            <i class="fas fa-envelope"></i>
            <label for="stuemail" class="pl-2 font-weight-bold">Email</label>
            <input type="email" class="form-control" id="stuemail" name="stuemail" placeholder="Email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i>
            <label for="stupass" class="pl-2 font-weight-bold">New Password</label>
            <input type="password" class="form-control" id="stupass" name="stupass" placeholder="Password">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="addStu()" >Sign Up</button>
      </div>
    </div>
  </div>
</div>
<!-- End Registration Modal -->

<!-- Start Student login Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="stuLoginForm">

          <div class="form-group">
            <i class="fas fa-envelope"></i>
            <label for="stuLogemail" class="pl-2 font-weight-bold">Email</label>
            <input type="email" class="form-control" id="stuLogemail" name="stuLogemail" placeholder="Email">

          </div>
          <div class="form-group">
            <i class="fas fa-key"></i>
            <label for="stupass" class="pl-2 font-weight-bold">Password</label>
            <input type="password" class="form-control" id="stuLogpass" name="stuLogpass" placeholder="Password">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="stuLoginBtn">Login</button>
      </div>
    </div>
  </div>
</div>
<!-- End student Login Modal -->

<!-- Start Admin login Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="adminLoginForm">

          <div class="form-group">
            <i class="fas fa-envelope"></i>
            <label for="adminLogemail" class="pl-2 font-weight-bold">Email</label>
            <input type="email" class="form-control" id="adminLogemail" name="adminLogemail" placeholder="Email">

          </div>
          <div class="form-group">
            <i class="fas fa-key"></i>
            <label for="adminpass" class="pl-2 font-weight-bold">Password</label>
            <input type="password" class="form-control" id="adminLogpass" name="adminLogpass" placeholder="Password">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="aminLoginBtn">Login</button>
      </div>
    </div>
  </div>
</div>
<!-- End Admin Login Modal -->
