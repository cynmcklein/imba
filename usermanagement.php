<?php
require_once('includes/load.php');

require_once 'header-sidebar.php'; ?>

<main id="main" class="main">
    <?php
    $page_title = 'All User';

    ?>
    <?php
    // Checkin What level user has permission to view this page
    //page_require_level(1);
    //pull out all user form database
    $all_users = find_all_user();
    ?>
    <? //php // include_once('layouts/header.php'); 
    ?>
    <div class="row">
        <div class="col-md-12">
            <?php echo display_msg($msg); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <strong>
                        <span class="glyphicon glyphicon-th"></span>
                        <h2>Accounts</h2>
                    </strong>


                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="user-add.php">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#largeModal">
                                Add New User
                            </button></a>
                    </div>

                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Name </th>
                                <th>Username</th>
                                <th class="text-center" style="width: 15%;">User Role</th>
                                <th class="text-center" style="width: 10%;">Status</th>
                                <th style="width: 20%;">Last Login</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($all_users as $a_user) : ?>
                                <tr>
                                    <td class="text-center"><?php echo count_id(); ?></td>
                                    <td><?php echo remove_junk(ucwords($a_user['name'])) ?></td>
                                    <td><?php echo remove_junk(ucwords($a_user['username'])) ?></td>
                                    <td class="text-center"><?php echo remove_junk(ucwords($a_user['group_name'])) ?></td>
                                    <td class="text-center">
                                        <?php if ($a_user['status'] === '1') : ?>
                                            <span class="label label-success"><?php echo "Active"; ?></span>
                                        <?php else : ?>
                                            <span class="label label-danger"><?php echo "Deactive"; ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo read_date($a_user['last_login']) ?></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="edit_user.php?id=<?php echo (int)$a_user['id']; ?>" class="btn btn-success ri-contacts-fill" data-toggle="tooltip" title="Edit">
                                                <i class="glyphicon glyphicon-pencil"></i>
                                            </a>

                                            <a href="delete-user.php?id=<?php echo (int)$a_user['id']; ?>" class="btn btn-danger ri-delete-bin-6-line" data-toggle="tooltip" title="Remove">
                                                <i class="glyphicon glyphicon-remove"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




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