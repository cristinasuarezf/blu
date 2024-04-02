<?php 
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: principal_estudiantes.php");
    }
?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="imagenes/logo.png" />
    <link rel="stylesheet" href="inicio_sesion_alumno.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <head>
        <title>Inciar Sesión</title>
       
    </head>  
    <body>
        <header>
            <h1>Inicio Sesión</h1>
        </header>
    <section>
        <!--id="formulario" name="datos"-->
        <form  method="post" action="login.php">
            <!-- action="principal.html" method="get"-->
            <div class="container">
            <section class="hijo">
                <input type="text" id="usuario" name="usuario" placeholder="Número de control">
                <button class="btn" type="button" onclick=""><img src="imagenes/show.png" class="imgnone"></button>

                <br>
                <input type="password" id="pass" name="pass" placeholder="Contraseña">
                <button class="btn" type="button" onclick="mostrarContrasena()"><img src="imagenes/show.png"></button>
                
                <br>
                <button type="submit" id="enviar" name="enviar">Ingresar</button></a>
                <!--<a href="principal_estudiantes.html"></a>-->
            </section>
            <section class="boton">
                <a href="Olvidar_contraseña.html"><button type="button" id="olvide" name="olvide">Olvidé mi cuenta</button></a>
                <a href="Registrar_alumno.php"><button type="button" id="nuevo" name="nuevo">Soy nuevo</button></a>
            </section>
            </div>
        </form>
    </section>
    <?php
    //include("login.php");
    ?>
    </body>
    <script src="code.js"></script>
</html>