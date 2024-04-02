<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <title>Listado de usuarios</title>
        <link rel="stylesheet" type="text/css" href="Estilo_baseDatos.css"/>
        <link rel="shortcut icon" href="imagenes/logo.png" />
    </head>
    <body>
        <center>
            <header> BLU: Administrador Web </header>
            <br>
            <nav id="barra_h">
                <ul class='menu-horizontal'>
                    <li class="n1"><a href="lista.php">Lista</a></li>
                    <li class="n1"><a href="altas.php">Alta Psicologo</a></li>
                    <li class="n1"><a href="bajas.php">Bajas</a></li>
                    <li class="n1"><a href="cambios.php">Cambios</a></li>
                    <li class="n1"><a href="../cerrar_sesion.php">Cerrar sesión</a></li>
                </ul>    
            </nav>

            <br>
                <section>
                    <h2>Alumnos</h2>
                    <table>
                        <tr>
                            <th>Num Control</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Correo</th><th>Celular</th><th>Genero</th><th>Carrera</th>
                        </tr>
                        <?php        
                            $mysqli = new mysqli("localhost","id20568436_isa","Facin121302!","id20568436_blu");
                            //new mysqli('localhost','root', '', 'blu')
                            $mysqli->set_charset("utf8");
                            $query = $mysqli->query("SELECT * FROM alumno");
                            while($dat = $query ->fetch_object()){
                            echo "<tr>
                                    <td>".$dat->numControl."</td>
                                    <td>".$dat->nombre."</td>
                                    <td>".$dat->apellido1."</td>
                                    <td>".$dat->apellido2."</td>
                                    <td>".$dat->correoInstitucional."</td>
                                    <td>".$dat->celular."</td>
                                    <td>".$dat->genero."</td>
                                    <td>".$dat->carrera."</td>
                                </tr>";
                            }
                        ?>
                    </table>
                </section>
            <br>
            <section>
                    <h2>Psicólogos</h2>
                    <table>
                        <tr>
                            <th>ID Psicólogo</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Correo</th><th>Celular</th>
                        </tr>
                        <?php       
                            $query = $mysqli->query("SELECT * FROM psicologo");
                            while($dat = $query ->fetch_object()){
                            echo "<tr>
                                    <td>".$dat->idpsicologo."</td>
                                    <td>".$dat->nombre."</td>
                                    <td>".$dat->apellido1."</td>
                                    <td>".$dat->apellido2."</td>
                                    <td>".$dat->correo."</td>
                                    <td>".$dat->telefono."</td>
                                </tr>";
                            }
                        ?>
                    </table>
                </section>

         </center>
    </body>
</html>