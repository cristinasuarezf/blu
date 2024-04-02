<?php
session_start();

include('con_db.php');

$usuario=$_POST['usuario'];
$pass = $_POST['pass'];

$validar_login = mysqli_query($conex, "SELECT numcontrol, pass FROM cuenta_alumno WHERE numcontrol='$usuario'AND pass='$pass'");

if(mysqli_num_rows($validar_login) > 0){
    header("location: principal_estudiantes.php");
    $_SESSION['usuario']= $usuario;
    $_SESSION['tipo_usuario']= 'alumno'; //psicologo
   $_SESSION['numControl']=$usuario;
    exit;
}else{
    
	echo '
    <script>
        alert("Ups parece que los datos son incorrectos! Intentalo de nuevo :)");
        window.location= "inicio_sesion_alumno.php";
    </script>
    ';
    exit;
}
?>