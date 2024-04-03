<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <title>Editar Psicologo</title>
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
                    <form action="editarsqlPsicologo.php" method="POST">
                    <table>
                    <?php
                        $id = $_GET['id'];
                        $mysqli = new mysqli("localhost","root","","blu");
                        //'localhost','root', '', 'blu'
                        $mysqli->set_charset("utf8");
                        $query = $mysqli->query("SELECT ps.nombre, ps.apellido1, ps.apellido2, ps.correo,
                                                        ps.telefono, cp.pass 
                                                FROM psicologo ps
                                                INNER JOIN cuenta_psicologo cp ON ps.idpsicologo = cp.idPsicologo
                                                Where ps.idpsicologo = '$id.'");   
                        $dat = $query ->fetch_object();             
                        echo  "
                        <tr><td class='altas'>Nombres  </td><td><input type='text' name='nombres'       value='".$dat->nombre."'   class='altastxt'></td></tr>
                        <tr><td class='altas'>Ap Paterno</td><td><input type='text' name='apPaterno'      value='".$dat->apellido1."' class='altastxt'></td></tr>
                        <tr><td class='altas'>Ap Materno</td><td><input type='text' name='apMaterno'      value='".$dat->apellido2."' class='altastxt'></td></tr>
                        <tr><td class='altas'>E-Mail </td><td><input type='text' name='email'            value='".$dat->correo."' class='altastxt'></td></tr>
                        <tr><td class='altas'>Teléfono </td><td><input type='text' name='telefono'       value='".$dat->telefono."'  class='altastxt'></td></tr>
                        
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