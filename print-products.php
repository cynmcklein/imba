<?php
require_once 'includes/load.php'; ?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Products</title>
    <meta content="" name="description">
    <meta content="" name="keywords">



    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>



    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style type="text/css" media="print">
        @media print {

            .noprint,
            .noprint * {
                display: none !important;
            }
        }
    </style>
</head>

<body onload="print()">
    <main id="main" class="main">

        <div class="container">
            <h1>Big Apple Packaging Incorporated</h1>
            <h3>Data Report</h3>
        </div>


        <section class="section">
            <div class="row">
                <div class="">

                    <div class="card">



                        <div class="card">
                            <div class="card-body">




                                <h5 class="card-title">Products</h5>

                                <!-- Table with hoverable rows -->
                                <table class="table table-striped table-bordered" style="width: 100%;">
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







                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <!-- End Table with hoverable rows -->


                                <!-- General Form Elements -->




                            </div>
                        </div>

                    </div>
                    <div class="container">
                        <button type="" class="btn btn-info noprint" style="width: 100%;" onclick="window.location.replace('inventory-products.php');">Cancel Printing</button>
                    </div>

        </section>

    </main>
</body>
<!-- ======= Footer ======= -->


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