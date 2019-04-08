<!DOCTYPE html>
<html lang="en">
<?php include 'inc/header.php'; ?>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.php -->
        <?php include 'inc/navbar.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.php -->
            <?php include 'sidebar.php'; ?>
        <!-- partial -->
            <?php include 'ajax/dashboard.php'?>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.php -->
        <?php include 'inc/footer.php'; ?>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <?php include 'inc/js.php'; ?>

  </body>

</html>
