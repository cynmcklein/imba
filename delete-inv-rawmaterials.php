<?php

include("conndb.php");


//if (isset($_GET['delete'])) {
$id = $_GET['delete'];


$query = "DELETE FROM rawmaterials WHERE id=$id";

$data = mysqli_query($data, $query);


header("Location: inventory-rawmaterials.php");
