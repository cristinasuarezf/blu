<?php 
    session_start();
    include('con_db.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Test de ansiedad de Beck</title>
    <meta charset="utf-8">
    <meta name='viewport' content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/logo.png" />
    <link rel="stylesheet" href="Test_ansiedad_Beck.css">
    <script src="Test_ansiedad_Beckk.js" defer></script>
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>-->
</head>

<body>
    <div class="container">
        <header class="hijos">
            <h2 id="titulo">TEST DE ANSIEDAD DE BECK</h2>
            <h2 id="contenedor"></h2>
        </header>
        <aside class="hijos">
            <p id="parrafoInicial">Instrucciones: <br>
                En el cuestionario hay una lista de síntomas comunes de la ansiedad. Lea cada uno de los ítems
                atentamente, e indique cuánto le ha afectado en la última semana incluyendo hoy: <br><br>
                0 En absoluto.<br>
                1 Levemente.<br>
                2 Moderadamente.<br>
                3 Severamente.
            </p>
        </aside>
        <section class="hijos">
            <form method="POST" id="test" name="" action="guardar_test.php">
                <table>
                    <tr>
                        <td  align="left" style="color: rgb(96, 142, 254);"></td>
                        <td width="150px">0<br></td>
                        <td width="150px">1<br></td>
                        <td width="150px">2<br></td>
                        <td width="150px">3<br></td>
                    </tr>
                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Torpe o entumecido</td>
                        <td><input type="radio" id="op0" name="preg1" value="0"></td>
                        <td><input type="radio" id="op1" name="preg1" value="1"></td>
                        <td><input type="radio" id="op2" name="preg1" value="2"></td>
                        <td><input type="radio" id="op3" name="preg1" value="3"></td>
                    </tr>
                    
                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Acalorado</td>
                        <td><input type="radio" id="op0" name="preg2" value="0"></td>
                        <td><input type="radio" id="op1" name="preg2" value="1"></td>
                        <td><input type="radio" id="op2" name="preg2" value="2"></td>
                        <td><input type="radio" id="op3" name="preg2" value="3"></td>
                    </tr>

                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Con temblor en las piernas</td>
                        <td><input type="radio" id="op0" name="preg3" value="0"></td>
                        <td><input type="radio" id="op1" name="preg3" value="1"></td>
                        <td><input type="radio" id="op2" name="preg3" value="2"></td>
                        <td><input type="radio" id="op3" name="preg3" value="3"></td>
                    </tr>

                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Incapaz de relajarse</td>
                        <td><input type="radio" id="op0" name="preg4" value="0"></td>
                        <td><input type="radio" id="op1" name="preg4" value="1"></td>
                        <td><input type="radio" id="op2" name="preg4" value="2"></td>
                        <td><input type="radio" id="op3" name="preg4" value="3"></td>
                    </tr>

                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Con temor a que ocurra lo peor</td>
                        <td><input type="radio" id="op0" name="preg5" value="0"></td>
                        <td><input type="radio" id="op1" name="preg5" value="1"></td>
                        <td><input type="radio" id="op2" name="preg5" value="2"></td>
                        <td><input type="radio" id="op3" name="preg5" value="3"></td>
                    </tr>

                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Mareado o que se le va la cabeza</td>
                        <td><input type="radio" id="op0" name="preg6" value="0"></td>
                        <td><input type="radio" id="op1" name="preg6" value="1"></td>
                        <td><input type="radio" id="op2" name="preg6" value="2"></td>
                        <td><input type="radio" id="op3" name="preg6" value="3"></td>
                    </tr>

                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Con latidos del corazón fuertes y acelerados</td>
                        <td><input type="radio" id="op0" name="preg7" value="0"></td>
                        <td><input type="radio" id="op1" name="preg7" value="1"></td>
                        <td><input type="radio" id="op2" name="preg7" value="2"></td>
                        <td><input type="radio" id="op3" name="preg7" value="3"></td>
                    </tr>

                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Inestable</td>
                        <td><input type="radio" id="op0" name="preg8" value="0"></td>
                        <td><input type="radio" id="op1" name="preg8" value="1"></td>
                        <td><input type="radio" id="op2" name="preg8" value="2"></td>
                        <td><input type="radio" id="op3" name="preg8" value="3"></td>
                    </tr>

                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Atemorizado o asustado</td>
                        <td><input type="radio" id="op0" name="preg9" value="0"></td>
                        <td><input type="radio" id="op1" name="preg9" value="1"></td>
                        <td><input type="radio" id="op2" name="preg9" value="2"></td>
                        <td><input type="radio" id="op3" name="preg9" value="3"></td>
                    </tr>

                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Nervioso</td>
                        <td><input type="radio" id="op0" name="preg10" value="0"></td>
                        <td><input type="radio" id="op1" name="preg10" value="1"></td>
                        <td><input type="radio" id="op2" name="preg10" value="2"></td>
                        <td><input type="radio" id="op3" name="preg10" value="3"></td>
                    </tr>

                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Con sensación de bloqueo</td>
                        <td><input type="radio" id="op0" name="preg11" value="0"></td>
                        <td><input type="radio" id="op1" name="preg11" value="1"></td>
                        <td><input type="radio" id="op2" name="preg11" value="2"></td>
                        <td><input type="radio" id="op3" name="preg11" value="3"></td>
                    </tr>

                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Con temores en las manos</td>
                        <td><input type="radio" id="op0" name="preg12" value="0"></td>
                        <td><input type="radio" id="op1" name="preg12" value="1"></td>
                        <td><input type="radio" id="op2" name="preg12" value="2"></td>
                        <td><input type="radio" id="op3" name="preg12" value="3"></td>
                    </tr>

                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Inquieto o inseguro</td>
                        <td><input type="radio" id="op0" name="preg13" value="0"></td>
                        <td><input type="radio" id="op1" name="preg13" value="1"></td>
                        <td><input type="radio" id="op2" name="preg13" value="2"></td>
                        <td><input type="radio" id="op3" name="preg13" value="3"></td>
                    </tr>

                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Con miedo a perder el control</td>
                        <td><input type="radio" id="op0" name="preg14" value="0"></td>
                        <td><input type="radio" id="op1" name="preg14" value="1"></td>
                        <td><input type="radio" id="op2" name="preg14" value="2"></td>
                        <td><input type="radio" id="op3" name="preg14" value="3"></td>
                    </tr>

                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Con sensación de ahogo</td>
                        <td><input type="radio" id="op0" name="preg15" value="0"></td>
                        <td><input type="radio" id="op1" name="preg15" value="1"></td>
                        <td><input type="radio" id="op2" name="preg15" value="2"></td>
                        <td><input type="radio" id="op3" name="preg15" value="3"></td>
                    </tr>

                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Con temor a morir</td>
                        <td><input type="radio" id="op0" name="preg16" value="0"></td>
                        <td><input type="radio" id="op1" name="preg16" value="1"></td>
                        <td><input type="radio" id="op2" name="preg16" value="2"></td>
                        <td><input type="radio" id="op3" name="preg16" value="3"></td>
                    </tr>

                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Con miedo</td>
                        <td><input type="radio" id="op0" name="preg17" value="0"></td>
                        <td><input type="radio" id="op1" name="preg17" value="1"></td>
                        <td><input type="radio" id="op2" name="preg17" value="2"></td>
                        <td><input type="radio" id="op3" name="preg17" value="3"></td>
                    </tr>

                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Con problemas digestivos</td>
                        <td><input type="radio" id="op0" name="preg18" value="0"></td>
                        <td><input type="radio" id="op1" name="preg18" value="1"></td>
                        <td><input type="radio" id="op2" name="preg18" value="2"></td>
                        <td><input type="radio" id="op3" name="preg18" value="3"></td>
                    </tr>

                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Con desvanecimientos</td>
                        <td><input type="radio" id="op0" name="preg19" value="0"></td>
                        <td><input type="radio" id="op1" name="preg19" value="1"></td>
                        <td><input type="radio" id="op2" name="preg19" value="2"></td>
                        <td><input type="radio" id="op3" name="preg19" value="3"></td>
                    </tr>

                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Con rubor facial</td>
                        <td><input type="radio" id="op0" name="preg20" value="0"></td>
                        <td><input type="radio" id="op1" name="preg20" value="1"></td>
                        <td><input type="radio" id="op2" name="preg20" value="2"></td>
                        <td><input type="radio" id="op3" name="preg20" value="3"></td>
                    </tr>

                    <tr height="50px">
                        <td  align="left" style="color: rgb(96, 142, 254);">Con sudores, fríos o calientes</td>
                        <td><input type="radio" id="op0" name="preg21" value="0"></td>
                        <td><input type="radio" id="op1" name="preg21" value="1"></td>
                        <td><input type="radio" id="op2" name="preg21" value="2"></td>
                        <td><input type="radio" id="op3" name="preg21" value="3"></td>
                    </tr>


                    <?php
                        $id= $_SESSION['usuario']; // <--- This stuff is god
                        echo"
                        <tr>
                        <td class='oculto'>N Control:     </td><td><input type='text'id='numControl' value='".$id."' class='oculto'></td>
                        </tr>
                        "
                    ?>
                    
                </table>

                <table align="right">
                    <tr>
                        <td width="150px"> <button class="regresar"><a href="principal_estudiantes.php">Regresar</a></button></td>
                        <td width="150px"><button class="enviar" type="submit" id="enviar">Enviar</button></td>
                    </tr>
                </table>
            </form>

                        
            <dialog id="modal">        
                <p>Gracias por realizar el test</p>
                <p>Tus respuestas serán analizando y se te enviará un correo con tus resultados</p>  
                <a href="guardar_test.php"><button class="enviar" id="cerrar">Aceptar</button></a>  
            <dialog> 
        </section>

        
        <footer class="hijos">
        </footer>
    </div>
   
        <!--
        <script src="Test_ansiedad_Beckk.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        -->
</body>

</html>