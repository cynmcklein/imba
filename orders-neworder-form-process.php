<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "user";

$mysqli = new mysqli($host, $user, $password, $db) or die(mysqli_error($mysqli));

if (isset($_POST['submit'])) {
    $prodname = $_POST['prodname'];
    $type = $_POST['plastictype'];
    $numcolors = $_POST['numcolors'];
    $qty = $_POST['qty'];
    $custid = $_POST['custid'];

    $insert = mysqli_query($mysqli, "INSERT INTO `order_history`(`product_name`, `plastic_type`, `number_colors`, `qty`, `customer_id`) VALUES ('$prodname','$type','$numcolors','$qty','$custid')");

    if (!$insert) {
        echo mysqli_error($mysqli);
    } else {
        require_once 'orders-neworder-form.php';
    }
}




mysqli_close($mysqli)
?>
<html>

</html>