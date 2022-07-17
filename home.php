<?php

include_once('includes/load.php');
include_once 'header-sidebar.php';

?>

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
        <li class="breadcrumb-item"><a href="home.php">Home</a></li>

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
                      }


                      ?>
                    </h6>
                    <?php
                    if ($products_total <= 10) {
                      echo '<span class="text-danger small pt-1 fw-bold">Critical</span> <span class="text-muted small pt-2 ps-1">Low Stock</span>';
                    } else {
                      echo '<span class="text-success small pt-1 fw-bold">Normal</span> <span class="text-muted small pt-2 ps-1">Stock</span>';
                    }

                    ?>
                    <!-- <span class="text-danger small pt-1 fw-bold">19%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->

          <!-- Customers Card -->
          <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">


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
                      }
                      ?>


                    </h6>
                    <?php
                    if ($products_total <= 10) {
                      echo '<span class="text-danger small pt-1 fw-bold">Critical</span> <span class="text-muted small pt-2 ps-1">Low Stock</span>';
                    } else {
                      echo '<span class="text-success small pt-1 fw-bold">Normal</span> <span class="text-muted small pt-2 ps-1">Stock</span>';
                    }
                    ?>

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->

          <!-- Customers Card -->
          <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">



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
                      }
                      ?>



                    </h6>
                    <?php
                    if ($products_total <= 10) {
                      echo '<span class="text-danger small pt-1 fw-bold">Critical</span> <span class="text-muted small pt-2 ps-1">Low Stock</span>';
                    } else {
                      echo '<span class="text-success small pt-1 fw-bold">Normal</span> <span class="text-muted small pt-2 ps-1">Stock</span>';
                    }
                    ?>
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

          <?php

          //Bigapple
          include_once 'conndb.php';

          //Pellet PE
          $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'Pelletized PE'";
          $query_pe_run = mysqli_query($data, $sql);


          if ($pe_total = mysqli_num_rows($query_pe_run)) {
            //echo $pe_total;
          }
          //pellet HD
          $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'Pelletized HD'";
          $query_hd_run = mysqli_query($data, $sql);


          if ($hd_total = mysqli_num_rows($query_hd_run)) {
            // echo $hd_total;
          }
          //LDPE
          $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'LDPE'";
          $query_ldpe_run = mysqli_query($data, $sql);


          if ($ldpe_total = mysqli_num_rows($query_ldpe_run)) {
            // echo $ldpe_total;
          }
          //LLDPE
          $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'LLDPE'";
          $query_lldpe_run = mysqli_query($data, $sql);


          if ($lldpe_total = mysqli_num_rows($query_lldpe_run)) {
            //echo $lldpe_total;
          }
          //HDPE
          $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'HDPE'";
          $query_hdpe_run = mysqli_query($data, $sql);


          if ($hdpe_total = mysqli_num_rows($query_hdpe_run)) {
            //echo $hdpe_total;
          }
          //PP
          $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'PP'";
          $query_pp_run = mysqli_query($data, $sql);


          if ($pp_total = mysqli_num_rows($query_pp_run)) {
            // echo $pp_total;
          }

          ?>

          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales">

              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Material Type</h5>

                    <!-- Bar Chart -->
                    <div id="barChart"></div>

                    <script>
                      document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#barChart"), {
                          series: [{
                            data: [
                              <?php echo $pe_total; ?>,
                              <?php echo $hd_total; ?>,
                              <?php echo $ldpe_total; ?>,
                              <?php echo $lldpe_total; ?>,
                              <?php echo $hdpe_total; ?>,
                              <?php echo $pp_total; ?>,


                            ]
                          }],
                          chart: {
                            type: 'bar',
                            height: 400
                          },
                          plotOptions: {
                            bar: {
                              borderRadius: 4,
                              horizontal: true,
                            }
                          },
                          dataLabels: {
                            enabled: false
                          },
                          xaxis: {
                            categories: ['Pelletized PE', 'Pelletized HD', 'LDPE', 'LLDPE', 'HDPE', 'PP'],
                          }
                        }).render();
                      });
                    </script>
                    <!-- End Bar Chart -->

                  </div>
                </div>
              </div>

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
                <h5 class="card-title">Customer Overview <span>| Today</span></h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Company Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Contact</th>
                      <th scope="col">address</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    require_once 'conndb.php';

                    $query = mysqli_query($data, "SELECT * FROM customer");
                    while ($row = mysqli_fetch_array($query)) {


                    ?>
                      <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['company']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><?php echo $row['address']; ?></td>

                      </tr>
                    <?php }
                    //  mysqli_close($data) 
                    ?>


                  </tbody>
                </table>

              </div>

            </div>
          </div><!-- End Recent Sales -->

          <!-- Top Selling -->
          <div class="col-12">
            <div class="card top-selling">

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
                <h5 class="card-title">Inventory Status</h5>

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
                      </tr>

                    <?php }
                    ?>
                  </tbody>
                </table>
                <!-- End Table with hoverable rows -->


                <!-- General Form Elements -->




              </div>

            </div>
          </div><!-- End Top Selling -->

        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">

        <!-- Recent Activity -->
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
          <!-- notif connection -->


          <!-- notif connection ends -->

          <div class="card-body">
            <h5 class="card-title">Notifications <span>| Today</span></h5>

            <?php


            include_once 'conndb.php';
            $sql = "SELECT * from rawmaterials";
            $query_products_run = mysqli_query($data, $sql);


            if ($products_total = mysqli_num_rows($query_products_run)) {
              //sample
              if ($products_total <= 10)
                echo '<div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
                Raw Materials is dropping low.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
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
                echo '<div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
                Products is dropping low.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            } else if ($pe_total <= 1) {
              echo '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Critical, Products is Empty, Please add new stock
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }

            $sql = "SELECT * from components";
            $query_products_run = mysqli_query($data, $sql);


            if ($products_total = mysqli_num_rows($query_products_run)) {
              //sample
              if ($products_total <= 10)
                echo '<div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
                Components is dropping low.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
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
                echo '<div class="alert alert-warning bg-warning text-light border-0 alert-dismissible fade show" role="alert">
                Warning, Pelletized PE dropping low.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
              }
              //echo $pe_total;
            } else if ($pe_total <= 1) {
              echo '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Critical, Pelletized PE is Empty, Please add new stock
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
            //pellet HD
            $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'Pelletized HD'";
            $query_hd_run = mysqli_query($data, $sql);


            if ($hd_total = mysqli_num_rows($query_hd_run)) {
              if ($hd_total <= 5) {
                echo '<div class="alert alert-warning bg-warning text-light border-0 alert-dismissible fade show" role="alert">
                Warning, Pelletized HD dropping low.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
              }
              // echo $hd_total;
            } else if ($hd_total <= 1) {
              echo '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Critical, Pelletized HD is Empty, Please add new stock
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
            //LDPE
            $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'LDPE'";
            $query_ldpe_run = mysqli_query($data, $sql);


            if ($ldpe_total = mysqli_num_rows($query_ldpe_run)) {
              if ($ldpe_total <= 5) {
                echo '<div class="alert alert-warning bg-warning text-light border-0 alert-dismissible fade show" role="alert">
               Warning, LDPE dropping low.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
              }
              // echo $ldpe_total;
            } else if ($ldpe_total <= 1) {
              echo '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Critical, LDPE is Empty, Please add new stock
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
            //LLDPE
            $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'LLDPE'";
            $query_lldpe_run = mysqli_query($data, $sql);


            if ($lldpe_total = mysqli_num_rows($query_lldpe_run)) {
              if ($lldpe_total <= 5) {
                echo '<div class="alert alert-warning bg-warning text-light border-0 alert-dismissible fade show" role="alert">
                Warning, LLDPE dropping low.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
              }
              //echo $lldpe_total;
            } else if ($lldpe_total <= 1) {
              echo '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Critical, LLDPE is Empty, Please add new stock
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
            //HDPE
            $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'HDPE'";
            $query_hdpe_run = mysqli_query($data, $sql);


            if ($hdpe_total = mysqli_num_rows($query_hdpe_run)) {
              if ($hdpe_total <= 5) {
                echo '<div class="alert alert-warning bg-warning text-light border-0 alert-dismissible fade show" role="alert">
                Warning, HDPE dropping low.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
              }
              //echo $hdpe_total;
            } else if ($hdpe_total <= 1) {
              echo '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Critical, HDPE is Empty, Please add new stock
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
            //PP
            $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'PP'";
            $query_pp_run = mysqli_query($data, $sql);


            if ($pp_total = mysqli_num_rows($query_pp_run)) {
              if ($pp_total <= 5) {
                echo '<div class="alert alert-warning bg-warning text-light border-0 alert-dismissible fade show" role="alert">
                Warning, PP dropping low.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
              }
              // echo $pp_total;
            } else if ($pp_total <= 1) {
              echo '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Critical, PP is Empty, Please add new stock
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
            ?>

          </div>
        </div><!-- End Recent Activity -->

        <?php

        //Bigapple
        include_once 'conndb.php';

        //Pellet PE
        $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'Pelletized PE'";
        $query_pe_run = mysqli_query($data, $sql);


        if ($pe_total = mysqli_num_rows($query_pe_run)) {
          //echo $pe_total;
        }
        //pellet HD
        $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'Pelletized HD'";
        $query_hd_run = mysqli_query($data, $sql);


        if ($hd_total = mysqli_num_rows($query_hd_run)) {
          // echo $hd_total;
        }
        //LDPE
        $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'LDPE'";
        $query_ldpe_run = mysqli_query($data, $sql);


        if ($ldpe_total = mysqli_num_rows($query_ldpe_run)) {
          // echo $ldpe_total;
        }
        //LLDPE
        $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'LLDPE'";
        $query_lldpe_run = mysqli_query($data, $sql);


        if ($lldpe_total = mysqli_num_rows($query_lldpe_run)) {
          //echo $lldpe_total;
        }
        //HDPE
        $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'HDPE'";
        $query_hdpe_run = mysqli_query($data, $sql);


        if ($hdpe_total = mysqli_num_rows($query_hdpe_run)) {
          //echo $hdpe_total;
        }
        //PP
        $sql = "SELECT itemtype from rawmaterials WHERE itemtype = 'PP'";
        $query_pp_run = mysqli_query($data, $sql);


        if ($pp_total = mysqli_num_rows($query_pp_run)) {
          // echo $pp_total;
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





        <!-- News & Updates Traffic --
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
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" alt="">
                  <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-2.jpg" alt="">
                  <h4><a href="#">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-3.jpg" alt="">
                  <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-4.jpg" alt="">
                  <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-5.jpg" alt="">
                  <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>

              </div><!-End sidebar recent posts--

            </div>
          </div><!- End News & Updates -->

      </div><!-- End Right side columns -->


    </div>
  </section>

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

<script>
  $(document).ready(function() {
    $('#example').DataTable()

  });
</script>


<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>