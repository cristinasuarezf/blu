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

<head>
    <title>Agenda cita con un alumno</title>
    <meta charset="utf-8">
    <meta name='viewport' content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/logo.png" />
    <!--<link rel="stylesheet" href="contactar_psicologo.css">-->
    <link rel="stylesheet" href="Agendar_citas_psicologo.css">
    <link rel="stylesheet" href="tablas.css">

</head>

<body>
    <div class="container">
        <header class="hijos">
            <h2 id="titulo">AGENDA CITA CON UN ALUMNO</h2>
        </header>
        
    <section class="hijos">
            
            <table>
            <table rules="cols" cellspacing="5" >                    
                <colgroup>
                    <col span="4" class="col">
                </colgroup>
                <tr>
                    <td class="cabecera" width="300" >Nombre</td>
                    <td class="cabecera" width="300">Carrera<br></td>
                    <td class="cabecera" width="300">Teléfono<br></td>
                    <td class="cabecera correo" width="300">Correo<br></td>
                    <td class="cabecera" width="300">&nbsp;<br></td>
                </tr>
                
                <?php       
                    $mysqli = new mysqli("localhost","root","","blu");
                    // $mysqli = new mysqli('localhost','root', '', 'blu');
                    $mysqli->set_charset("utf8");
                    $id= $_SESSION['usuario']; // <--- This stuff is god
                    $query = $mysqli->query("SELECT al.nombre, al.apellido1, al.carrera,
                                                    al.celular, al.correoInstitucional, con.NumControl, con.idconsulta, con.fecha
                                            FROM consulta con
                                            INNER JOIN alumno al ON con.NumControl = al.numControl
                                            Where con.idPsicologo = '$id.'");


                        while($dat= $query->fetch_object()){


                          if($dat->fecha==NULL){
           
                            if($dat->carrera=='INFORMATICA'){
                                    echo "<tr>
                                            <td>".$dat->nombre." ".$dat->apellido1."</td>
                                            <td> Ing. Informática</td>
                                            <td>".$dat->celular."</td>
                                            <td>".$dat->correoInstitucional."</td>
                                            <td class='boton'><a class='agendar' href='Agendar_fecha_hora.php?id=".$id."&numControl=".$dat->NumControl."&idCita=".$dat->idconsulta."'>Agendar Cita</a></td>
                                        </tr>";

                            } else{
                                    echo "<tr>
                                            <td>".$dat->nombre." ".$dat->apellido1."</td>
                                            <td> Ing. Sistemas Computacionales</td>
                                            <td>".$dat->celular."</td>
                                            <td>".$dat->correoInstitucional."</td>
                                            <td class='boton'><a class='agendar' href='Agendar_fecha_hora.php?id=".$id."&numControl=".$dat->NumControl."&idCita=".$dat->idconsulta."'>Agendar Cita</a></td>
                                        </tr>";
                                }
                            }
                        
                        } 
         
                ?>

                <tr>
                    <td> <br><br><br></td>
                    <td> </td>
                    <td> </td>
                    <td align="center" style="padding-top: 10px;"> </td>
                </tr>
            </table>

           
        </section>

        <footer class="hijos" align="right">
            <a href="principal_psicologos.php"><button class="inicio" type="submit" width="200px">Volver a inicio</button></a>
        </footer>
        
    </div>
</body>
</html>