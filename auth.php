
<?php include_once('includes/load.php');

?>
<?php
$req_fields = array('username', 'password');
validate_fields($req_fields);
$username = remove_junk($_POST['username']);
$password = remove_junk($_POST['password']);

if (empty($errors)) {
    $user_id = authenticate($username, $password);
    if ($user_id) {
        //create session with id
        $session->login($user_id);
        //Update Sign in time
        updateLastLogIn($user_id);

        require_once 'conndb.php';
        $sql = "SELECT group_name FROM users WHERE username = '$username'";
        $user = $data->query($sql) or die($data->error);
        $row = $user->fetch_assoc();
        $total = $user->num_rows;

        if ($row["group_name"] == "Production") {

            header("location:production.php");
        } elseif ($row["group_name"] == "Admin") {
            header("location:index.php");
        } else {
            die("invalid input");
        }
    }




    // $session->msg("s", "Welcome to Inventory Management System");
    // redirect('index.php', false);

    // if ($user_id['group_name'] === 'Admin') :
    //     $session->msg("s", "Hello " . $user_id['username'] . ", Welcome to IMSBAPI.");
    //     redirect('index.php');
    // elseif ($user_id['group_name'] === 'Production') :
    //     $session->msg("s", "Hello " . $user_id['username'] . ", Welcome to IMSBAPI.");
    //     redirect('production.php');

    // endif;
    else {
        $session->msg("d", "Sorry Username/Password incorrect.");
        redirect('index1.php', false);
    }
} else {
    $session->msg("d", $errors);
    redirect('index1.php', false);
}

?>
