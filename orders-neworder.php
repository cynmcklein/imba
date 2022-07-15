<?php require_once 'header-sidebar.php'; ?>

<main id="main" class="main">
  <div class="card">
    <div class="card-body">
      <h2>Order New Product</h2>
      <h5 class="card-title">Customer Information</h5>

      <!-- Multi Columns Form -->
      <?php require_once 'process.php'; ?>
      <form class="row g-3" action="process.php" method="POST">
        <div class="col-md-12">
          <label for="inputName5" class="form-label">Company Name </label>
          <input type="text" name="companyName" class="form-control" id="companyName" required>
        </div>
        <div class="col-md-6">
          <label for="inputEmail5" class="form-label">Email </label>
          <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="col-md-6">
          <label for="inputPassword5" class="form-label">Contact Number </label>
          <input type="integer" name="contact" class="form-control" id="contact" required>
        </div>
        <div class="col-12">
          <label for="inputAddress5" class="form-label">Contact Person </label>
          <input type="text" name="conPerson" class="form-control" id="conPerson" required>
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Address </label>
          <input type="text" name="address" class="form-control" id="address" placeholder="Apartment, studio, or floor" required>
        </div>

    </div>
    <!-- <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Check me out
                      </label>
                    </div>
                  </div> -->
    <div class="text-center">



      <button type="submit" class="btn btn-primary" name="saveorder" data-bs-toggle="modal" data-bs-target="#basicModal">
        Next
      </button>




      <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
    </form><!-- End Multi Columns Form -->



</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="copyright">
    &copy; Copyright <strong><span>Big Apple Packaging Incorporated</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->

  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/chart.js/chart.min.js"></script>
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>