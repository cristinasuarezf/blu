<!DOCTYPE html><html><head>
    <?php
    session_start(); // modificación 
   
    ?>
    <title>Reporte de ejercicio realizado</title>
	<meta charset="utf-8">
    <meta name='viewport' content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/logo.png"/>
    <link rel="stylesheet" href="Reporte_ejercicio_realizadoo.css">

</head>
<body>
    <div class="container">
        <header class="hijos">
            <h2 id="titulo">REPORTE DE EJERCICIO REALIZADO</h2>
        </header>
        <section class="hijos"> 

        <form  method="POST" id="test" name="" action="guardar_reporte.php">
                <!--method="POST"-->
                <table>
                    <tr>
                        <td width="600px" align="left"><h3>Ejercicio realizado</h3></td>
                        <td width="600px"><select id="ejercicioRealizado" name="ejercicioRealizado">
                                <option value="">Seleccione el ejercicio realizado</option>
                                <option value="50005">Técnica 4-7-8</option>
                                <option value="50006">Respiración Abdominal</option>
                                <option value="50007">Meditación Mindfulness</option>
                                <option value="50008">Estiramientos</option>
                                <option value="50009">Gimnasia cerebral</option>
                            </select><br><br></td>
                    </tr>
                    <tr>
                        <td align="left"><h3>¿Cómo te sientes?</h3></td>
                        <td><textarea id="comentario" name="comentario" cols="40" rows="3"></textarea> </td>
                    </tr>
                    <tr>
                        <td align="left"><h3>Califica el ejercicio</h3></td>
                        <td><p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5" size=""><label for="radio1">★</label>
                            <input id="radio2" type="radio" name="estrellas" value="4"><label for="radio2">★</label>
                            <input id="radio3" type="radio" name="estrellas" value="3"><label for="radio3">★</label>
                            <input id="radio4" type="radio" name="estrellas" value="2"><label for="radio4">★</label>
                            <input id="radio5" type="radio" name="estrellas" value="1"><label for="radio5">★</label>
                          </p> </td>
                    </tr>
                    <?php
                        $id= $_SESSION['usuario']; // <--- This stuff is god
                        echo $_SESSION['usuario'];

                       echo"
                        <tr><td class='oculto'>N Control:</td><td><input type='text'name='numControl' value='".$id."' class='oculto'></td></tr>
                        "
                    ?>
                    <tr>
                        <td></td>
                        <!--  name="register" id="register"-->
                        <td><br><br><button class="ver" type="submit" name="register" id="register">Enviar</button>
                        
                    </tr>
                </table>
            </form>
        </section>
    </div>
</body>
</html>