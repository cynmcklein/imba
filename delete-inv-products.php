<?php

include("conndb.php");


//if (isset($_GET['delete'])) {
$id = $_GET['delete'];


$query = "DELETE FROM products WHERE id=$id";

$data = mysqli_query($data, $query);


header("Location: inventory-products.php");




?>

<!-- DELETE FROM `customer` WHERE `customer`.`id` = 64 -->
<!-- DELETE FROM `customer` WHERE `customer`.`id` = 64 -->
<!-- DELETE FROM `customer` WHERE `customer`.`id` = 64 -->
<!-- DELETE FROM `customer` WHERE `customer`.`id` = 64 -->