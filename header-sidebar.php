<?php include_once('includes/load.php');
$user = current_user(); ?>
<!DOCTYPE html>
<html lang="en">

<head>



    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - Big Apple IMS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

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
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" /> -->

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">




</head>

<body>

    <style>
        @media (min-width: 1200px) {
            .logo {
                width: 690px;
            }
        }




        .header {

            transition: all 0.5s;
            z-index: 997;
            height: 60px;
            box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);
            background-color: blue;
            padding-left: 20px;
            padding-bottom: 10px;




        }

        .logo span {
            font-size: 18px;
            font-weight: 700;
            color: white;
            font-family: "Nunito", sans-serif;
        }

        .header .toggle-sidebar-btn {
            font-size: 32px;
            padding-left: 10px;
            cursor: pointer;
            color: white;


        }

        .header .search-bar {
            min-width: 360px;
            padding: 10px, 20px;
        }
    </style>


    <?php if ($session->isUserLoggedIn(true)) : ?>
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">

            <div class="logo d-flex align-items-center">
                <a href="index.html" class="logo d-flex align-items-center">
                    <img src="assets/img/imbalogomain.png" alt="">
                    <span class="d-none d-lg-inline-flex">Inventory Management for Big Apple</span>
                </a>
                <!-- <i class="bi bi-list toggle-sidebar-btn"></i> -->
            </div>



            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link nav-icon search-bar-toggle " href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li><!-- End Search Icon-->

                    <!-- <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a> End Notification Icon --

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Paper Materials!</h4>
                <p>Remaining paper content 23 sheets need to restock</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Carbon Restock</h4>
                <p>Carbon Restock at 4pm</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul>End Notification Dropdown Items --

        </li> End Notification Nav -->

                    <!-- <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a>
          -- End Messages Icon --

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/cyan.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Jirah Villanueva</h4>
                  <p>Mr Panes pumasok kana...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/cha.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Cha Nethercott</h4>
                  <p>Good Work! Pasado na kayo sa Capstone...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/rold.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Roldwin Matias</h4>
                  <p>May pasok kay mam Cha present dapat lahat...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul>
          -- End Messages Dropdown Items -->

                    <!-- End Messages Nav -->

                    <li class="nav-item dropdown pe-3">

                        <?php

                        //if (isset($_SESSION['UserLogin'])) {



                        //require_once 'conndb.php';


                        //$query = mysqli_query($data, "SELECT * FROM login ");
                        //while ($row = mysqli_fetch_array($query)) {



                        //if (!isset($_SESSION)) {
                        //   session_start();
                        // }
                        //if (isset($_SESSION['UserLogin'])) {




                        ?>

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <img src="uploads/users/<?php echo $user['image']; ?>" alt="Profile" class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2">Welcome <?php echo remove_junk(ucfirst($user['name'])); ?></span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6><?php echo remove_junk(ucfirst($user['name'])); ?></h6>
                                <span>Web Designer</span>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                    <i class="bi bi-person"></i>
                                    <span>My Profile</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                    <i class="bi bi-gear"></i>
                                    <span>Account Settings</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                    <i class="bi bi-question-circle"></i>
                                    <span>Need Help?</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="logout.php">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </a>
                            </li>

                        <?php
                    // } else {
                    endif;

                    //    echo 'Welcome Guest';
                    // }
                        ?>

                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->

                </ul>
            </nav><!-- End Icons Navigation -->

        </header><!-- End Header -->

        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">

            <ul class="sidebar-nav" id="sidebar-nav">

                <li class="nav-item">
                    <a class="nav-link collapsed" href="home.php">
                        <i class="bi bi-grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="tab-customer-info.php">
                        <i class="bi bi-menu-button-wide"></i>
                        <span>Customer Information</span>
                    </a>
                    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <!----
          <li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>Accordion</span>
            </a>
          </li>-->
                        <li>
                            <a href="components-badges.html">
                                <i class="bi bi-circle"></i><span>Badges</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-breadcrumbs.html">
                                <i class="bi bi-circle"></i><span>Breadcrumbs</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-buttons.html">
                                <i class="bi bi-circle"></i><span>Buttons</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-cards.html">
                                <i class="bi bi-circle"></i><span>Cards</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-carousel.html">
                                <i class="bi bi-circle"></i><span>Carousel</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-list-group.html">
                                <i class="bi bi-circle"></i><span>List group</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-modal.html">
                                <i class="bi bi-circle"></i><span>Modal</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-tabs.html">
                                <i class="bi bi-circle"></i><span>Tabs</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-pagination.html">
                                <i class="bi bi-circle"></i><span>Pagination</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-progress.html">
                                <i class="bi bi-circle"></i><span>Progress</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-spinners.html">
                                <i class="bi bi-circle"></i><span>Spinners</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-tooltips.html">
                                <i class="bi bi-circle"></i><span>Tooltips</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="tab-supplier-info.php">
                        <i class="bi bi-bar-chart"></i><span>Supplier Information</span>
                    </a>
                    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="charts-chartjs.html">
                                <i class="bi bi-circle"></i><span>Chart.js</span>
                            </a>
                        </li>
                        <li>
                            <a href="charts-apexcharts.html">
                                <i class="bi bi-circle"></i><span>ApexCharts</span>
                            </a>
                        </li>
                        <li>
                            <a href="charts-echarts.html">
                                <i class="bi bi-circle"></i><span>ECharts</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#rfid-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-layout-text-window-reverse"></i><span>RFID</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="rfid-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="registration-rfid.php">
                                <i class="bi bi-circle"></i><span>Registration</span>
                            </a>
                        </li>
                        <li>
                            <a href="manage-rfid.php">
                                <i class="bi bi-circle"></i><span>Manage RFID</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-journal-text"></i><span>Order</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="orders-neworder.php">
                                <i class="bi bi-circle"></i><span>New Order</span>
                            </a>
                        </li>
                        <li>
                            <a href="orders-reorder.php">
                                <i class="bi bi-circle"></i><span>Reorder</span>
                            </a>
                        </li>

                        <li>
                            <a href="orders-history.php">
                                <i class="bi bi-circle"></i><span>Order History</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#inventory-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-journal-text"></i><span>Inventory</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="inventory-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="inventory-rawmaterials.php" class="active">
                                <i class="bi bi-circle"></i><span>Raw Materials</span>
                            </a>
                        </li>
                        <li>
                            <a href="inventory-components.php">
                                <i class="bi bi-circle"></i><span>Components</span>
                            </a>
                        </li>
                        <li>
                            <a href="inventory-products.php">
                                <i class="bi bi-circle"></i><span>Products</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- End Components Nav -->

                <!-- End Forms Nav -->



                <!-- End Charts Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-gem"></i><span>Purchases</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="icons-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="purchases-rawmaterials.php">
                                <i class="bi bi-circle"></i><span>Purchase Order</span>
                            </a>
                        </li>
                        <li>
                            <a href="purchases-components.php">
                                <i class="bi bi-circle"></i><span>Components</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="purchases-history.php">
                                <i class="bi bi-circle"></i><span>History</span>
                            </a>
                        </li> -->
                    </ul>
                </li><!-- End Icons Nav -->

                <li class="nav-heading">More Options</li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="users-profile.php?id=<?php echo (int)$user['id']; ?>">
                        <i class="bi bi-person"></i>
                        <span>Profile</span>
                    </a>
                </li><!-- End Profile Page Nav -->



                <!--<li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li> End Contact Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="usermanagement.php">
                        <i class="bi bi-card-list"></i>
                        <span>User Management</span>
                    </a>
                </li><!-- End Register Page Nav -->

                <!----
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li> End Login Page Nav -->

                <!--<li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li> End Error 404 Page Nav -->

                <!---- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li> End Blank Page Nav -->

            </ul>

        </aside><!-- End Sidebar-->