<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <title>Altas a psicologos</title>
        <link rel="stylesheet" type="text/css" href="Estilo_baseDatos.css"/>
        <link rel="shortcut icon" href="imagenes/logo.png" />
        <link rel="shortcut icon" type="image/png" href="Imagenes/Base_Datos.png"/>
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
                    <h2>Agregar Psicólogo</h2>
                    <form action="altasql.php" method="POST">
                        <table>
                            <tr><td class="altas">Nombre  </td><td><input type="text" name="nombre"   class="altastxt"></td></tr>
                            <tr><td class="altas">Ap Paterno</td><td><input type="text" name="apPaterno" class="altastxt"></td></tr>
                            <tr><td class="altas">Ap Materno</td><td><input type="text" name="apMaterno" class="altastxt"></td></tr>
                            <tr><td class="altas">E-Mail    </td><td><input type="text" name="correo"  class="altastxt"></td></tr>
                            <tr><td class="altas">Telefono </td><td><input type="text" name="telefono"     class="altastxt"></td></tr>

                            <tr> <td class="altas"> &nbsp; </td> </tr>
                            <tr> <td class="altas" colspan='2'> Contraseña para la cuenta </td> </tr>
                            <tr><td class="altas">Contraseña</td><td><input type="text" name="password" class="altastxt"></td></tr>

                                <td class="altas"><input type="submit" class="formulario"></td> 
                                <td class="altas"><input type="reset" class="formulario" id="r"></td>
                            </tr>
                        </table>
                    </form>
                </section>
            <br>
            
         </center>
    </body>
</html>