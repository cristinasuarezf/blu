<?php 
    session_start();
    if(isset($_SESSION['usuario'])){
        //header("location: principal_estudiantes.php");
    }
?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/logo.png" />
    <link rel="stylesheet" href="inicio_sesion_psicologo.css">
    <head>
        <title>Inciar Sesión Psicólogo</title>
       
    </head>  
    <body>
        <header>
            <h1>Inicio Sesión</h1>
        </header>
    <section>
        <form method="post" action="loginp.php">
            <div class="container">
            <section class="hijo">
                <input type="numbre" id="usuario" name="usuario" placeholder="Usuario">
                <button class="btn" type="button" onclick=""><img src="imagenes/show.png" class="imgnone"></button>

                <br>
                <input type="password" id="pass" name="pass" placeholder="Contraseña">
                <button class="btn" type="button" onclick="mostrarContrasena()"><img src="imagenes/show.png"></button>

                <br>
                <button type="submit" id="enviar" name="enviar">Ingresar</button>
            </section>
            <section class="boton">
                <a href="Olvidar_contraseña.html"><button type="button" id="olvide" name="olvide">Olvidé mi cuenta</button></a>&nbsp;&nbsp;
            </section>
            </div>
        </form>
    </section>
    </body> 
    <script src="code.js"></script>
</html>