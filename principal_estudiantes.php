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
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/logo.png" />
    <link rel="stylesheet" href="principal_estudiantes.css">
    <head>
        <title>Home</title>
    </head>
    <body>
        <header>
            <h1>Blu</h1>
        </header>
        <nav id="barra_h">
            <ul class='menu-horizontal'>
                <li class="n1"><a href="principal_estudiantes.php"><span class="icon-home"></span>Inicio</a></li>
                <li class="n1"><a href="contactar_psicologo.php"><span class="icon-home"></span>Psicólogos</a></li>
                <li class="n1"><a href="Ejercicio_menu.html">Ejercicios</a>
                    <ul class="submenu1">
                        <li><a href="Ejercicio_menu.html#respiracion">Respiración</a></li>
                        <li><a href="Ejercicio_menu.html#meditacion">Meditación</a></li>
                        <li><a href="Ejercicio_menu.html#movimiento">Movimiento</a></li>
                    </ul>
                </li>
                <li class="n1"><a href="Que_es_ansiedad.html">Información</a>
                    <ul class="submenu1">
                        <li><a href="Que_es_ansiedad.html">¿Qué es la ansiedad?</a></li>
                        <li><a href="sintomas.html">Sintomas</a></li>
                        <li><a href="tipos_ansiedad.html">Tipos</a></li>
                    </ul>
                </li>
                <li class="n1"><a href="cerrar_sesion.php"><span class="icon-home"></span>Cerrar Sesión</a></li>
            </ul>
        </nav>
            <h2>¡Bienvenido!</h2>
            <br>
            <h3 id="general">Blu es una aplicación Web con la finalidad de ayudar con la ansiedad a estudiantes de la comunidad del 
                Instituto Tecnológico de Chihuahua II
            </h3>
        <section class="container">
            <section class="Ejer">
                <table style="background-color: rgb(133, 166, 250); border-radius: 15px;" height="225">
                    <tr>
                        <td><p id="info">Ejercicios</p></td> <br>
                    </tr>
                    <tr>
                        <td align="center">
                            <br>
                            <button type="button" id="ejercicio"><a href="Ejercicio_respiracion1.html">
                            <img src="imagenes/amsiedad11.png" class="img_ejer"><br>Técnica<br>4-7-8</a></button>&nbsp;&nbsp;
                            <button type="button" id="ejercicio"><a href="Ejercicio_meditacion.html">
                            <img src="imagenes/amsiedad14.png" class="img_ejer"><br>Meditación Mindfulness</a></button>&nbsp;&nbsp;
                            <button type="button" id="ejercicio"><a href="Ejercicio_movimiento2.html">
                            <img src="imagenes/amisedad16.png" id="gc" class="img_ejer"><br>Gimnasia <br> cerebral</a></button>&nbsp;&nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><a href="Test_ansiedad_Beck.php"><button id="test">Realiza un test para conocer tu nivel de ansiedad</button></a></td>
                    </tr>
                    
                </table> 
            </section>
            <section class="Citas">
                <table id="tableP" style="background-color: rgb(133, 166, 250);  border-radius: 15px;" >
                    <tr>
                        <td colspan="2"><p id="psi">Próximas citas con Psicólogos</p></td>
                    </tr>

                    <?php   
                    $mysqli = new mysqli("localhost","root","","blu");
                    //$mysqli = new mysqli('localhost','root', '', 'blu');
                    $mysqli->set_charset("utf8");
                    $NumControl= $_SESSION['usuario']; // <--- This stuff is god
                    $query = $mysqli->query("SELECT ps.nombre, ps.apellido1,
                                                    con.fecha, con.hora, ps.telefono 
                                            FROM consulta con
                                            INNER JOIN psicologo ps ON con.idPsicologo = ps.idpsicologo
                                            Where con.NumControl = '$NumControl.!'");

                   $num_rows = mysqli_num_rows($query); 

                    if ($num_rows >0){
                        while($fila = $query->fetch_object()){
                            if($fila->fecha==NULL){
                                echo "
                                <tr class='psic'>
                                    <td width='150' class='agendaa'><img src='imagenes/espera.png' id='calend'></td>
                                    <td>
                                    <p> &nbsp; </p>
                                    <p> Psicól. " .$fila->nombre." ".$fila->apellido1."
                                     se pondrá en contacto <br> contigo para confirmar fecha y hora  </p>
                                    <p> &nbsp; </p>
                                    </td>
                                </tr>";
                            } else{
                                echo "
                                <tr class='psic'>
                                    <td width='250' class='agendaa'><img src='imagenes/calendario.png' id='calend'></td>
                                    <td>
                                    <p> Psicól. ".$fila->nombre." ".$fila->apellido1."</p>
                                    <p> Fecha: ".$fila->fecha."</p>
                                    <p> Hora: ".$fila->hora."</p>
                                    <p> Contacto: ".$fila->telefono."</p>
                                    </td>
                                </tr>";
                            }
                        }
                        
                    } else {
                        echo "
                        <tr class='psic'>
                            <td width='250' align='center' class='agendaa'><img src='imagenes/calendario.png'width='150' margin='20px'> </td>
                            <td>
                            <p> No tienes citas proximamente :)</p>
                            </td>
                        </tr>";
                    }
                    ?> 

                    </tr>
                </table>
            </section>
        </section>
    </body>
</html>