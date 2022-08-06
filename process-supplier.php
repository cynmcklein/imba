<?php
require_once('includes/load.php');
require_once 'header-sidebar.php';


$host = "localhost";
$user = "root";
$password = "";
$db = "user";

$mysqli = new mysqli($host, $user, $password, $db) or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
  $name = $_POST['companyName'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];

  $insert = mysqli_query($mysqli, "INSERT INTO `supplier`(`company`, `email`, `contact`, `address`) VALUES ('$name','$email','$contact','$address')");

  if (!$insert) {
    echo mysqli_error($mysqli);
  } else {
    $session->msg('s', "Supplier Added! ");
    header("Location: tab-supplier-info.php");
  }
}
