<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes inciar sesión");
                window.location= "inicio_sesion_psicologo.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/logo.png"/>
    <link rel="stylesheet" href="principal_psicologos.css">
    <head>
        <title>Home</title>

    </head>
    <body>
        <header>
            <h1>Blu</h1>
        </header>
        <section class="cont">
        <nav id="barra_h">
            <ul class='menu-horizontal'>
                <li class="n1"><a href="#">Inicio</a></li>
                <li class="n1"><a href="#">Alumnos</a>
                    <ul class="submenu1">
                        <li><a href="Resultados_test.php">Test</a></li>
                        <li><a href="Agendar_citas_psicologo.php">Agendar cita</a></li>
                    </ul>
                </li>
                <li class="n1"><a href="Ejercicios_realizados.php">Ejercicios</a></li>
                <li class="n1"><a href="cerrar_sesion.php">Cerrar sesión</a></li>
            </ul>    
        </nav>
        <br><br>
            <h2 id="inicio">¡Bienvenido!</h2>
            <br>
            <h3 id="general">Blu es una aplicación Web con la finalidad de ayudar a estudiantes de la comunidad del 
                Instituto Técnologico de Chihuahua II con la ansiedad
            </h3>
            <br>
    </section>
        <section class="container">
            <section> <!-- PACIENTES-->
                <table width="500" style="background-color: rgb(133, 166, 250);  border-radius: 15px;" >
                 <tr>
                     <td colspan="2"><p id="info">Alumnos con cita</p></td>
                 </tr>
                 <?php   
                    $mysqli = new mysqli("localhost","root","","blu");
                    //('localhost','root', '', 'blu'
                    $mysqli->set_charset("utf8");
                    $idPsic= $_SESSION['usuario']; // <--- This stuff is god
                    $query = $mysqli->query("SELECT DISTINCT al.nombre, al.apellido1
                                                FROM consulta con
                                                INNER JOIN alumno al ON con.NumControl = al.numControl
                                                Where con.idPsicologo = '$idPsic'");

                   $num_rows = mysqli_num_rows($query); 

                    if ($num_rows >0){
                        while($fila = $query->fetch_object()){
                            echo "
                            <tr class='letra'>
                                <td align='center'><img class='imgAlum' src='imagenes/avatarAlumno.png' ></td>
                                <td align='left'><p> ".$fila->nombre." ".$fila->apellido1."</p></td>
                            </tr>";
                            }
                        
                    } else {
                        echo "
                        <tr class='letra'>
                            <td align='center'>
                            <p> No tienes pacientes ahora </p>
                            </td>
                        </tr>";
                    }
                    ?> 

                 </table>
            </section>

            <section> <!-- PROXIMA CITA -->
                <table width="500" style="background-color: rgb(133, 166, 250);  border-radius: 15px;" >
                    <tr>
                        <td colspan="2"><p id="psi">Próximas citas</p></td>
                    </tr>
                    
                    <?php   
                    $mysqli = new mysqli("localhost","root","","blu");
                    //$mysqli = new mysqli('localhost','root', '', 'blu');
                    $mysqli->set_charset("utf8");
                    $idPsic= $_SESSION['usuario']; // <--- This stuff is god
                    $query = $mysqli->query("SELECT al.nombre, al.apellido1,
                                                    con.fecha, con.hora, al.celular, con.idconsulta
                                            FROM consulta con
                                            INNER JOIN alumno al ON con.NumControl = al.numControl
                                            Where con.idPsicologo = '$idPsic'");

                   $num_rows = mysqli_num_rows($query); 

                    if ($num_rows >0){
                        while($fila = $query->fetch_object()){

                            if($fila->fecha==NULL){
                                echo "
                                <tr class='letra'>
                                    <td width='150' class='agendaa'><img src='imagenes/espera.png' id='calend'></td>
                                    <td>
                                    <p> ".$fila->nombre." ".$fila->apellido1."
                                     solicita una cita contigo. <br> </p>
                                    <p> &nbsp; </p>
                                    <p> Ponte en contacto y confirma fecha y hora.</p>
                                    <p> Contacto: ".$fila->celular."</p>
                                    </td>
                                </tr>";
                            } else{
                                echo "
                                <tr class='letra'>
                                    <td width='250'><img src='imagenes/calendario.png' id='calend'></td>
                                    <td>
                                    <p> ".$fila->nombre." ".$fila->apellido1."</p>
                                    <p> Fecha: ".$fila->fecha."</p>
                                    <p> Hora: ".$fila->hora."</p>
                                    <p> Contacto: ".$fila->celular."</p>
                                    <p> &nbsp; </p>
                                    <a class='concretar' href='eliminarCita.php?id=".$fila->idconsulta."'>Cita concretada</a>
                                    </td>
                                </tr>";
                                }
                            }
                        
                    } else {
                        echo "
                        <tr class='letra'>
                            <td width='250'><img src='imagenes/calendario.png'> </td>
                            <td>
                            <p> No tienes citas próximamente :)</p>
                            </td>
                        </tr>";
                    }
                    ?> 
                </table>
            </section>
        </section>
    </body>
</html>