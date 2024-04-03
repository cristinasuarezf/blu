<?php 
    $id = $_POST['id'];      
    $mysqli = new mysqli("localhost","root","","blu");
    //'localhost','root', '', 'blu'
    $mysqli->set_charset("utf8");

    $query = $mysqli->query("UPDATE alumno SET nombre='".$_POST['nombres']."', apellido1='".$_POST['apPaterno']."', apellido2='".$_POST['apMaterno']."' , correoInstitucional='".$_POST['email']."', celular='".$_POST['telefono']."', genero='".$_POST['genero']."', carrera='".$_POST['carrera']."' WHERE numControl = '".$id."'");

    $query = $mysqli->query("UPDATE cuenta_alumno SET pass='".$_POST['password']."' WHERE numcontrol = '".$id."'");


   echo "
        <script>
            window.location.href='cambios.php';
            alert('Se han actualizado los datos del usuario');
        </script>
    ";


?>