<?php

include("conndb.php");


// if (isset($_GET['btnDelete'])) 
$id = $_GET['deleterfid'];


$query = "DELETE FROM rfiddb WHERE id=$id";

$data = mysqli_query($data, $query);


header("Location: manage-rfid.php");
