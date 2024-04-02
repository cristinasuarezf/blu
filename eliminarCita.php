<?php
    $id = $_GET['id'];
    $mysqli = new mysqli("localhost","id20568436_isa","Facin121302!","id20568436_blu"); 
    //$mysqli = new mysqli('localhost','root', '', 'blu');
    $mysqli->set_charset("utf8"); 
    $query = $mysqli->query("DELETE FROM consulta WHERE idconsulta='".$id."'" );

    HEADER("location:principal_psicologos.php");
 ?>
