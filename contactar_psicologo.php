<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes inciar sesión");
                window.location= "inicio_sesion_alumno.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cóntactate con un psicólogo</title>
    <meta charset="utf-8">
    <meta name='viewport' content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/logo.png" />
    <link rel="stylesheet" href="contactar_psicologo.css">
    <link rel="stylesheet" href="tablas.css">
    <link rel="stylesheet" href="dialogo.css">
</head>

<body>
    <div class="container">
        <header class="hijos">
            <h2 id="titulo">¡CONTÁCTATE CON UN PSICÓLOGO!</h2>
        </header>
        <aside class="hijos">
            <p id="frase" align="center">Selecciona un psicólogo y agenda una cita</p>
        </aside>
    <section class="hijos">
    
            <table>
            <table rules="cols" cellspacing="5" >                    
                <colgroup>
                    <col span="4" class="col">
                </colgroup>
                <tr>
                    <td class="cabecera" width="300">Nombre</td>
                    <td class="cabecera" width="300">Teléfono<br></td>
                    <td class="cabecera" width="300">Mail<br></td>
                    <td class="cabecera" width="300">Disponible<br></td>
                </tr>

                
                <?php        
                    $mysqli = new mysqli("localhost","id20568436_isa","Facin121302!","id20568436_blu");
                    //$mysqli = new mysqli('localhost','root', '', 'blu');
                    $mysqli->set_charset("utf8");
                    $NumControl= $_SESSION['usuario']; // <--- This stuff is god
                    $query = $mysqli->query("SELECT * FROM psicologo");
                    while($dat = $query ->fetch_object()){
                    echo "<tr>
                    <td>".$dat->nombre." ".$dat->apellido1."</td>
                    <td>".$dat->telefono."</td>
                    <td>".$dat->correo."</td>
                    <td class='boton'><a class='agendar' href='SQLcontactar_psicologo.php?id=".$dat->idpsicologo."&numControl=".$NumControl."'>Agendar Cita</a></td>
                    </tr>";
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
            <br><button class="inicio" type="submit" width="200px"><a href="principal_estudiantes.php">Volver a inicio</button></a>
        </footer>
        
    </div>

</body>
<script src="contactar_psicologo.js"></script>

</html>

