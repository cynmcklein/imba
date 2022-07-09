<?php
require_once 'production-header-sidebar.php';
//require_once 'includes/load.php';
//require_once 'headerdemo.php';
?>

<style>
    .border {
        border: 3px rgb(28, 184, 65) solid;
        padding: 5px;
        width: 320px;
        height: 258px;


    }
</style>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Scan RFID for Products</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="production.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="scan-rawmaterials.php">Scan Product</a></li>

            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-7">
                <div class="row">

                    <div class="card">

                        <h5 class="card-title">Product Description</h5>

                        <!-- General Form Elements -->

                        <?php require_once 'process-rawmaterials-add.php' ?>

                        <form action="process-rawmaterials-add.php" method="POST">
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Item Code</label>
                                <div class="col-sm-3">
                                    <input type="text" name="itemcode" class="form-control" id="itemcode">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Item Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="itemname" class="form-control" id="itemname">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Material Type</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="itemtype" aria-label="Default select example" id="itemtype">
                                        <option selected>Open this select menu</option>

                                        <option>Pelletized PE</option>
                                        <option>Pelletized HD</option>
                                        <option>LDPE</option>
                                        <option>LLDPE</option>
                                        <option>HDPE</option>
                                        <option>PP</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Supplier Name" class="col-sm-2 col-form-label">Supplier Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="suppliername" class="form-control" id="suppliername">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Supplier Name" class="col-sm-2 col-form-label">Quantity</label>
                                <div class="col-sm-3">
                                    <input type="number" name="quantity" class="form-control" id="quantity">
                                </div>
                            </div>




                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" name="save" class="btn btn-primary">Add Item</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>



            <!-- side bar -->
            <div class="col-lg-5">
                <div class="col-md-10">
                    <div class="liveWebCam" valign="top">
                        <div class="border border-success" id="liveWebCamText">
                            RFID Scan Information:<br>
                            <script>
                                document.write(webcam.get_html(300, 220));
                            </script>
                        </div>
                        <br /><button type="button" class="btn btn-success btn-sm" onClick="take_snapshot()">
                            CAPTURE
                            &nbsp;
                            <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                        </button>

                    </div>
                    <div hidden class="capturedPhoto" valign="top">
                        <div id="upload_results" class="border">
                            RFID info<br>
                            <img src="logo.jpg" width="300" height="220" />
                        </div>
                        <br />
                        <button type="button" class="btn btn-sm btn-danger" id="buttonTryAgain">TRY AGAIN
                            &nbsp;
                            <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                        </button>
                    </div>

                    <br /><br /><br /><br /><br /><br />

                    <div class="alert alert-danger">
                        <strong>Note:</strong> Please make sure that the item was scanned.
                    </div>
                    <br /><br /><br /><br /><br /><br />



                </div>
            </div>
        </div>
    </section>

    <!-- Right side columns -->


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