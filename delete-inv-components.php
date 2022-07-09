<?php

include("conndb.php");


//if (isset($_GET['delete'])) {
$id = $_GET['delete'];


$query = "DELETE FROM components WHERE id=$id";

$data = mysqli_query($data, $query);


header("Location: inventory-components.php");




?>

<!-- DELETE FROM `customer` WHERE `customer`.`id` = 64 -->