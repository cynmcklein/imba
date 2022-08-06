<?php
require_once('includes/load.php');
include("conndb.php");


//if (isset($_GET['delete'])) {
$id = $_GET['suppdelete'];


$query = "DELETE FROM supplier WHERE id=$id";

$data = mysqli_query($data, $query);

$session->msg('i', "Item Deleted! ");
header("Location: tab-supplier-info.php");




?>

<!-- DELETE FROM `customer` WHERE `customer`.`id` = 64 -->