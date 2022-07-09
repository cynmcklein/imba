<?php

require_once('includes/load.php');
//require_once 'header-sidebar.php';


$host = "localhost";
$user = "root";
$password = "";
$db = "user";

$mysqli = new mysqli($host, $user, $password, $db) or die(mysqli_error($mysqli));

//customer add process

if (isset($_POST['save'])) {
  $name = $_POST['companyName'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $conperson = $_POST['conPerson'];
  $address = $_POST['address'];
  $agent = $_POST['agent'];

  $insert = mysqli_query($mysqli, "INSERT INTO `customer`(`company`, `email`, `contact`, `conperson`, `address`, agent_name) VALUES ('$name','$email','$contact','$conperson','$address','$agent')");

  if (!$insert) {

    echo mysqli_error($mysqli);
  } else {
    //echo display_msg($msg);
    $session->msg('s', "Customer Added! ");
    header("Location: tab-customer-info.php");
  }
}

//end customer


//orders tab process


if (isset($_POST['saveorder'])) {
  $name = $_POST['companyName'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $conperson = $_POST['conPerson'];
  $address = $_POST['address'];

  $insert = mysqli_query($mysqli, "INSERT INTO `customer`(`company`, `email`, `contact`, `conperson`, `address`) VALUES ('$name','$email','$contact','$conperson','$address')");

  if (!$insert) {
    echo mysqli_error($mysqli);
  } else {
    header("Location: orders-neworder-form.php");
  }
}

//end orders tab process


//mysqli_close($mysqli)
