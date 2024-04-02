<?php 
include("con_db.php");
if($conex){
	//echo "todo correcto";
}
if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1) {
	    $NC= trim($_POST['NC']);
		$name = trim($_POST['nombre']);
		$ap1 = trim($_POST['ap1']);
		$ap2 = trim($_POST['ap2']);
	    $mail = trim($_POST['email']);
		$celular = trim($_POST['tel']);
		$pass= trim($_POST['pass']);
		if(!empty($_POST['carrera'])){
			$select = $_POST['carrera'];
			//echo 'Elegistes'.$select;
		}else{
			//echo 'Por favor elige una opción';
		}
		if(!empty($_POST['genero'])){
			$selectg = $_POST['genero'];
			//echo 'Elegistes'.$select;
		}else{
			//echo 'Por favor elige una opción';
		}
		$carrera = var_dump($_POST['carrera']);
		$genero = trim($_POST['genero']);
	    //$fechareg = date("y/m/d");
		$consulta ="INSERT INTO alumno(numControl, nombre, apellido1, apellido2, correoInstitucional, celular, genero, carrera) 
		VALUES ('$NC','$name','$ap1','$ap2','$mail','$celular','$selectg','$select')";
	    $usuario = "INSERT INTO cuenta_alumno(idCuentaA, numcontrol, pass) 
		VALUES (NULL,'$NC','$pass')";
		$resultado = mysqli_query($conex,$consulta);
		if($resultado){
           	    
		}else{
		    echo '<script>
        alert("Hubo un error al registrarte. Por favor, inténtalo de nuevo.");
        </script>';
		}
		$resultado2 =mysqli_query($conex, $usuario);
		if($resultado2){
            echo '
				<script>
				alert("Te has registrado! Ahora inicia sesión con tu nueva cuenta:)");
				window.location= "inicio_sesion_alumno.php";
				</script>
			';
	    } else {
	    	echo '
				<script>
				alert("Los campos estan vacios, por favor completalos! :)2");
				</script>
			';
		}	    
	    /*if ($resultado) {
	    	echo '
				<script>
				alert("Te has registrado! Ahora inicia sesión con tu nueva cuenta:)");
				window.location= "inicio_sesion_alumno.php";
				</script>
			';
	    } else {
	    	echo '
				<script>
				alert("Los campos estan vacios, por favor completalos! :)2");
				</script>
			';
		}
		if($resultado2){
        	echo '
				<script>
				alert("Te has registrado! Ahora inicia sesión con tu nueva cuenta:)");
				</script>
			';
        }else{
        echo'error';
        }
    }   else {
		echo '
		<script>
		alert("Los campos estan vacios, por favor completalos! :)");
		</script>
	';*/
    }
}
?>