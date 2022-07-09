<?php require_once 'header-sidebar.php';
require_once 'includes/load.php'; ?>

<main id="main" class="main">

  <h1>Inventory Products</h1>


  <div class="pagetitle">

    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="inventory-products.php">Inventory</a></li>

      </ol>
    </nav>
  </div>

  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>

  <section class="section">
    <div class="row">
      <div class="">

        <div class="card">


          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="inventory-products-add.php"><button type="button" class="btn btn-success">Add New Product</button></a>

          </div>


          <div class="card">
            <div class="card-body">




              <h5 class="card-title">Products</h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Code</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Item Type</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Quantity</th>
                    <!-- // <th scope="col">Status</th> -->
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  require_once 'conndb.php';

                  $query = mysqli_query($data, "SELECT * FROM products");
                  while ($row = mysqli_fetch_array($query)) {


                  ?>
                    <tr>

                      <td><?php echo $row['itemcode']; ?></td>

                      <td><?php echo $row['itemname']; ?></td>

                      <td><?php echo $row['itemtype']; ?></td>

                      <td><?php echo $row['customername']; ?></td>

                      <td><?php echo $row['quantity']; ?></td>


                      <td>

                        <a href="edit-inv-products.php?edit=<?php echo $row['id']; ?>"><button class="btn btn-success ri-contacts-fill" type="button" data-toggle="tooltip" data-placement="top" title="Edit"></button></a>
                        <a href='delete-inv-products.php?delete=<?php echo $row['id']; ?>'><button class="btn btn-danger ri-delete-bin-6-line" name="btnDelete" type="button" data-toggle="tooltip" data-placement="top" title="Delete"></button></a>

                      </td>




                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->


              <!-- General Form Elements -->




            </div>
          </div>

        </div>
  </section>

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
<?php require_once 'footerdemo.php' ?>

</body>

</html>