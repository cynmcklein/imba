<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $name = $_POST['item_name'];
		$id = $_POST['id'];
		$code = $_POST['code'];
        $itemtype = $_POST['item_type'];
        $suppliername = $_POST['supplier_name'];
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO rfiddb (id,code,item_name,item_type,supplier_name) values(?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($id,$code,$name,$itemtype,$suppliername));
		Database::disconnect();
		header("Location: registration-rfid.php");
    }
?>