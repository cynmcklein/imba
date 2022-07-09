<?php

include("conndb.php");


//if (isset($_GET['delete'])) {
$id = $_GET['suppdelete'];


$query = "DELETE FROM supplier WHERE id=$id";

$data = mysqli_query($data, $query);


header("Location: tab-supplier-info.php");




?>

<!-- DELETE FROM `customer` WHERE `customer`.`id` = 64 -->