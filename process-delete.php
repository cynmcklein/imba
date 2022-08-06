<?php

require_once('includes/load.php');
include("conndb.php");


// if (isset($_GET['btnDelete'])) 
$id = $_GET['delete'];


$query = "DELETE FROM customer WHERE id=$id";

$data = mysqli_query($data, $query);

$session->msg('i', "Item Deleted! ");
header("Location: tab-customer-info.php");




?>

<!-- DELETE FROM `customer` WHERE `customer`.`id` = 64 -->