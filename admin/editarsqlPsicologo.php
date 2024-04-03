<?php 
    $id = $_POST['id'];      
    $mysqli = new mysqli("localhost","root","","blu");
    //'localhost','root', '', 'blu'
    $mysqli->set_charset("utf8");

    $query = $mysqli->query("UPDATE psicologo SET nombre='".$_POST['nombres']."', apellido1='".$_POST['apPaterno']."', 
                                                  apellido2='".$_POST['apMaterno']."' , correo='".$_POST['email']."', telefono='".$_POST['telefono']."' WHERE idpsicologo = '".$id."'");

    $query = $mysqli->query("UPDATE cuenta_psicologo SET pass='".$_POST['password']."' WHERE idPsicologo = '".$id."'");


   echo "
        <script>
            window.location.href='cambios.php';
            alert('Se han actualizado los datos del usuario');
        </script>
    ";


?>