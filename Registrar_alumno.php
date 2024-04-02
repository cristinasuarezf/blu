<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<!--<link rel="stylesheet" type="text/css" href="estilo.css">-->
    <link rel="stylesheet" href="Registro_alumno.css">
    <link rel="stylesheet" href="dialogo.css">
    <link rel="shortcut icon" href="imagenes/logo.png" />
</head>
<body>
<h1>Llena los campos</h1>   
<form method="post">
        <div class="container">
                <header class="hijos">
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" id="nombre" name="nombre" size="30"><br><br>
                    
                    <label for="ap1">Apellido paterno:</label><br>
                    <input type="text" id="ap1" name="ap1"  size="30" >&nbsp;<br><br>
                    
                    <label for="ap2">Apellido materno:</label><br>
                    <input type="text" id="ap2" name="ap2" >&nbsp;<br><br>

                    <label>Género</label><br>
                    <select id="genero" name="genero">
                        <option value="">Seleccione</option>
                        <option value="F">Femenino</option>
                        <option value="M">Masculino</option>
                        <option value="O">Otro</option>
                    </select>&nbsp;<br><br>

                </header>
                <aside class="hijos">
                    <label>Número de control:</label><br>
                    <input type="text" id="NC" name="NC" size="30"><br><br>

                    <label for="tel">Télefono:</label><br>
                    <input type="text" id="tel" name="tel" >&nbsp;<br><br>

                    <label>Carrera:</label><br>
                    <select id="carrera" name="carrera">
                        <option value=" ">Seleccione</option>
                        <option value="INFORMATICA">Ingeneria en Informatica</option>
                        <option value="SISTEMAS">Ingeneria en Sistemas</option>
                    </select>&nbsp;<br><br>                    
                </aside>                    
                <section class="hijos">
                    
                    <label>Correo Electronico:</label><br>
                    <input type="email" id="mail" name="email" size="30">&nbsp;<br><br>
                    
                    <label for="pass" class="hijo">Crear Contraseña:</label><br>
                    <input type="password" id="pass" name="pass" size="30">&nbsp;<br><br>                   

                    <button type="submit" name="register" id="registar">Enviar</button>
                    <!--id:registrar-->                
                </section>
    <br>
    
    <!--<input type="submit" name="register">-->
    <dialog id="dialogo">        
            <p>Cuenta Registrada</p>
            <p>Ahora puedes ingresar a la pagina principal</p>  
            <a href="principal_estudiantes.php"><button class="enviar" id="aceptar" onclick="añadir('modernps')">Aceptar</button></a>  
    <dialog> 
</form>
        <?php 
        include("registrar_copy.php");
        ?>
<!--<script src="Registro_alumno.js"></script>-->
</body>
</html>