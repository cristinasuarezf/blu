<?php
    $id = $_GET['id'];
    $mysqli = new mysqli("localhost","root","","blu");
    //new mysqli('localhost','root', '', 'blu')
    $mysqli->set_charset("utf8"); 

    $sql .= "DELETE from cuenta_psicologo where idPsicologo = '".$id."';";
    $sql .= "DELETE from consulta where idPsicologo = '".$id."';";
    $sql .= "DELETE from psicologo where idpsicologo= '".$id."';";

    $mysqli->multi_query($sql);
    
    HEADER("location:bajas.php");
 ?>