<?php
    $id = $_GET['id'];
    $mysqli = new mysqli("localhost","id20568436_isa","Facin121302!","id20568436_blu");
    //new mysqli('localhost','root', '', 'blu')
    $mysqli->set_charset("utf8"); 
    $query = $mysqli->query("DELETE FROM reporteejercicios WHERE numControl='".$id."'" );


    $sql =  "DELETE from test where numControl = '".$id."';";
    $sql .= "DELETE from cuenta_alumno where numControl = '".$id."';";
    $sql .= "DELETE from consulta where numControl = '".$id."';";
    $sql .= "DELETE from reporteejercicios where numControl = '".$id."';";
    $sql .= "DELETE from alumno where numControl = '".$id."';";

    $mysqli->multi_query($sql);


    HEADER("location:bajas.php");
 ?>
