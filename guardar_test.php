llegue a guardar
<?php 
include('con_db.php');

    $phpVar1 = $_GET["resultado"];
    $phpVar2 = $_GET["nc"];
 

    $fechaReg= date("Y-m-d"); 
    
    echo 'Hola'.$phpVar1. $phpVar2;
    $registro = "INSERT INTO test(idtest, resultados, fecha, numControl) 
    VALUES (NULL,'$phpVar1','$fechaReg','$phpVar2')";
    if(mysqli_query($conex, $registro)){
            echo '
            <script>
            alert("Se han enviado tus respuestas!");
            window.location= "principal_estudiantes.php";
            </script>
            ';
        }else{
            echo "Error ".$registro."<br>". mysqli_error($conex);
        }
    //$ingreso = mysqli_query($conex, $registro);  
     
    echo '
    <script>
    alert("Se han enviado tus respuestas!");
    window.location= "principal_estudiantes.php";
    </script>
    ';

?>