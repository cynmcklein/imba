<?php
require_once('includes/load.php');
include_once 'header-sidebar.php';
?>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
</head>

<style>
  img.img-size-2 {
    width: 125px;
    height: 125px;
  }

  .img-circle {
    border-radius: 50%;
  }

  img {
    vertical-align: middle;
  }

  img {
    border: 0;
  }
</style>

<?php
//$page_title = 'Edit Account';

//page_require_level(3);
?>
<?php
//update user image
if (isset($_POST['submit'])) {
  $photo = new Media();
  $user_id = (int)$_POST['user_id'];
  $photo->upload($_FILES['file_upload']);
  if ($photo->process_user($user_id)) {
    $session->msg('s', 'photo has been uploaded.');
    header('Location: users-profile.php');
  } else {
    $session->msg('d', join($photo->errors));
    //header('Location: users-profile.php');
  }
}
?>
<?php
//update user other info
if (isset($_POST['update'])) {
  $req_fields = array('name', 'username');
  validate_fields($req_fields);
  if (empty($errors)) {
    $id = (int)$_SESSION['user_id'];
    $name = remove_junk($db->escape($_POST['name']));
    $username = remove_junk($db->escape($_POST['username']));
    $sql = "UPDATE users SET name ='{$name}', username ='{$username}' WHERE id='{$id}'";
    $result = $db->query($sql);
    if ($result && $db->affected_rows() === 1) {
      $session->msg('s', "Acount updated ");
      header('Location: users-profile.php');
    } else {
      $session->msg('d', ' Sorry failed to updated!');
      header('Location: users-profile.php');
    }
  } else {
    $session->msg("d", $errors);
    //header('Location: users-profile.php');
  }
}

?>
<?php
include_once 'headerdemo.php';
?>
<main id="main" class="main">


  <div class="row">
    <div class="col-md-12">
      <?php echo display_msg($msg); ?>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-heading clearfix">
            <span class="glyphicon glyphicon-camera"></span>
            <span>Change My photo</span>
          </div>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4">
              <img class="img-circle img-size-2" src="uploads/users/<?php echo $user['image']; ?>" alt="">
            </div>
            <div class="col-md-8">
              <form class="form" action="users-profile.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="file" name="file_upload" multiple="multiple" class="btn btn-default btn-file" />
                </div>
                <div class="form-group">
                  <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                  <button type="submit" name="submit" class="btn btn-warning">Change</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <span class="glyphicon glyphicon-edit"></span>
          <span>Edit My Account</span>
        </div>
        <div class="panel-body">
          <form method="post" action="users-profile.php?id=<?php echo (int)$user['id']; ?>" class="clearfix">
            <div class="form-group">
              <label for="name" class="control-label">Name</label>
              <input type="name" class="form-control" name="name" value="<?php echo remove_junk(ucwords($user['name'])); ?>">
            </div>
            <div class="form-group">
              <label for="username" class="control-label">Username</label>
              <input type="text" class="form-control" name="username" value="<?php echo remove_junk(ucwords($user['username'])); ?>">
            </div>
            <div class="form-group clearfix">
              <a href="change-pass.php" title="change password" class="btn btn-danger pull-right">Change Password</a>
              <button type="submit" name="update" class="btn btn-info">Update</button></a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</main>
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="copyright">
    &copy; Copyright <strong><span>BigApple Incorporated</span></strong>. All Rights Reserved
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
<?php if (isset($db)) {
  $db->db_disconnect();
} ?>