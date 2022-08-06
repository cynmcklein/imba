<?php require_once 'header-sidebar.php';
require_once 'includes/load.php';
//session_start()

?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Registered RFID</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>

        <li class="breadcrumb-item active"><a href="manage-rfid.php">Registered Items</a></li>

      </ol>
    </nav>
  </div><!-- End Page Title -->


  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
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
        <h5 class="card-title">Customer Overview <span>| Today</span></h5>

        <table class="table table-borderless datatable">

          <thead>
            <tr>

              <th scope="col">UID</th>
              <th scope="col">Code</th>
              <th scope="col">Item Name</th>
              <th scope="col">Material Type</th>
              <th scope="col">Supplier Name</th>

            </tr>

          </thead>
          <tbody>
            <?php

            require_once 'conndb.php';

            $query = mysqli_query($data, "SELECT * FROM rfiddb");
            while ($row = mysqli_fetch_array($query)) {


            ?>
              <tr>

                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['code']; ?></td>
                <td><?php echo $row['item_name']; ?></td>
                <td><?php echo $row['item_type']; ?></td>
                <td><?php echo $row['supplier_name']; ?></td>
                <td>
                  <!-- Call to action buttons -->



                  <a href="edit-customer.php?edit=<?php echo $row['id']; ?>"><button class="btn btn-success ri-contacts-fill" type="button" data-toggle="tooltip" data-placement="top" title="Edit"></button></a>
                  <a href='delete-rfid.php?delete=<?php echo $row['id']; ?>'><button class="btn btn-danger ri-delete-bin-6-line" name="btnDelete" type="button" data-toggle="tooltip" data-placement="top" title="Delete"></button></a>



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

<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>

<script>
  $(document).ready(function() {
    $('#datatableid').DataTable();
  });
</script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<?php require_once 'footerdemo.php' ?>

</body>

</html>