<?php
require_once('includes/load.php');
require_once 'header-sidebar.php';


$host = "localhost";
$user = "root";
$password = "";
$db = "user";

$mysqli = new mysqli($host, $user, $password, $db) or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
  $code = $_POST['itemcode'];
  $name = $_POST['itemname'];
  $type = $_POST['itemtype'];
  $customer = $_POST['customername'];
  $quantity = $_POST['quantity'];

  $insert = mysqli_query($mysqli, "INSERT INTO `products`(`itemcode`, `itemname`, `itemtype`, `customername`, `quantity`) VALUES ('$code','$name','$type','$customer','$quantity')");

  if (!$insert) {
    echo mysqli_error($mysqli);
  } else {
    $session->msg('s', "Product Added! ");
    require_once 'inventory-products.php';
  }
}
