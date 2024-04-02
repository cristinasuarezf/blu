<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location= "inicio_sesion_alumno.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <title>Altas</title>
        <link rel="stylesheet" type="text/css" href="Agendar_fecha_hora.css"/>
        <link rel="shortcut icon" href="imagenes/logo.png" />
        <link rel="shortcut icon" type="image/png" href="Imagenes/Base_Datos.png"/>
    </head>
    <body>
        <div class="container">
        <center>
            <header><h2>AGENDA CITA CON UN ALUMNO</h2></header>
            <br>

            <br>
                <section class="">
                    <form action="SQLagendar.php" method="POST">
                    <table>
                    <?php
                        $NC = $_GET['numControl'];
                        $idCita = $_GET['idCita'];
                        $id= $_SESSION['usuario']; // <--- This stuff is god
                        $mysqli = new mysqli("localhost","id20568436_isa","Facin121302!","id20568436_blu");
                        // $mysqli = new mysqli('localhost','root', '', 'blu');
                        $mysqli->set_charset("utf8");
                        $query = $mysqli->query("SELECT * FROM alumno where numControl='".$NC."'");   
                        $dat = $query ->fetch_object();             
                        echo  "
                        <tr><td class='id_cita'>ID Cita:       </td><td><input type='text' name='idCita' value='".$idCita."' class='altastxt' id='input_idCita'></td></tr>
                        <tr><td class='id_psicologo'>ID Psicologo:       </td><td><input type='text' name='idPsic' value='".$id."' class='altastxt texto' id='input_idPsic' disabled></td></tr>
                        <tr class='fondo'><td class='titulos'>Nombre:        </td><td><input type='text' name='nombre' value='".$dat->nombre." ".$dat->apellido1." ".$dat->apellido2."' class='altastxt texto' disabled></td></tr>
                        <tr class='fondo'><td class='titulos'>No Control:     </td><td><input type='text' name='numControl' value='".$NC."' class='altastxt texto' disabled></td></tr>
                        <tr class='fondo'><td class='titulos'>Carrera:       </td><td><input type='text' name='carrera' value='".$dat->carrera."' class='altastxt texto' disabled></td></tr>
                        <tr><td class=''>&nbsp;</td><td>&nbsp;</td></tr>

                        <tr class='fondo'><td class='subtitulo' colspan='2' align='center'> CONTACTO</td></tr>

                        <tr class='fondo'><td class='titulos'>Correo:       </td><td><input type='text' name='correo' value='".$dat->correoInstitucional."' class='altastxt texto' disabled></td></tr>
                        <tr class='fondo'><td class='titulos'>Teléfono:     </td><td><input type='text' name='telefono' value='".$dat->celular."' class='altastxt texto' disabled></td></tr>

                        <tr><td class=''>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr class='fondo'><td class='subtitulo' colspan='2' align='center'>CONFIRMAR FECHA Y HORA</td></tr>
                        <tr class='fondo'><td class='titulos'>Fecha: </td><td><input type='date' id='opciones' name='fecha' class='altastxt texto'></td></tr>
                        <tr class='fondo'><td class='titulos'>Hora: </td><td><input type='time' id='opciones' name='hora' class='altastxt texto'></td></tr>
                        <tr><td class='submit'><br><input type='submit' class='formulario'></td>
                        <td class='reset'><br><input type='reset' class='formulario' id='r'></td></tr>"
                    ?>
                        </table>
                    </form>
                </section>
         </center>
         </div>
    </body>
</html>