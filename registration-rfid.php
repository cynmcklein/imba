<?php require_once 'header-sidebar.php';
require_once 'includes/load.php';
//session_start()
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>RFID Registration</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>

        <li class="breadcrumb-item active"><a href="registration-rfid.php">Register RFID</a></li>

      </ol>
    </nav>
  </div><!-- End Page Title -->


  <div class="col-12">
    <div class="card recent-sales">
      <div class="card-body">
        <br>
        <div class="center">
          <div class="card-title">
            <h3 align="center">Please Scan RFID</h3>
            <div class="col-md-12">
              <?php echo display_msg($msg); ?>
            </div>
          </div>
          <br>
          <form action="insertDB.php" method="post">

            <div class="col-md-12">
              <label for="inputName5" class="form-label">UID</label>
              <div class="col-md-12">
                <div class="col-sm-12">
                  <input type="text" name="id" class="form-control" id="itemname" value="<?php require_once 'UIDContainer.php';
                                                                                          ?>"></input>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <label for="inputName5" class="form-label">Code</label>
              <input type="text" name="code" class="form-control" id="companyName">
            </div>

            <div class="col-md-12">
              <label for="inputName5" class="form-label">Item Name</label>
              <input type="text" name="item_name" class="form-control" id="companyName">
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Material Type</label>
              <div class="col-sm-10">
                <select class="form-select" name="item_type" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option>Big Apple</option>
                  <option>Pelletized PE</option>
                  <option>Pelletized HD</option>
                  <option>LDPE</option>
                  <option>LLDPE</option>
                  <option>HDPE</option>
                  <option>PP</option>
                </select>
              </div>
            </div>

            <div class="col-md-12">
              <label for="inputName5" class="form-label">Supplier Name</label>
              <input type="text" name="supplier_name" class="form-control" id="companyName">
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>

        </div>
      </div> <!-- /container -->
    </div>
  </div>
</main>

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

<!-- <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script> -->

<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>



<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script>
  $(document).ready(function() {
    $('#table').DataTable();
  });
</script>
<?php require_once 'footerdemo.php' ?>

</body>

</html>