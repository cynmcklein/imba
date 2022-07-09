<?php

include("conndb.php");


//if (isset($_GET['delete'])) {
$id = $_GET['delete'];


$query = "DELETE FROM purchaserawmaterials WHERE id=$id";

$data = mysqli_query($data, $query);


header("Location: purchases-rawmaterials.php");
