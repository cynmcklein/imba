<?php
require_once 'includes/load.php';
require_once 'header-sidebar.php'; ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Supplier Information</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>

        <li class="breadcrumb-item active"><a href="tab-supplier-info.php">Add Supplier</a></li>

      </ol>
    </nav>
  </div><!-- End Page Title -->



  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>



  <div class="modal fade" id="largeModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Add New Supplier</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <?php require_once 'process-supplier.php';
        ?>
        <form class="row g-3" action="process-supplier.php" method="POST">
          <div class="modal-body">
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
              <label for="inputAddress2" class="form-label">Address </label>
              <input type="text" name="address" class="form-control" id="address" placeholder="Apartment, studio, or floor" required>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary" name="save" data-bs-target="#basicmodal">Submit</button>


              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </div>
        </form>
      </div>


    </div>

  </div>
  </div>


  </div>

  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#largeModal">
      Add New Supplier
    </button>
  </div>





  <!-- ---------------------------------------------------------------------->



  </div>

  <!--------------------------------------------------------------------------->
  </div>

  </div>



  </div>
  </div>

  </div>
  </div>





  <div class="col-12">
    <div class="card recent-sales">

      <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          <li class="dropdown-header text-start">
            <h6>Filter</h6>
          </li>

          <li><a class="dropdown-item" href="#">Today</a></li>
          <li><a class="dropdown-item" href="#">This Month</a></li>
          <li><a class="dropdown-item" href="#">This Year</a></li>
        </ul>
      </div>

      <div class="card-body">
        <h5 class="card-title">Supplier Overview <span>| Today</span></h5>

        <table class="table table-borderless datatable">
          <thead>
            <tr>

              <th scope="col">Company Name</th>
              <th scope="col">Email</th>
              <th scope="col">Contact</th>
              <th scope="col">address</th>

            </tr>
          </thead>
          <tbody>
            <?php

            require_once 'conndb.php';

            $query = mysqli_query($data, "SELECT * FROM supplier");
            while ($row = mysqli_fetch_array($query)) {


            ?>
              <tr>

                <td><?php echo $row['company']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td>
                  <a href='edit-supplier.php?edit=<?php echo $row['id']; ?>'>
                    <button class="btn btn-success ri-contacts-fill" type="button" data-toggle="tooltip" data-placement="top" title="Edit"></button>
                  </a>
                  <a href='delete-supplier.php?suppdelete=<?php echo $row['id']; ?>'><button class="btn btn-danger ri-delete-bin-6-line" name="btnSuppDelete" type="button" data-toggle="tooltip" data-placement="top" title="Delete"></button></a>



                </td>
              </tr>
            <?php }
            mysqli_close($data) ?>


          </tbody>
        </table>

      </div>

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

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>