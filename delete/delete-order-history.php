<?php

include("../conndb.php");


//if (isset($_GET['delete'])) {
$id = $_GET['historydelete'];


$query = "DELETE FROM order_history WHERE id=$id";

$data = mysqli_query($data, $query);


header("Location: ../orders-history.php");
