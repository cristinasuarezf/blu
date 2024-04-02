<?php 
session_start();
$SESSION = array();
session_destroy();
header("location: index.php");
?>