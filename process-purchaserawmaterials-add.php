<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "user";

$mysqli = new mysqli($host, $user, $password, $db) or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
  $requestor = $_POST['requestor'];
  $vendor = $_POST['vendor'];
  $POnumber = $_POST['POnumber'];
  $description = $_POST['description'];
  $POdate = $_POST['POdate'];
  $POorderDate = $_POST['POorderDate'];
  $POrecieveDate = $_POST['POrecieveDate'];

  $insert = mysqli_query($mysqli, "INSERT INTO `purchaserawmaterials`(`Requestor`, `Vendor`, `PO#`, `Description`, `PO_Date`, `Order_Date`, `Recieve_Date`) VALUES ('$requestor','$vendor','$POnumber','$description','$POdate','$POorderDate','$POrecieveDate')");

  if (!$insert) {
    echo mysqli_error($mysqli);
  } else {
    header('Location: purchases-rawmaterials.php');
  }
}

if (isset($_POST['savecomp'])) {
  $requestor = $_POST['requestor'];
  $vendor = $_POST['vendor'];
  $POnumber = $_POST['POnumber'];
  $description = $_POST['description'];
  $POdate = $_POST['POdate'];
  $POorderDate = $_POST['POorderDate'];
  $POrecieveDate = $_POST['POrecieveDate'];

  $insert = mysqli_query($mysqli, "INSERT INTO `purchasecomponents`(`requestor`, `vendor`, `PO#`, `description`, `po_date`, `order_date`, `recieve_date`) VALUES ('$requestor','$vendor','$POnumber','$description','$POdate','$POorderDate','$POrecieveDate')");

  if (!$insert) {
    echo mysqli_error($mysqli);
  } else {
    header('Location: purchases-components.php');
  }
}
