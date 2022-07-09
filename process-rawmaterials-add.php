<?php
$host="localhost";
$user="root";
$password="";
$db="user";

$mysqli = new mysqli($host,$user,$password,$db) or die(mysqli_error($mysqli));

if (isset($_POST['save'])){
  $code = $_POST['itemcode'];
  $name = $_POST['itemname'];
  $type = $_POST['itemtype'];
  $supplier = $_POST['suppliername'];
  $quantity = $_POST['quantity'];
 
  $insert = mysqli_query($mysqli,"INSERT INTO `rawmaterials`(`itemcode`, `itemname`, `itemtype`, `suppliername`, `quantity`) VALUES ('$code','$name','$type','$supplier','$quantity')");

  if(!$insert){
    echo mysqli_error($mysqli);
  }
  
  else{
    require_once 'inventory-rawmaterials.php';
  }

}
mysqli_close($mysqli)
?>