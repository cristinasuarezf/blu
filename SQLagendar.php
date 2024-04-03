<?php        
    $mysqli = new mysqli("localhost","root","","blu");
    //$mysqli = new mysqli('localhost','root', '', 'blu');
    $mysqli->set_charset("utf8");
    $query = $mysqli->query("UPDATE consulta SET fecha = '".$_POST['fecha']."', 
                                                hora = '".$_POST['hora']."' WHERE idconsulta = '".$_POST['idCita']."'") ;
    
    echo "
            <script>
                window.location.href='principal_psicologos.php';
                alert('Gracias por confirmar fecha y hora. El recordatorio de la cita estará dispoible en la pagina principal ');
            </script>
        ";
?>