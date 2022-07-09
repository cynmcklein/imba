<?php include_once('includes/load.php');

include_once 'production-header-sidebar.php'; ?>

<main id="main" class="main">


  <div class="row">
    <div class="col-md-12">
      <?php echo display_msg($msg); ?>
    </div>
  </div>

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>

        <li class="breadcrumb-item active">Dashboard</li>

      </ol>
    </nav>
  </div><!-- End Page Title -->



  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">

          <!-- Sales Card --
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <!-<div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <!-<div class="card-body">
                  <h5 class="card-title">Sales <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>--

              </div>
            </div><!- End Sales Card -->

          <!-- Revenue Card --
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
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
                  <h5 class="card-title">Revenue <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!- End Revenue Card -->

          <!-- Customers Card -->
          <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
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
                <h5 class="card-title">Products <span>| Update</span></h5>





                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-layout-wtf"></i>
                  </div>
                  <div class="ps-3">
                    <h6>
                      <?php


                      include_once 'conndb.php';
                      $sql = "SELECT * from products";
                      $query_products_run = mysqli_query($data, $sql);


                      if ($products_total = mysqli_num_rows($query_products_run)) {
                        echo $products_total;
                      } else {
                        echo '<h4 class="mb-0">No Data</h4>';
                      }
                      ?>
                    </h6>
                    <span class="text-danger small pt-1 fw-bold">19%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->

          <!-- Customers Card -->
          <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
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
                <h5 class="card-title">Raw Materials <span>| Update</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-list-check"></i>
                  </div>
                  <div class="ps-3">
                    <h6>
                      <?php


                      include_once 'conndb.php';
                      $sql = "SELECT * from rawmaterials";
                      $query_products_run = mysqli_query($data, $sql);


                      if ($products_total = mysqli_num_rows($query_products_run)) {
                        echo $products_total;
                      } else {
                        echo '<h4 class="mb-0">No Data</h4>';
                      }
                      ?>


                    </h6>
                    <span class="text-success small pt-1 fw-bold">15%</span> <span class="text-muted small pt-2 ps-1">Increase</span>

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->

          <!-- Customers Card -->
          <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
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
                <h5 class="card-title">Components <span>| Update</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-list-nested"></i>
                  </div>
                  <div class="ps-3">
                    <h6>
                      <?php


                      include_once 'conndb.php';
                      $sql = "SELECT * from components";
                      $query_products_run = mysqli_query($data, $sql);


                      if ($products_total = mysqli_num_rows($query_products_run)) {
                        echo $products_total;
                      } else {
                        echo '<h4 class="mb-0">No Data</h4>';
                      }
                      ?>



                    </h6>
                    <span class="text-danger small pt-1 fw-bold">19%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->

          <!-- Reports --
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
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
                  <h5 class="card-title">Reports <span>/Today</span></h5>

                  <!- Line Chart --
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Revenue',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!- End Line Chart --

                </div>

              </div>
            </div><!- End Reports -->

          <!-- Recent Sales -->


        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">

        <?php

        //Bigapple
        include_once 'conndb.php';

        //Pellet PE
        $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'Pelletized PE'";
        $query_pe_run = mysqli_query($data, $sql);


        if ($pe_total = mysqli_num_rows($query_pe_run)) {
          //echo $pe_total;
        } else {
          echo '<h4 class="mb-0">No Data</h4>';
        }
        //pellet HD
        $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'Pelletized HD'";
        $query_hd_run = mysqli_query($data, $sql);


        if ($hd_total = mysqli_num_rows($query_hd_run)) {
          // echo $hd_total;
        } else {
          echo '<h4 class="mb-0">No Data</h4>';
        }
        //LDPE
        $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'LDPE'";
        $query_ldpe_run = mysqli_query($data, $sql);


        if ($ldpe_total = mysqli_num_rows($query_ldpe_run)) {
          // echo $ldpe_total;
        } else {
          echo '<h4 class="mb-0">No Data</h4>';
        }
        //LLDPE
        $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'LLDPE'";
        $query_lldpe_run = mysqli_query($data, $sql);


        if ($lldpe_total = mysqli_num_rows($query_lldpe_run)) {
          //echo $lldpe_total;
        } else {
          echo '<h4 class="mb-0">No Data</h4>';
        }
        //HDPE
        $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'HDPE'";
        $query_hdpe_run = mysqli_query($data, $sql);


        if ($hdpe_total = mysqli_num_rows($query_hdpe_run)) {
          //echo $hdpe_total;
        } else {
          echo '<h4 class="mb-0">No Data</h4>';
        }
        //PP
        $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'PP'";
        $query_pp_run = mysqli_query($data, $sql);


        if ($pp_total = mysqli_num_rows($query_pp_run)) {
          // echo $pp_total;
        } else {
          echo '<h4 class="mb-0">No Data</h4>';
        }

        ?>


        <!-- Website Traffic -->
        <div class="card">
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body pb-0">
            <h5 class="card-title">Material Type <span>| Update</span></h5>

            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>



            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#trafficChart")).setOption({
                  tooltip: {
                    trigger: 'item'
                  },
                  legend: {
                    top: '5%',
                    left: 'center'
                  },
                  series: [{
                    name: 'Access From',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                      show: false,
                      position: 'center'
                    },
                    emphasis: {
                      label: {
                        show: true,
                        fontSize: '18',
                        fontWeight: 'bold'
                      }
                    },
                    labelLine: {
                      show: false
                    },
                    data: [{
                        value: <?php echo $pe_total; ?>,
                        name: 'Pelletized PE'
                      },
                      {
                        value: <?php echo $hd_total; ?>,
                        name: 'Pelletized HD'
                      },
                      {
                        value: <?php echo $ldpe_total; ?>,
                        name: 'LDPE'
                      },
                      {
                        value: <?php echo $lldpe_total; ?>,
                        name: 'LLDPE'
                      },
                      {
                        value: <?php echo $hdpe_total; ?>,
                        name: 'HDPE'
                      },
                      {
                        value: <?php echo $pp_total; ?>,
                        name: 'PP'
                      }
                    ]
                  }]
                });
              });
            </script>

          </div>
        </div><!-- End Website Traffic -->

        <!-- Recent Activity -->


      </div>

    </div>






    </div>
  </section>








  <section class="section">
    <div class="row">
      <div class="">

        <div class="card">



          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Raw Materials</h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Code</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Item Type</th>
                    <th scope="col">Supplier Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  require_once 'conndb.php';

                  $query = mysqli_query($data, "SELECT * FROM rawmaterials");
                  while ($row = mysqli_fetch_array($query)) {


                  ?>
                    <tr>

                      <td><?php echo $row['itemcode']; ?></td>



                      <td><?php echo $row['itemname']; ?></td>



                      <td><?php echo $row['itemtype']; ?></td>



                      <td><?php echo $row['suppliername']; ?></td>



                      <td><?php echo $row['quantity']; ?></td>
                      <td></td>

                      <td>

                        <a href="edit-inv-rawmaterials.php?edit=<?php echo $row['id']; ?>"><button class="btn btn-success ri-contacts-fill" type="button" data-toggle="tooltip" data-placement="top" title="Edit"></button></a>
                        <a href='delete-inv-rawmaterials.php?delete=<?php echo $row['id']; ?>'><button class="btn btn-danger ri-delete-bin-6-line" name="btnDelete" type="button" data-toggle="tooltip" data-placement="top" title="Delete"></button></a>

                      </td>
                    </tr>

                  <?php }
                  // mysqli_close($data) 
                  ?>
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->


              <!-- General Form Elements -->




            </div>
          </div>

        </div>
  </section>

  <section class="section">
    <div class="row">
      <div class="">

        <div class="card">



          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Components</h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Code</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Item Type</th>
                    <th scope="col">Supplier Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  require_once 'conndb.php';

                  $query = mysqli_query($data, "SELECT * FROM components");
                  while ($row = mysqli_fetch_array($query)) {


                  ?>
                    <tr>

                      <td><?php echo $row['itemcode']; ?></td>


                      <td><?php echo $row['itemname']; ?></td>


                      <td><?php echo $row['itemtype']; ?></td>


                      <td><?php echo $row['suppliername']; ?></td>


                      <td><?php echo $row['quantity']; ?></td>

                      <td></td>

                      <td>

                        <a href="edit-inv-components.php?edit=<?php echo $row['id']; ?>"><button class="btn btn-success ri-contacts-fill" type="button" data-toggle="tooltip" data-placement="top" title="Edit"></button></a>
                        <a href='delete-inv-components.php?delete=<?php echo $row['id']; ?>'><button class="btn btn-danger ri-delete-bin-6-line" name="btnDelete" type="button" data-toggle="tooltip" data-placement="top" title="Delete"></button></a>

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

        </div>
  </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="copyright">
    &copy; Copyright <strong><span>BigApple Packaging Incorporated</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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