<?php
//require_once('includes/load.php');
//session_destroy();
//session_unset($_SESSION["UserLogin"]);
//unset($_SESSION["UserLogin"]);


require_once('includes/load.php');
if (!$session->logout()) {
    redirect("index.php");
}


//session_start();
//unset($_SESSION['UserLogin']);
//$_SESSION['UserLogin'] = null;
//echo header('Location: index1.php');
