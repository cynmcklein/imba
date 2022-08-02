<?php require_once 'header-sidebar.php';
require_once 'includes/load.php';
?>

<main id="main" class="main">
    <h1>Order History</h1>

    <div class="card">
        <div class="card-body">


            <!-- Table with hoverable rows -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Plastic Type</th>
                        <th scope="col">Number of Colors</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Customer</th>

                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    require_once 'conndb.php';

                    $query = mysqli_query($data, "SELECT * FROM order_history");
                    while ($row = mysqli_fetch_array($query)) {


                    ?>
                        <tr>

                            <td><?php echo $row['product_name']; ?></td>


                            <td><?php echo $row['plastic_type']; ?></td>


                            <td><?php echo $row['number_colors']; ?></td>


                            <td><?php echo $row['qty']; ?></td>


                            <td><?php echo $row['customer_id']; ?></td>

                            <td><?php echo $row['Date']; ?></td>



                            <td>

                                <a href="edit-order-history.php?edit=<?php echo $row['id']; ?>"><button class="btn btn-success ri-contacts-fill" type="button" data-toggle="tooltip" data-placement="top" title="Edit"></button></a>
                                <a href='delete/delete-order-history.php?historydelete=<?php echo $row['id']; ?>'><button class="btn btn-danger ri-delete-bin-6-line" name="btnDelete" type="button" data-toggle="tooltip" data-placement="top" title="Delete"></button></a>

                            </td>
                        </tr>
                    <?php }
                    mysqli_close($data) ?>
                </tbody>
            </table>
            <!-- End Table with hoverable rows -->


            <!-- General Form Elements -->




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