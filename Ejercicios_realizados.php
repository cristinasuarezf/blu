<?php 
    session_start();
    include('con_db.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicios Realizados</title>
        <meta charset="utf-8"><meta name='viewport' content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Ejercicios_realizados.css">
        <link rel="shortcut icon" href="imagenes/logo.png" />
    
    </head>
<body>
    <div class="container">
        <header><h2 id="titulo">EJERCICIOS REALIZADOS</h2><br><br><br></header>
    <aside>
        
        <table align="center">
            <tr>
                <td style="border: none;">
                    <label>N° de control<br>  
                    <!---->            
                    <form>
                    <select id="NoControl" name="NoControl" size="1">
                    <option value="0">Seleccione</option>
                    <?php 
                        $consulta = "SELECT * FROM alumno";
                        $ejecutar= mysqli_query($conex, $consulta) or die(mysqli_error($conex));
                    ?>
                    <?php 
                        foreach($ejecutar as $opciones): ?>
                            <option value="<?php echo $opciones['numControl'] ?>">
                                <?php echo $opciones['numControl'] ?></option>
                    <?php endforeach ?>                             
                        <!--
                        <option value="2">20550748</option>-->
                    </select>     </label> 
                    <button class="ver" type="submit" name="register" id="register">Buscar</button>      
                </td>
                <td style="border: 5px solid rgb(228,255,239);">
                    <table>
                        <thread>
                            <tr>
                                <th id="titulosss">Nombre</th>
                                <th id="titulosss">Correo</th>
                                <th id="titulosss">Teléfono</th>
                            </tr>
                        </thread>
                    </thead>
                    <tbody>
                    <?php 
                    if(!empty($_GET['NoControl'])){
                        $selectN=$_GET['NoControl'];
                        $consultaA= "SELECT * FROM alumno WHERE numControl ='$selectN'";
                        $ejecutar= mysqli_query($conex, $consultaA) or die(mysqli_error($conex));
                        while($dat = $ejecutar ->fetch_object()){
                            echo "<tr>
                            <td>".$dat->nombre." ".$dat->apellido1."</td>
                            <td>".$dat->correoInstitucional."</td>
                            <td>".$dat->celular."</td>
                            </tr>";
                            }
                    }
                    /*if(($_POST['NoControl']>=1)){
                        $mysqli = new mysqli('localhost','root', '', 'blu');
                        $mysqli->set_charset("utf8");
                        if(!empty($_POST['NoControl'])){
                        $selectN= $_POST['Nocontrol'];
                        } else{
                        echo '<p>No elegiste un numero de control</p>';
                        } 
                        $query = $mysqli->query("SELECT * FROM alumno WHERE numControl ='$selectN'");
                        while($dat = $query ->fetch_object()){
                        echo "<tr>
                        <td>".$dat->nombre." ".$dat->apellido1."</td>
                        <td>".$dat->correoInstitucional."</td>
                        <td>".$dat->celular."</td>
                        </tr>";
                        }
                    }*/
                    ?>
                <!--
                <tr>
                    <td align="center" style="padding-top: 10px;"> <br><br><br></td>
                </tr>-->
                    </tbody>
                    </table>

                </td>
            </tr>
        </table>
        </form>
    </aside>
    <section>
        <table>
            <thead>
                <tr>
                    <th>No. Ejercicio</th>
                    <th>Fecha</th>
                    <th>Descripción</th> <!--Se refiere al comentario o al ejercicio?-->
                    <th>Estrellas</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                    if(!empty($_GET['NoControl'])){
                        $selectN=$_GET['NoControl'];
                        $consultaA= "SELECT * FROM reporteejercicios WHERE NumControl ='$selectN'";
                        $ejecutar= mysqli_query($conex, $consultaA) or die(mysqli_error($conex));
                        while($dat = $ejecutar ->fetch_object()){
                            echo "<tr>
                            <td>".$dat->idEjercicio."</td>
                            <td>".$dat->fecha."</td>
                            <td>".$dat->comentario."</td>
                            <td>".$dat->calificacion."</td>
                            </tr>";
                            }
                    } 
                ?>
                <!--<tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>-->
            </tbody>
        </table><br>
    </section>
        <footer>
        <button class="ver" type="button"> <a href="principal_psicologos.php">Menú principal</a></button>&nbsp;&nbsp;&nbsp;
        </footer>
        
    </div>
</body>
</html>