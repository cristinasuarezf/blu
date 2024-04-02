<?php
    $id = $_GET['id'];
    $NumControl = $_GET['numControl'];         
    $mysqli = new mysqli("localhost","id20568436_isa","Facin121302!","id20568436_blu");
    // $mysqli = new mysqli('localhost','root', '', 'blu');
    $mysqli->set_charset("utf8");
    
    $query = $mysqli->query("INSERT INTO consulta (idconsulta, numControl, idPsicologo, fecha, hora) 
                                           VALUES (NULL, '".$NumControl."', '".$id."', NULL , NULL);");
    
    echo "
            <script>
                window.location.href='principal_estudiantes.php';
                alert('Gracias por iniciar el proceso de agendar una cita. Recibiras una llamada o un correo por parte del psicólogo para confirmar fecha y hora.');
            </script>
        ";

?>