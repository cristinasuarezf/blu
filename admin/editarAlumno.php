<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <title>Editar alumno</title>
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
                <section class="secaltas">
                    <form action="editarsqlAlumno.php" method="POST">
                    <table>
                    <?php
                        $id = $_GET['id'];
                        $mysqli = new mysqli("localhost","id20568436_isa","Facin121302!","id20568436_blu");
                        //'localhost','root', '', 'blu'
                        $mysqli->set_charset("utf8");
                        $query = $mysqli->query("SELECT al.nombre, al.apellido1, al.apellido2, al.carrera , al.correoInstitucional,
                                                        al.celular, al.genero, al.carrera, ca.pass 
                                                FROM alumno al
                                                INNER JOIN cuenta_alumno ca ON al.numControl = ca.numControl
                                                Where al.numControl = '$id.'");   
                        $dat = $query ->fetch_object();             
                        echo  "
                        <tr><td class='altas'>Nombres  </td><td><input type='text' name='nombres'       value='".$dat->nombre."'   class='altastxt'></td></tr>
                        <tr><td class='altas'>Ap Paterno</td><td><input type='text' name='apPaterno'      value='".$dat->apellido1."' class='altastxt'></td></tr>
                        <tr><td class='altas'>Ap Materno</td><td><input type='text' name='apMaterno'      value='".$dat->apellido2."' class='altastxt'></td></tr>
                        <tr><td class='altas'>E-Mail </td><td><input type='text' name='email'      value='".$dat->correoInstitucional."' class='altastxt'></td></tr>
                        <tr><td class='altas'>Teléfono </td><td><input type='text' name='telefono'       value='".$dat->celular."'  class='altastxt'></td></tr>
                        <tr><td class='altas'>Genero  </td><td><input type='text' name='genero'          value='".$dat->genero."' class='altastxt'></td></tr>
                        <tr><td class='altas'>Carrera</td><td><input type='text' name='carrera'          value='".$dat->carrera."' class='altastxt'></td></tr>
                        
                        <tr> <td class='altas'> &nbsp; </td> </tr>
                        <tr> <td class='altas' colspan='2'> Contraseña para la cuenta </td> </tr>
                        <tr> <td class='altas'>Contraseña</td><td><input type='text' name='password' value='".$dat->pass."' class='altastxt'></td></tr>
                        <tr> <td class='oculto'>NC</td><td><input type='text' name='id' value='".$id."' class='oculto'></td></tr>


                        <tr><td class='altas'><input type='submit' class='formulario'></td><td class='altas'><input type='reset' class='formulario' id='r'></td></tr>"
                    ?>
                        </table>
                    </form>
                </section>
         </center>
    </body>
</html>