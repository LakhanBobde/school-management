<!DOCTYPE html>
<html lang="en">
 
<?php include 'inc/header.php'; ?>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-full-bg">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-dark text-left p-5">
                <h2>Login</h2>
                <h4 class="font-weight-light">Hello! let's get started</h4>
                <form class="pt-5">
                  <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                      <i class="mdi mdi-account"></i>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      <i class="mdi mdi-eye"></i>
                    </div>
                    <div class="mt-5">
                      <a class="btn btn-block btn-warning btn-lg font-weight-medium" href="https://omo24x7.github.io/cdn/s5admin/index.html">Login</a>
                    </div>
                    <div class="mt-3 text-center">
                      <a href="#" class="auth-link text-white">Forgot password?</a>
                    </div>
                  </form>                  
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <?php include 'inc/js.php'; ?>
</body>

</html>
