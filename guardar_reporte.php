<?php
session_start(); //cambio
include('con_db.php');

if (isset($_POST['register'])) {
    if(strlen($_POST['ejercicioRealizado']) >= 1 && strlen($_POST['comentario']) >= 1){
        
        //$Numcontrol= $_POST['numControl']; 
        $Numcontrol= $_SESSION['numControl'];
        $comentario = trim($_POST['comentario']);


        if(!empty($_POST['ejercicioRealizado'])){
            $select = $_POST['ejercicioRealizado'];
        }else{
            echo '
            <script>
            alert("Llena todos los campos por favor");
            </script>
            ';
        }
        if(!empty($_POST['estrellas'])){
            $selecte= $_POST['estrellas'];
        }else{
            echo '
            <script>
            alert("Llena todos los campos por favor");
            </script>
            ';
        }
        $ejercicioid= trim($_POST['ejercicioRealizado']);
        $estrellas = trim($_POST['estrellas']);
        $fechaReg= date("d/m/y");
        

        $registro = "INSERT INTO reporteejercicios(idAlumnoEjercicio, fecha, calificacion, idEjercicio, NumControl, comentario) 
        VALUES (null,'$fechaReg','$selecte','$select','$Numcontrol','$comentario')";  
        
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
        //try{
        //$resultado = mysqli_query($conex, $registro);
        //}
        //catch(sql)

            

    }else{
        echo '
            <script>
            alert("Llena todos los campos por favor");
            </script>
            ';
    }
}
?>