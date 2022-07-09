<?php require_once 'header-sidebar.php' ?>

<main id="main" class="main">
  <h1>Purchases Components</h1>

  <div class="modal fade" id="largeModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Purchase Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="process-purchaserawmaterials-add.php" method="POST">
          <div class="modal-body">


            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Requestor</label>
              <div class="col-sm-3">
                <input type="text" name="requestor" class="form-control" id="requestor">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Vendor</label>
              <div class="col-sm-10">
                <input type="text" name="vendor" class="form-control" id="itemname">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">PO Number</label>
              <div class="col-sm-10">
                <input type="number" name="POnumber" class="form-control">
              </div>
            </div>

            <div class="row mb-3">
              <label for="Supplier Name" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
                <input type="text" name="description" class="form-control" id="suppliername">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputDate" class="col-sm-2 col-form-label">PO Date</label>
              <div class="col-sm-10">
                <input type="date" name="POdate" class="form-control">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputDate" class="col-sm-2 col-form-label">Order Date</label>
              <div class="col-sm-10">
                <input type="date" name="POorderDate" class="form-control">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputDate" class="col-sm-2 col-form-label">Recieve Date</label>
              <div class="col-sm-10">
                <input type="date" name="POrecieveDate" class="form-control">
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="savecomp" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
          </div>



        </form>




      </div>

    </div>
  </div>
  </div>


  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#largeModal">
      Create New Purchase Order
    </button>
  </div>
  <!-------------------------------------------------------------------------------------->




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

      <!-- ------------------------------------------->


      <div class="card-body">
        <h5 class="card-title">Purchase Order Data <span>| Today</span></h5>

        <table class="table table-borderless datatable">
          <thead>
            <tr>

              <th scope="col">Requestor</th>
              <th scope="col">Vendor</th>
              <th scope="col">PO Number</th>
              <th scope="col">Description</th>
              <th scope="col">PO Date</th>
              <th scope="col">Order Date</th>
              <th scope="col">Recieve Date</th>

              <th scope="col">Actions</th>

            </tr>
          </thead>
          <tbody>
            <?php

            require_once 'conndb.php';

            $query = mysqli_query($data, "SELECT * FROM purchasecomponents");
            while ($row = mysqli_fetch_array($query)) {


            ?>
              <tr>

                <td><?php echo $row['requestor']; ?></td>
                <td><?php echo $row['vendor']; ?></td>
                <td><?php echo $row['PO#']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['po_date']; ?></td>
                <td><?php echo $row['order_date']; ?></td>
                <td><?php echo $row['recieve_date']; ?></td>
                <td>
                  <!--Call to action buttons-->
                  <ul class="list-inline m-0">

                    <!--modal pag magaadd taena ang gulo ng code ko -->
                    <li class="list-inline-item">

                      <div class="col-12">
                        <a href='purchases-components-print.php?print=<?php echo $row['id']; ?>'><button class="btn btn-info ri-printer-fill" type="button" data-bs-toggle="modal" data-bs-target="#verticalycentered"></button></a>
                        <div class="modal fade" id="verticalycentered" tabindex="-1">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Print Purchase Order Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Print Content Sample
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Print</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    <li class="list-inline-item">
                      <a href='delete-purchaseorder-components.php?delete=<?php echo $row['id']; ?>'><button class="btn btn-danger ri-delete-bin-6-line" name="btnDelete" type="button" data-toggle="tooltip" data-placement="top" title="Delete"></button></a>
                    </li>




                  </ul>
                </td>
              <?php }
            mysqli_close($data) ?>

      </div>

    </div>
  </div>


  </ul>
  </td>




  </tr>

  </li>






  </tbody>
  </table>

  </div>

  </div>
  </div>


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