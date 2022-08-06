<?php

include("conndb.php");
include("includes/load.php");


//if (isset($_GET['delete'])) {
$id = $_GET['delete'];


$query = "DELETE FROM rfiddb WHERE id=$id";

$data = mysqli_query($data, $query);

$session->msg('i', "Data Deleted! ");
header("Location: manage-rfid.php");
