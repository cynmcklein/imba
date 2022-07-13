<?php require_once 'header-sidebar.php'; ?>

<main id="main" class="main">
  <h1>Product Details</h1>

  <?php require_once 'orders-new-order-form-process.php'; ?>
  <form action="orders-new-order-form-process.php" method="POST" class="row g-3">
    <div class="col-md-12">
      <label for="inputName5" class="form-label">Product Name</label>
      <input type="text" class="form-control" name="prodname" id="prodname">
    </div>

    <div class="col-md-4">
      <label for="inputState" class="form-label">Plastic Type</label>
      <select id="plastictype" name="plastictype" class="form-select">
        <option selected>Choose...</option>
        <option>Pelletized PE</option>
        <option>Pelletized HD</option>
        <option>LDPE</option>
        <option>LLDPE</option>
        <option>HDPE</option>
        <option>PP</option>
      </select>
    </div>

    <div class="col-md-4">
      <label for="inputAddress5" class="form-label">Number of Colors</label>
      <input type="number" class="form-control" name="numcolors" id="numcolors" placeholder="">
    </div>
    <div class="col-md-4">
      <label for="inputAddress2" class="form-label">Quantity</label>
      <input type="number" class="form-control" name="qty" id="qty" placeholder="">
    </div>

    <div class="col-md-4">
      <label for="inputAddress2" class="form-label">Customer ID</label>
      <input type="number" class="form-control" name="custid" id="custid" readonly>
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-primary">Add Data</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
  </form>

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