<?php
session_start();

include('con_db.php');

$usuario=$_POST['usuario'];
$pass = $_POST['pass'];
 
if($usuario=='admin' && $pass=='12345'){
    header("location: admin/lista.php");
    $_SESSION['usuario']= $usuario;
    $_SESSION['tipo_usuario']= 'admin';
}

$validar_login = mysqli_query($conex, "SELECT idPsicologo, pass FROM cuenta_psicologo WHERE idPsicologo='$usuario'AND pass='$pass'");

if(mysqli_num_rows($validar_login) > 0){
    header("location: principal_psicologos.php");
    $_SESSION['usuario']= $usuario;
    $_SESSION['tipo_usuario']= 'psicologo'; //
    exit;
}else{
    echo '
    <script>
        alert("Ups parece que los datos son incorrectos! Intentalo de nuevo :)");
        window.location= "inicio_sesion_psicologo.php";
    </script>
    ';
    exit;
}
?>