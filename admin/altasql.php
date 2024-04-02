<?php        
    $mysqli = new mysqli("localhost","id20568436_isa","Facin121302!","id20568436_blu");
    //mysqli('localhost','root', '', 'blu')
    $mysqli->set_charset("utf8");
    $query = $mysqli->query("INSERT INTO psicologo (idpsicologo, nombre, apellido1, apellido2, correo, telefono) VALUES (NULL, '".$_POST['nombre']."', '".$_POST['apPaterno']."', '".$_POST['apMaterno']."', '".$_POST['correo']."','".$_POST['telefono']."');");

    $query = $mysqli->query("SELECT idpsicologo FROM psicologo WHERE idpsicologo = (SELECT MAX(idpsicologo) from psicologo)");
    $dat = $query ->fetch_object();
    $id = $dat->idpsicologo;

    echo "
        <script>
            window.location.href='lista.php';
            alert('El id del psicólogo es ".$id."');
            
        </script>
    ";

    $query = $mysqli->query("INSERT INTO cuenta_psicologo (idCuentaP, idPsicologo, pass) VALUES (NULL , '".$id."', '".$_POST['password']."');");



?> 