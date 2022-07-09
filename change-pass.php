<?php
$page_title = 'Change Password';
require_once('includes/load.php');
require_once 'header-sidebar.php';
// Checkin What level user has permission to view this page
//page_require_level(3);

$user = current_user();


if (isset($_POST['update'])) {

    $req_fields = array('new-password', 'old-password', 'id');
    validate_fields($req_fields);

    if (empty($errors)) {

        if (sha1($_POST['old-password']) !== current_user()['password']) {
            $session->msg('d', "Your old password not match");
            header('Location: change-pass.php');
        }

        $id = (int)$_POST['id'];
        $new = remove_junk($db->escape(sha1($_POST['new-password'])));
        $sql = "UPDATE users SET password ='{$new}' WHERE id='{$db->escape($id)}'";
        $result = $db->query($sql);
        if ($result && $db->affected_rows() === 1) :
            $session->logout();
            $session->msg('s', "Login with your new password.");

            header('Location: index1.php');
        else :
            $session->msg('d', ' Sorry failed to updated!');

            header('Location: change-pass.php');
        endif;
    } else {
        $session->msg("d", $errors);
        header('Location: change-pass.php');
    }
}
?>
<?php  ?>
<main id="main" class="main">

    <div class="login-page">
        <div class="text-center">
            <h3>Change your password</h3>
        </div>
        <?php echo display_msg($msg); ?>
        <form method="post" action="change-pass.php" class="clearfix">
            <div class="form-group">
                <label for="newPassword" class="control-label">New password</label>
                <input type="password" class="form-control" name="new-password" placeholder="New password">
            </div>
            <div class="form-group">
                <label for="oldPassword" class="control-label">Old password</label>
                <input type="password" class="form-control" name="old-password" placeholder="Old password">
            </div>
            <div class="form-group clearfix">
                <input type="hidden" name="id" value="<?php echo (int)$user['id']; ?>">
                <button type="submit" name="update" class="btn btn-info">Change</button>
            </div>
        </form>
    </div>
</main>
<?php include_once('footerdemo.php'); ?>