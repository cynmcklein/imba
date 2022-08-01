<?php
require_once('includes/load.php');

require_once 'header-sidebar.php'; ?>

<main id="main" class="main">
    <div class="card-body">
        <h5 class="card-title">Notifications</h5>

        <?php


        include_once 'conndb.php';
        $sql = "SELECT * from rawmaterials";
        $query_products_run = mysqli_query($data, $sql);


        if ($products_total = mysqli_num_rows($query_products_run)) {
            //sample
            if ($products_total <= 10)
                echo '<a href="inventory-rawmaterials.php"><div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
                Raw Materials is dropping low.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div></a>';
        } else if ($pe_total <= 1) {
            echo '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Critical, Raw Materials is Empty, Please add new stock
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
        }

        $sql = "SELECT * from products";
        $query_products_run = mysqli_query($data, $sql);


        if ($products_total = mysqli_num_rows($query_products_run)) {
            //sample
            if ($products_total <= 10)
                echo '<a href="inventory-products.php"><div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
                Products is dropping low. 
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div></a>';
        } else if ($pe_total <= 1) {
            echo '<a href="inventory-products.php"><div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Critical, Products is Empty, Please add new stock
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div></a>';
        }

        $sql = "SELECT * from components";
        $query_products_run = mysqli_query($data, $sql);


        if ($products_total = mysqli_num_rows($query_products_run)) {
            //sample
            if ($products_total <= 10)
                echo '<a href="inventory-components.php"><div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
                Components is dropping low.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div></a>';
        } else if ($pe_total <= 1) {
            echo '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Critical, Components is Empty, Please add new stock
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
        }


        //Bigapple
        include_once 'conndb.php';

        //Pellet PE
        $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'Pelletized PE'";
        $query_pe_run = mysqli_query($data, $sql);


        if ($pe_total = mysqli_num_rows($query_pe_run)) {
            if ($pe_total <= 5) {
                echo '<a href="inventory-rawmaterials.php"><div class="alert alert-warning bg-warning text-light border-0 alert-dismissible fade show" role="alert">
                Warning, Pelletized PE dropping low.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div></a>';
            }
            //echo $pe_total;
        } else if ($pe_total <= 1) {
            echo '<a href="inventory-rawmaterials.php"><div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Critical, Pelletized PE is Empty, Please add new stock
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div></a>';
        }
        //pellet HD
        $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'Pelletized HD'";
        $query_hd_run = mysqli_query($data, $sql);


        if ($hd_total = mysqli_num_rows($query_hd_run)) {
            if ($hd_total <= 5) {
                echo '<a href="inventory-rawmaterials.php"><div class="alert alert-warning bg-warning text-light border-0 alert-dismissible fade show" role="alert">
                Warning, Pelletized HD dropping low.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div></a>';
            }
            // echo $hd_total;
        } else if ($hd_total <= 1) {
            echo '<a href="inventory-rawmaterials.php"><div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Critical, Pelletized HD is Empty, Please add new stock
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div></a>';
        }
        //LDPE
        $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'LDPE'";
        $query_ldpe_run = mysqli_query($data, $sql);


        if ($ldpe_total = mysqli_num_rows($query_ldpe_run)) {
            if ($ldpe_total <= 5) {
                echo '<a href="inventory-rawmaterials.php"><div class="alert alert-warning bg-warning text-light border-0 alert-dismissible fade show" role="alert">
               Warning, LDPE dropping low.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div></a>';
            }
            // echo $ldpe_total;
        } else if ($ldpe_total <= 1) {
            echo '<a href="inventory-rawmaterials.php"><div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Critical, LDPE is Empty, Please add new stock
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div></a>';
        }
        //LLDPE
        $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'LLDPE'";
        $query_lldpe_run = mysqli_query($data, $sql);


        if ($lldpe_total = mysqli_num_rows($query_lldpe_run)) {
            if ($lldpe_total <= 5) {
                echo '<a href="inventory-rawmaterials.php"><div class="alert alert-warning bg-warning text-light border-0 alert-dismissible fade show" role="alert">
                Warning, LLDPE dropping low.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div></a>';
            }
            //echo $lldpe_total;
        } else if ($lldpe_total <= 1) {
            echo '<a href="inventory-rawmaterials.php"><div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Critical, LLDPE is Empty, Please add new stock
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div></a>';
        }
        //HDPE
        $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'HDPE'";
        $query_hdpe_run = mysqli_query($data, $sql);


        if ($hdpe_total = mysqli_num_rows($query_hdpe_run)) {
            if ($hdpe_total <= 5) {
                echo '<a href="inventory-rawmaterials.php"><div class="alert alert-warning bg-warning text-light border-0 alert-dismissible fade show" role="alert">
                Warning, HDPE dropping low.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div></a>';
            }
            //echo $hdpe_total;
        } else if ($hdpe_total <= 1) {
            echo '<a href="inventory-rawmaterials.php"><div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Critical, HDPE is Empty, Please add new stock
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div></a>';
        }
        //PP
        $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'PP'";
        $query_pp_run = mysqli_query($data, $sql);


        if ($pp_total = mysqli_num_rows($query_pp_run)) {
            if ($pp_total <= 5) {
                echo '<a href="inventory-rawmaterials.php"><div class="alert alert-warning bg-warning text-light border-0 alert-dismissible fade show" role="alert">
                Warning, PP dropping low.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div></a>';
            }
            // echo $pp_total;
        } else if ($pp_total <= 1) {
            echo '<a href="inventory-rawmaterials.php"><div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Critical, PP is Empty, Please add new stock
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div></a>';
        }
        ?>

    </div>
    </div><!-- End Recent Activity -->

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

</body>

</html>