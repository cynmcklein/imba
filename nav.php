<?php
require_once 'conndb.php';
if (isset($_POST['login'])) {

    $username = $_POST['username'];


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
