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
        <title>Resultados test</title>
        <meta charset="utf-8"><meta name='viewport' content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagenes/logo.png" />
        <link rel="stylesheet" href="Resultados_test.css">
    </head>
<body>
    <div class="container">
        <header class="hijos">
            <h2 id="titulo">RESULTADOS TEST</h2>
        </header><br>
        <table>
            <thead>
                <tr>
                    <th>&nbsp; No. Control &nbsp;</th>
                    <th>&nbsp; Nombre Alumno &nbsp;</th>
                    <th>&nbsp; Teléfono &nbsp;</th>
                    <th>&nbsp; Correo &nbsp;</th>
                    <th>&nbsp; Fecha realización &nbsp;</th>
                    <th>&nbsp; Puntaje &nbsp;</th>
                </tr>
            </thead>
            <tbody>
            <?php       
                    $mysqli = new mysqli("localhost","root","","blu");
                    //$mysqli = new mysqli('localhost','root', '', 'blu');
                    $mysqli->set_charset("utf8");
                    $id= $_SESSION['usuario']; // <--- This stuff is god
                    $query = $mysqli->query("SELECT ts.numControl, al.nombre, al.apellido1, al.correoInstitucional, al.celular, ts.resultados, ts.fecha
                                            FROM test ts
                                            INNER JOIN alumno al ON  ts.numControl = al.numControl");

                    while($dat = $query ->fetch_object()){

                        echo "<tr>
                                <td align='center'>".$dat->numControl."</td>   
                                <td align='center'>".$dat->nombre." ".$dat->apellido1."</td>
                                <td align='center'>".$dat->celular."</td>
                                <td align='center'>".$dat->correoInstitucional."</td>
                                <td align='center'>".$dat->fecha."</td>
                                <td align='center'>".$dat->resultados."</td>
                            </tr>";

                    } 
                ?>
            </tbody>
        </table><br>
        <footer class="hijos">
            <a href="principal_psicologos.php"><button class="volver" type="submit">Menú principal</button></a>
        </footer>
    </div>
</body>
</html>