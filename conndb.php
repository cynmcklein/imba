<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "user";

// $host = "sql212.epizy.com";
// $user = "epiz_32178271";
// $password = "JKy0lonNYj";
// $db = "epiz_32178271_user";

$data = mysqli_connect($host, $user, $password, $db);
if ($data === false) {
    die("Connection Error");
}

?>
<!-- sdasda -->